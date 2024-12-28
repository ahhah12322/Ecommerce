<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\Registered;
use App\Mail\VerifyEmail;
use App\Mail\ForgotPass;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Mail;



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
        $user = User::where('email', $request->input('email'))->first();
        if (!$user->email_verified_at) {
            return redirect()->route('login')->with([
                'message' => 'Email chưa được xác minh!',
                'type' => 'warning',
                'email' => $user->email
            ]);
        } else {

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                session()->put('user', $user);

                if ($user->status === 'inactive') {
                    return redirect()->route('login')->with('error', 'Tài khoản của bạn không hoạt động. Vui lòng liên hệ với quản trị viên.');
                }

                else if ($user->role === 'admin' || $user->role === 'staff') {
                    return redirect()->route('admin');
                } else {
                    return redirect()->route('index');
                }
            } else {

                if (empty($request->input('email'))) {
                    return redirect()->route('login')->with([
                        'message' => 'Email không được bỏ trống!',
                        'type' => 'danger'
                    ]);
                }

                if (empty($request->input('password'))) {
                    return redirect()->route('login')->with([
                        'message' => 'Mật khẩu không được bỏ trống!',
                        'type' => 'danger'
                    ]);
                }
                // Kiểm tra lỗi cụ thể
                if (!User::where('email', $request->input('email'))->exists()) {
                    // Email không tồn tại trong cơ sở dữ liệu
                    return redirect()->route('login')->with([
                        'message' => 'Email không tồn tại!',
                        'type' => 'danger'
                    ]);
                }

                // Kiểm tra mật khẩu không đúng
                if (!Auth::attempt($credentials)) {
                    return redirect()->route('login')->with([
                        'message' => 'Sai mật khẩu!',
                        'type' => 'danger'
                    ]);
                }

                // Nếu email không đúng định dạng
                if (!filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
                    return redirect()->route('login')->with([
                        'message' => 'Email không đúng định dạng!',
                        'type' => 'danger'
                    ]);
                }
            }
        }
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

        ], [

            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự!',
        ]);

        try {
            if (User::where('email', $request->input('email'))->exists()) {
                // Email không tồn tại trong cơ sở dữ liệu
                return redirect()->back()->with([
                    'message' => 'Email đã tồn tại!',
                    'type' => 'danger'
                ]);
            } else {
                // Tạo user
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);

                if ($user) {
                    // Gửi email xác minh
                    Mail::to($user->email)->send(new VerifyEmail($user));

                    // Chuyển hướng đến trang chờ xác minh email
                    return redirect('/email/verify/wait')->with([
                        'type' => 'success',
                        'message' => 'Tạo người dùng và gửi email thành công. Hãy xác minh email của bạn.',
                    ]);
                } else {
                    return redirect()->back()->with([
                        'type' => 'danger',
                        'message' => 'Không thể tạo người dùng.',
                    ]);
                }
            }
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'type' => 'danger',
                'message' => 'Đã xảy ra lỗi: ' . $e->getMessage(),
            ]);
        }
    }

    public function verifyemail($email)
    {
        $user = User::where('email', $email)->whereNULL('email_verified_at')->firstOrFail();
        User::where('email', $email)->update(['email_verified_at' => date('Y-m-d H:i:s')]);
        // Cập nhật trường 'email_verified_at' sau khi xác minh
        // $user->update(['email_verified_at' => date('Y-m-d H:i:s')]);

        return redirect('/login')->with([
            'type' => 'success',
            'message' => 'Xác minh email thành công.',
        ]);
    }
    public function resendVerificationEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user->email_verified_at) {
            return redirect()->back()->with([
                'type' => 'info',
                'message' => 'Email đã được xác minh.',
            ]);
        }

        // Gửi email xác minh lại
        Mail::to($user->email)->send(new VerifyEmail($user));

        return redirect()->back()->with([
            'type' => 'success',
            'message' => 'Đã gửi lại email xác minh.',
        ]);
    }
    public function forgot(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Lấy thông tin người dùng từ email
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // Tạo mật khẩu mới ngẫu nhiên
            $newPassword = Str::random(8); // Ví dụ: 8 ký tự

            // Cập nhật mật khẩu đã mã hóa vào cơ sở dữ liệu
            $user->update([
                'password' => Hash::make($newPassword),
            ]);

            // Gửi email với mật khẩu mới
            Mail::to($user->email)->send(new ForgotPass($newPassword));
            return redirect('/login')->with([
                'type' => 'success',
                'message' => 'Mật khẩu mới đã được gửi qua email của bạn.',
            ]);
        }
        return back()->with([
            'type' => 'danger',
            'message' => 'Email không hợp lệ.',
        ]);
    }




    public function showHistory(Request $request)
    {
        return redirect()->route('register');
    }
}
