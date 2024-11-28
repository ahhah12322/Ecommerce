<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Hiển thị trang đăng nhập
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            // Lưu thông tin user vào session
            session()->put('user', $user);
            //$request->session()->flash('success', 'Đăng nhập thành công!');
    
            // Kiểm tra role và chuyển hướng
            if ($user->role === 'admin') {
                return redirect()->route('admin');
            } else {
                return redirect()->route('index');
            }
        }
    
        //return back()->withErrors(['email' => 'Thông tin đăng nhập không đúng.']);
        return redirect()->route('index');
    }


    // Đăng xuất
    public function logout(Request $request)
    {
        Auth::logout(); // Đăng xuất người dùng

        $request->session()->invalidate(); // Hủy session hiện tại
        $request->session()->regenerateToken(); // Regenerate CSRF token

        return redirect('/'); // Chuyển hướng về trang chủ
    }

    // Hiển thị trang đăng ký
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Xử lý đăng ký
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');//->with('success', 'Tài khoản của bạn đã được tạo thành công!');
    }
    public function showHistory(Request $request){
        return redirect()->route('register') ; 
    }
}
