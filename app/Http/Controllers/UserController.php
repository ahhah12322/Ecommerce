<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('user.main.change-password');
    }

    public function changePassword(Request $request)
    {
    // Xác thực dữ liệu nhập vào
        $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
    ]);

    // Kiểm tra mật khẩu hiện tại có khớp không
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không đúng.']);
        }

    // Cập nhật mật khẩu mới
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('success', 'Mật khẩu đã được thay đổi thành công!');
    }

public function update(Request $request)
{
    // Xác thực dữ liệu từ form
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . Auth::id(), // Email phải unique, trừ chính người dùng
        'address' => 'required|string|max:255',
        'phone' => 'required|digits_between:10,15|unique:users,phone,' . Auth::id(),
        'cccd' => 'required|digits_between:10,12|unique:users,cccd,' . Auth::id(),
    ]);

    // Lấy thông tin người dùng hiện tại
    $user = Auth::user();

    // Cập nhật thông tin
    $user->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'address' => $request->input('address'),
        'phone' => $request->input('phone'),
        'cccd' => $request->input('cccd'),  // Số CC có thể trùng với người dùng khác, nếu trùng s�� bị l��i unique
    ]);

    // Trả về view với thông báo
    return redirect()->back()->with('success', 'Thông tin của bạn đã được cập nhật.');
}


public function updateAvatar(Request $request)
{
    // Kiểm tra nếu file được gửi lên
    if ($request->hasFile('avatar')) {
        // Lấy file ảnh
        $image = $request->file('avatar');
        
        // Kiểm tra nếu file là ảnh hợp lệ
        $request->validate([
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Kiểm tra định dạng và kích thước file
        ]);
        
        // Chuyển file thành chuỗi Base64 hoặc lưu trữ vào storage
        $imageData = file_get_contents($image);
        
        // Lưu vào cơ sở dữ liệu
        $user = auth()->user(); // Lấy user đang đăng nhập
        $user->avatar = $imageData; // Lưu ảnh dưới dạng binary
        $user->save(); // Cập nhật thông tin người dùng
        
        // Trả về phản hồi thành công
        return back()->with('success', 'Avatar đã được cập nhật!');
    }

    // Nếu không có file ảnh
    return back()->with('error', 'Vui lòng chọn ảnh!');
}

    //admin
    public function list()
    {

        $customers = User::where('role', '!=', 'admin')->get();
        return view('admin.main.customer.customer-list', compact('customers'));
    }

    public function detail($id)
    {
        $customer = User::findOrFail($id);
        return view('admin.main.customer.customer-detail', compact('customer'));
    }
    
    // public function listorder()
    // {
    //     $user = session()->get('user');
    //     return view('admin.main.order.order-list', compact('user'));
    // }
}
