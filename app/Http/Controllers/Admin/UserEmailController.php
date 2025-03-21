<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting2;
use App\Models\UserEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserEmailController extends Controller
{
    function index(Request $rq)
    {
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Category')],
        ];
        if ($rq->ajax()) {
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search) {
                $emails = UserEmail::where('email', 'like', '%' . $rq->search . '%')
                    ->orderBy('id')->paginate($numpage);
            } else {
                $emails = UserEmail::orderBy('id', 'desc')->paginate($numpage);
            }
            return view('layout-admin.pages.email.ajax-filter')->with('emails', $emails)->render();
        } else {
            $emails = UserEmail::orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.email.index', compact('emails', 'breadcrumb'));
        }
    }
    function newsletter()
    {
        $email = UserEmail::where('email', Auth::user()->email)->first();
        return view('layout-home.pages.account-newsletter', compact('email'));
    }
    function newsletterSave(Request $rq)
    {
        $tmpMail = Auth()->user()->email;
        if ($rq->is_subscribed) {
            $email = UserEmail::where('email', Auth::user()->email)->first();
            if (!$email) {
                $email = new UserEmail();
                $email->email = $tmpMail;
                $email->save();
            }
            $template = Setting2::where('title', 'mail_resign')->first();
            Mail::send('layout-auth.pages.mail-template', compact('template'), function ($message) use ($tmpMail, $template) {
                $message->to($tmpMail);
                $message->subject($template->title2);
            });
            return redirect()->back()->with('success', 'Chúng tôi đã cập nhật đăng ký của bạn.');
        } else {
            $email = UserEmail::where('email', $tmpMail)->first();
            if ($email) {
                $email->delete();
            }
            $template = Setting2::where('title', 'mail_unresign')->first();
            Mail::send('layout-auth.pages.mail-template', compact('template'), function ($message) use ($tmpMail, $template) {
                $message->to($tmpMail);
                $message->subject($template->title2);
            });
            return redirect()->back()->with('success', 'Chúng tôi đã xóa đăng ký nhận bản tin của bạn.');
        }
    }
    function addEmail(Request $rq)
    {
        if ($rq->email) {
            $email = UserEmail::where('email', $rq->email)->first();
            if ($email) {
                $email->status = 1;
                $email->save();
                return redirect()->back()->with('errors', 'Email đã đăng ký.');
            } else {
                $email = new UserEmail();
                $email->email = $rq->email;
                $email->save();
                $template = Setting2::where('title', 'mail_resign')->first();
                $tmpMail = $rq->email;
                try {
                    Mail::send('layout-auth.pages.mail-template', compact('template'), function ($message) use ($tmpMail, $template) {
                        $message->to($tmpMail);
                        $message->subject($template->title2);
                    });
                } catch (\Throwable $th) {
                    return redirect()->back()->with('success', 'Bạn đã đăng kí thành công.');
                }

                return redirect()->back()->with('success', 'Cảm ơn bạn đã đăng kí nhận bản tin.');
            }
        }
    }

    function registerEmail(Request $rq)
    {
        if ($rq->email) {
            $email = UserEmail::where('email', $rq->email)->first();
            if ($email) {
                // $email->status = 1;
                // $email->save();
                return response()->json([
                    'type' => 'errors',
                    'success' => false,
                    'message' => 'Email đã đăng ký!'
                ]);
            } else {
                $email = new UserEmail();
                $email->email = $rq->email;
                $email->status = 1;
                $email->save();
                $template = Setting2::where('title', 'mail_resign')->first();
                $tmpMail = $rq->email;
                try {
                    Mail::send('layout-auth.pages.mail-template', compact('template'), function ($message) use ($tmpMail, $template) {
                        $message->to($tmpMail);
                        $message->subject($template->title2);
                    });
                } catch (\Throwable $th) {
                    return response()->json([
                        'type' => 'success',
                        'success' => true,
                        'message' => 'Bạn đã đăng kí thành công.'
                    ]);
                }
                return response()->json([
                    'type' => 'success',
                    'success' => true,
                    'message' => 'Cảm ơn bạn đã đăng kí nhận bản tin.'
                ]);
            }
        }
    }
    function registerInfo(Request $rq) {
        try {
            $messages = [
                'required' => 'Trường :attribute là bắt buộc.',
                'string' => 'Trường :attribute phải là một chuỗi.',
                'max' => [
                    'string' => 'Trường :attribute không được vượt quá :max ký tự.',
                    'numeric' => 'Trường :attribute không được vượt quá :max.'
                ],
                'email' => 'Trường :attribute phải là một địa chỉ email hợp lệ.',
                'unique' => 'Trường :attribute đã tồn tại trong hệ thống.'
            ];
        
            $validator = Validator::make($rq->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:user_email,email',
                'content' => 'string|max:1000',
                'phone' => 'required|string|max:20',
            ], $messages);
        
    
            // Nếu có lỗi, trả về thông báo lỗi
            if ($validator->fails()) {
                return response()->json([
                    'type' => 'errors',
                    'success' => false,
                    'message' => $validator->errors()->all()
                ]);
            }
    
            $user = new UserEmail();
            $user->name = $rq->name;
            $user->email = $rq->email;
            $user->content = $rq->content;
            $user->phone = $rq->phone;
            $user->type = 'info';
            $user->status = 1;
            $user->save();
    
            return response()->json([
                'type' => 'success',
                'success' => true,
                'message' => 'Bạn đã đăng kí thành công.'
            ]);
        } catch (\Exception $e) {
            // Xử lý nếu có lỗi xảy ra trong quá trình xử lý
            return response()->json([
                'type' => 'errors',
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
    function sendEmail(Request $rq)
    {
        if ($rq->emails) {
            $emails = explode(',', $rq->emails);
            $template = Setting2::where('title', 'send_mail_user')->first();
            Mail::send('layout-auth.pages.mail-template', compact('template'), function ($message) use ($emails, $template) {
                $message->to($emails);
                $message->subject($template->title2);
            });
            return response()->json([
                'type' => 'update',
                'success' => true,
                'message' => __('Send') . ' ' . __('email') . ' ' . __('success') . ' !'
            ]);
        }
        return response()->json([
            'type' => 'update',
            'success' => true,
            'message' => __('Send') . ' ' . __('email') . ' ' . __('success') . ' !'
        ]);
    }

    function templateEmail()
    {
        $template = Setting2::wherein('title', ['mail_resign', 'mail_unresign', 'send_mail_user', 'mail_spin'])->get();
        return view('layout-admin.pages.email-template.index', compact('template'));
    }
    function templateEdit($id)
    {
        $template = Setting2::find($id);
        return view('layout-admin.pages.email-template.edit', compact('template'));
    }
    function templateUpdate(Request $rq)
    {
        $setting = Setting2::find($rq->id);
        $setting->title2 = $rq->title2;
        $setting->description  = $rq->contents;
        $setting->save();
        return response()->json([
            'type' => 'update',
            'success' => true,
            'message' => __('Update') . ' ' . __('template') . ' ' . __('success') . ' !'
        ]);
    }
}
