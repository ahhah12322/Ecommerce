<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        // Lấy thông tin user từ session
        $user = $request->session()->get('user', null); // Nếu không có session, trả về null

        // Kiểm tra nếu session không tồn tại
        if (!$user) {
            return redirect('/login')->with('error', 'Bạn cần đăng nhập trước.');
        }

        // Trả về view với dữ liệu user
        return view('user.main.account', compact('user'));
    }
}
