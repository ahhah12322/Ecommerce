<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $user = session('user');
        
        if (!$user) {
            // Nếu chưa đăng nhập, chuyển hướng tới trang login
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để truy cập trang này.');
        }
        if ($user->role == 'admin') {
            return view('admin.index');
        }
        else if ($user->role == 'user') {
            return view('user.main.account');

        }
    }
}
