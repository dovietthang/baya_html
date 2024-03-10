<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Helpers\Helpers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
class LoginController extends Controller
{
    function login(Request $rq){
        if($rq->route()->getName() == "login.shop"){
            if(Auth::user()){
                return redirect()->route('account');
            }
            return view('layout-home.pages.login');
        }
        if(Auth::user()){
            return redirect()->route('dashboard');
        }
        return view('layout-auth.pages.login');
    }
    function postLogin(Request $rq){
        if(Auth::attempt(['email' => $rq->email, 'password' => $rq->password], $rq->remember)){
            if(Auth::user()->status == 0){
                Auth::logout();
                return redirect()->route('layout-home.pages.login')->with('msg_login', __('Your account has been locked !'));
            }
            else{
                if($rq->route()->getName() == "post.login.shop" || $rq->route()->getName() == "login.shop"){
                    return redirect()->route('home');
                }
                return redirect()->route('dashboard');
            }
        }
        else{
            if($rq->email == '' || $rq->password == ''){
                return redirect()->back()->with('msg_login', __('No email or password entered !'));
            }
            else{
                if($rq->route()->getName() == "post.login.shop" || $rq->route()->getName() == "login.shop"){
                    return redirect()->route('login.shop')->with('msg_login', __('Wrong email or password !'));
                }
                return redirect()->route('login')->with('msg_login', __('Wrong email or password !'));
            }
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function logoutShop(){
        Auth::logout();
        return redirect()->route('login.shop');
    }

    public function rsPassword(Request $rq){
        if($rq->route()->getName() == "reset.shop"){
            return view('layout-home.pages.forgotpassword');
        }
        return view('layout-auth.pages.reset');
    }
    public function rsPasswordUser(){
        return view('pages-front.user.reset');
    }
    public function postRsPassword(Request $rq){
        $rule = [
            'forgot_email' => 'required|email'
        ];
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rule, $messages);
        if ($check->passes()){
            $email = $rq->forgot_email;
            $user = User::where('email', $email)->first();
            if (!$user){
                if($rq->route()->getName() == "send.forgot.shop"){
                    return redirect()->route('login.shop')->with('msg_rs', __('A link has been sent to your email. Please access your email') . ' !');
                }
                return redirect()->route('login')->with('msg_rs', __('A link has been sent to your email. Please access your email') . ' !');
            }
            PasswordReset::where('email', $email)->delete();
            $token = sha1(Str::random(40) . uniqid());
            $now = Carbon::now();
            $newEmail = new PasswordReset();
            $newEmail->email = $email;
            $newEmail->token = $token;
            $newEmail->created_at = $now;
            $newEmail->save();
            $url = route('rs-token', [$token]);
            if($rq->route()->getName() == "send.forgot.shop"){
                $url = route('rs-token.shop', [$token]);
            }
            Mail::send('layout-auth.pages.sendmail', compact('url', 'user'), function ($message) use ($user){
                $message->to($user->email, $user->name);
                $message->subject(__('Request a password reset'));
            });
            if($rq->route()->getName() == "send.forgot.shop"){
                return redirect()->route('login.shop')->with('msg_rs', __('A link has been sent to your email. Please access your email') . ' !');
            }
            return redirect()->route('login')->with('msg_rs', __('A link has been sent to your email. Please access your email') . ' !');
        }
        else{
            return redirect()->back()->withErrors($check);
        }
    }
    public function rsToken(Request $rq, $token){
        $pwToken = PasswordReset::where('token', $token)->first();
        if (!$pwToken){
           $msg_rs = 'Đường đẫn không tồn tại !';
            return view('layout-auth.pages.errors', compact('msg_rs'));
       }
       $day = Carbon::createFromFormat('Y-m-d H:i:s', $pwToken->created_at);
       $now = Carbon::now();
        $dif = $now->diffInHours($day);
        if ($dif >= 3){
            PasswordReset::where('token', $token)->delete();
            return view('layout-auth.pages.errors')->with('msg_rs', 'Link đã hết hạn !');
        }
        if($rq->route()->getName() == "rs-token.shop"){
            return view('layout-home.pages.form-rspassword', compact('token'));
        }
        return view('layout-auth.pages.form-rspassword', compact('token'));
    }
    public function rsPwd(Request $rq){
        $pwToken = PasswordReset::where('token', $rq->token)->first();
        if (!$pwToken){
            $msg_rs = 'Link đã hết hạn !';
            return view('layout-auth.pages.errors', compact('msg_rs'));
        }
        $day = Carbon::createFromFormat('Y-m-d H:i:s', $pwToken->created_at);
        $now = Carbon::now();
        $dif = $now->diffInHours($day);
        if ($dif >= 3){
            PasswordReset::where('token', $rq->token)->delete();
            return view('layout-auth.pages.errors')->with('msg_rs', __('Link has expired !'));
        }
        $rule = [
            'new_password' => 'required|max:50',
            'comfirm_password' => 'required|same:new_password'
        ];
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rule, $messages);
        if ($check->passes()){
            $user = User::where('email', $pwToken->email)->first();
            $user->password = Hash::make($rq->new_password);
            $user->save();
            PasswordReset::where('email', $pwToken->email)->delete();
            if($user->role > 2){
                return redirect()->route('login.shop')->with('msg_rs', __('Change password successfully !'));
            }
            return redirect()->route('login')->with('msg_rs', __('Change password successfully !'));
        }
        else{
            return redirect()->back()->withErrors($check->errors());
        }
    }

}
