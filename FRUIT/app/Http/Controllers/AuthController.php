<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getlogin()
    {
        return view('frontend.login');
    }

    public function dologin(Request $request)
    {
        // Ràng buộc dữ liệu đầu vào
        $request->validate([
            'username' => 'required|string|max:255', // Username hoặc Email
            'password' => 'required|string|min:2',  // Mật khẩu
        ], [
            'username.required' => 'Vui lòng nhập email hoặc tên người dùng.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 2 ký tự.',
        ]);
    
        $credentials = [
            'password' => $request->password,
            'status' => 1, // Chỉ cho phép người dùng có trạng thái "Hoạt động"
        ];
    
        // Kiểm tra xem input là email hay username
        if (filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $request->username;
        } else {
            $credentials['username'] = $request->username;
        }
    
        // Thực hiện đăng nhập
        if (Auth::attempt($credentials)) {
            // Lấy thông tin người dùng đã đăng nhập
            $user = Auth::user();
    
            // Kiểm tra nếu người dùng là admin
            if ($user->roles == 'admin') {
                return redirect()->route('admin.dashboard'); // Chuyển hướng đến trang admin
            }
    
            // Nếu không phải admin, chuyển hướng đến trang home
            return redirect()->route('frontend.home');
        } else {
            return redirect()->route('website.getlogin')->with('message', 'Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập.');
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('frontend.home');
    }

    public function addUser()
    {
        return view ('frontend.addUser');
    }

    public function save(Request $request)
    {
        // Ràng buộc validate
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:2',
            'gender' => 'required|in:0,1', // Chỉ chấp nhận 0 hoặc 1
            'phone' => 'required|regex:/^0[0-9]{9,10}$/', // Số điện thoại Việt Nam
            'address' => 'required|string|max:500',
        ], [
            'name.required' => 'Tên là bắt buộc.',
            'username.required' => 'Tên đăng nhập là bắt buộc.',
            'username.unique' => 'Tên đăng nhập đã tồn tại.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu phải có ít nhất 2 ký tự.',
            'password.confirmed' => 'Mật khẩu không khớp.',
            'gender.required' => 'Giới tính là bắt buộc.',
            'gender.in' => 'Giới tính chỉ chấp nhận giá trị 0 (Nữ) hoặc 1 (Nam).',
            'phone.required' => 'Số điện thoại là bắt buộc.',
            'phone.regex' => 'Số điện thoại không hợp lệ.',
            'address.required' => 'Địa chỉ là bắt buộc.',
        ]);
    
        // Lưu thông tin người dùng
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender; // Lưu giá trị 0 hoặc 1
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->created_at = date('Y-m-d H:i:s');
        $user->created_by = Auth::id() ?? 1;
    
        $user->save();
    
        return redirect('register')->with('msg', 'Đăng ký tài khoản người dùng thành công!');
    }
    
}