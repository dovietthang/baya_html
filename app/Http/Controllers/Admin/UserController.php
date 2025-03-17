<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Helpers\Helpers;
use App\Models\Address;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    function index(Request $rq){
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Account')],
        ];
        if ($rq->ajax()) {
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search) {
                $users = User::where('name', 'like', '%' . $rq->search . '%')
                    ->orwhere('email', 'like', '%' . $rq->search . '%')->orderBy('id')->paginate($numpage);
            } else {
                $users = User::orderBy('id', 'desc')->paginate($numpage);
            }
            return view('layout-admin.pages.users.ajax-filter')->with('users', $users)->render();
        } else {
            $users = User::orderBy('id', 'desc')->paginate($numpage);
            return view('layout-admin.pages.users.index', compact('users', 'breadcrumb'));
        }
    }
    function add(){
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => route('index-user'), 'name' => __('Account')],
            ['link' => 'javascript:void()', 'name' => __('Add')]
        ];
        return view('layout-admin.pages.users.add', compact('breadcrumb'));
    }
    public function save(Request $rq)
    {
        $rules = [
            'fullname' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users,email',
            'status' => 'required',
            'role' => 'required',
            'password' => 'required|min:5|max:40',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rules, $messages);

        if ($check->passes()) {
            // Tạo mới user
            $user = new User();
            $user->name = $rq->fullname;
            $user->email = $rq->email;
            $user->password = Hash::make($rq->password);
            $user->role = $rq->role;
            $user->status = $rq->status;
            $user->gender = 1;

            // Xử lý upload ảnh (nếu có)
            if ($rq->hasFile('photo')) {
                // Lấy file ảnh từ request
                $file = $rq->file('photo');
                
                // Tạo tên file duy nhất
                $fileName = time() . '_' . $file->getClientOriginalName();
                
                // Lưu ảnh vào storage/avatar
                $path = $file->storeAs('avatar', $fileName, 'public');
                
                // Gán đường dẫn ảnh vào user
                $user->photo = $path;
            }

            // Lưu user vào database
            $user->save();

            return response()->json([
                'type' => 'insert',
                'success' => true,
                'message' => __('Add') . ' ' . __('account') . ' ' . __('success') . ' !',
                'photo_url' => $user->photo ? Storage::url($user->photo) : null // Trả về URL ảnh (nếu có)
            ]);
        } else {
            return response()->json([
                'type' => 'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Add') . ' ' . __('account') . ' ' . __('error') . ' !'
            ]);
        }
    }
    function edit($id){
        if ($id) {
            $breadcrumb = [
                ['link' => route('dashboard'), 'name' => __('Dashboard')],
                ['link' => route('index-user'), 'name' => __('Account')],
                ['link' => 'javascript:void()', 'name' => __('Edit')]
            ];
            $user = User::find($id);
            return view('layout-admin.pages.users.edit', compact('user', 'breadcrumb'));
        }
    }
    public function update(Request $rq)
    {
        $rules = [
            'fullname' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users,email,' . $rq->id . ',id',
            'status' => 'required',
            'password' => 'nullable|min:5|max:40',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' 
        ];
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rules, $messages);

        if ($check->passes()) {
            $user = User::find($rq->id);
            if (!$user) {
                return response()->json([
                    'type' => 'update',
                    'success' => false,
                    'message' => __('User not found')
                ]);
            }

            if ($rq->hasFile('photo')) {
                $file = $rq->file('photo');
                
                $fileName = time() . '_' . $file->getClientOriginalName();
                
                $path = $file->storeAs('avatar', $fileName, 'public');
                
                if ($user->photo && Storage::disk('public')->exists($user->photo)) {
                    Storage::disk('public')->delete($user->photo);
                }

                $user->photo = $path;
            }

            // Cập nhật các trường khác
            $user->name = $rq->fullname;
            $user->email = $rq->email;
            if ($rq->password != null) {
                $user->password = Hash::make($rq->password);
            }
            if (isset($rq->role)) {
                $user->role = $rq->role;
            }
            $user->status = $rq->status;
            $user->save();

            return response()->json([
                'type' => 'update',
                'success' => true,
                'message' => __('Update') . ' ' . __('account') . ' ' . __('success') . ' !',
                'photo_url' => $user->photo ? Storage::url($user->photo) : null // Trả về URL ảnh (nếu có)
            ]);
        } else {
            return response()->json([
                'type' => 'update',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('account') . ' ' . __('error') . ' !'
            ]);
        }
    }
    function delete(Request $rq, $id){
        if ($id) {
            $currentPage = (int)$rq->page;
            $user = User::find($id);
            $user->delete();
            $users = User::orderBy('id', 'desc')->paginate($rq->pagenum);
            $getTatalPage = $users->lastPage();
            if ($rq->search != '') {
                $users = User::where('name', 'like', '%' . $rq->search . '%')
                    ->orwhere('user_name', 'like', '%' . $rq->search . '%')
                    ->orwhere('email', 'like', '%' . $rq->search . '%')->orderBy('id', 'desc')->paginate($rq->pagenum);
                $getTatalPage = $users->lastPage();
                if ($currentPage > $getTatalPage - 1) {
                    Paginator::currentPageResolver(function () use ($getTatalPage) {
                        return $getTatalPage;
                    });
                }
            } else {
                if ($currentPage > $getTatalPage - 1) {
                    Paginator::currentPageResolver(function () use ($getTatalPage) {
                        return $getTatalPage;
                    });
                }
            }
            return response()->json([
                'success' => true,
                'message' => __('Delete') . ' ' . __('account') . ' ' . $user->name . ' ' . __('success') . ' !',
                'messages' => view('layout-admin.pages.users.ajax-filter')->with('users', $users)->render()
            ]);
        }
    }
    public function profile($id)
    {
        $breadcrumb = [
            ['link' => '/', 'name' => __('Home')],
            ['link' => 'javascript:void()', 'name' => __('Profile')]
        ];
        $user = User::find($id);
        return view('layout-admin.pages.users.profile', compact('user', 'breadcrumb'));
    }

    public function userProfile()
    {
        $user = User::find(Auth::user()->id);
        $address = Address::where('user_id', Auth::user()->id)->where('is_default', 1)->first();
        return view('pages-front.users.profile', compact('user', 'address'));
    }
    public function saveImageUser(Request $rq)
    {
        // Quy tắc validate: yêu cầu file ảnh hợp lệ
        $rules = [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Giới hạn kích thước 2MB
        ];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);

        if ($check->passes()) {
            // Tìm user theo ID
            $user = User::find($rq->id);
            if (!$user) {
                return response()->json([
                    'type' => 'update',
                    'success' => false,
                    'message' => __('User not found')
                ]);
            }

            // Xử lý upload ảnh
            if ($rq->hasFile('photo')) {
                // Lấy file ảnh từ request
                $file = $rq->file('photo');
                
                // Tạo tên file duy nhất
                $fileName = time() . '_' . $file->getClientOriginalName();
                
                // Lưu ảnh vào storage/avatar
                $path = $file->storeAs('avatar', $fileName, 'public');
                
                // Xóa ảnh cũ nếu tồn tại
                if ($user->photo && Storage::disk('public')->exists($user->photo)) {
                    Storage::disk('public')->delete($user->photo);
                }

                // Cập nhật đường dẫn ảnh vào database
                $user->photo = $path;
                $user->save();

                return response()->json([
                    'type' => 'update',
                    'success' => true,
                    'message' => __('Update') . ' ' . __('photo') . ' ' . __('success') . ' !',
                    'photo_url' => Storage::url($path) // URL công khai của ảnh
                ]);
            } else {
                return response()->json([
                    'type' => 'update',
                    'success' => false,
                    'message' => __('No photo uploaded')
                ]);
            }
        } else {
            return response()->json([
                'type' => 'update',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('photo') . ' ' . __('error') . ' !'
            ]);
        }
    }
    public function changePassword(Request $rq)
    {
        $rules = [
            'password' => 'required',
            'new_password' => 'required|max:50',
            'confirm_new_password' => 'required|same:new_password'
        ];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()) {
            $user = User::find($rq->id);
            if (Hash::check($rq->password, $user->password)) {
                $user->password = Hash::make($rq->new_password);
                $user->save();
                return response()->json([
                    "type" => 'update',
                    'success' => true,
                    'message' => __('Update') . ' ' . __('password') . ' ' . __('success') . ' !'
                ]);
            } else {
                return response()->json([
                    'type' => 'update',
                    'success' => false,
                    'errorpassword' => __('Incorrect password !')
                ]);
            }
        } else {
            return response()->json([
                'type' => 'update',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('password') . ' ' . __('error') . ' !'
            ]);
        }
    }

    public function userProfileImg(Request $rq)
    {
        $user = User::find(Auth::user()->id);
        $user->photo = $rq->file;
        $user->save();
        return redirect()->back()->with('msg', __('Update photo success'));
    }

    public function userProfileInfo(Request $rq)
    {
        $user = User::find(Auth::user()->id);
        $userShip = Address::where('user_id', $user->id)->where('is_default', 1)->first();
        $userShip->address = $rq->shipto;
        $userShip->save();
        $user->name = $rq->name;
        $user->phone = $rq->phone;
        $user->country = $rq->country;
        $user->address = $rq->address;
        $user->address2 = $rq->address2;
        $user->save();
        return redirect()->back()->with('msg', __('Update profile success'));
    }

    public function userProfileChangePassword(Request $rq){
        $rules = [
            'password' => 'required',
            'new_password' => 'required|min:6|max:50',
            'confirm_new_password' => 'required|same:new_password'
        ];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()) {
            $user = User::find(Auth::user()->id);
            if (Hash::check($rq->password, $user->password)) {
                $user->password = Hash::make($rq->new_password);
                $user->save();
                return redirect()->back()->with('msg', __('Change password successfully !'))->with('msg-r', true);
            }
            else return redirect()->back()->with('msg-err', __('Incorrect password !'))->with('msg-r', true);
        }
        else{
            return redirect()->back()->withErrors($check)->withInput()->with('msg-r', true);
        }
    }

    public function resignUser(){
        return view('layout-home.pages.register');
    }

    public function resignSaveUser(Request $rq){
        $rules = [
            'firstname' => 'required|min:1|max:20',
            'lastname' => 'required|min:1|max:30',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:40',
            'password_confirmation' => 'required|same:password',
        ];
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()){
            $user = new User();
            $user->name = $rq->firstname;
            $user->last_name = $rq->lastname;
            $user->email = $rq->email;
            $user->birth = $rq->dob;
            $user->gender = $rq->gender;
            $user->password = Hash::make($rq->password);
            $user->save();
            // $email = UserEmail::where('email', $rq->email)->first();
            // if(!$email){
            //     $email = new UserEmail();
            //     $email->email = $rq->email;
            //     $email->save();
            // }
            return redirect()->back()->with('msg_resign', __('Sign up for a personal account') . ' !');
        }
        else{
            return redirect()->back()->withErrors($check)->withInput();
        }
    }

}
