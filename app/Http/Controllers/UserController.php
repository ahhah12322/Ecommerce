<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\RentalContract;
use App\Models\VehicleImage;
use App\Models\Vehicle;

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

        $customers = User::where('role', '!=', 'admin')->paginate(5);
        return view('admin.main.customer.customer-list', compact('customers'));
    }

    public function detail($id)
    {
        $customer = User::findOrFail($id);

        // Lấy các RentalContracts có Customer ID là $customer->id và phân trang 5 dòng
        $rentalContracts = RentalContract::where('CustomerID', $customer->id)
        ->select('ContractID', 'Status', 'TotalCost as TotalAmount', 'CreationDate', 'payment_method')
        ->paginate(5);



        return view('admin.main.customer.customer-detail', compact('customer','rentalContracts'));
    }
    
    // public function listorder()
    // {    
    //     $user = session()->get('user');
    //     return view('admin.main.order.order-list', compact('user'));
    // }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|in:staff,admin',
            'status' => 'required|in:active,inactive',
            'phone' => 'required|string|max:15',
            'cccd' => 'required|string|max:12',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'status' => $request->status,
            'phone' => $request->phone,
            'cccd' => $request->cccd,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'User created successfully!');
    }


    public function history()
    {
        $user = Auth::user();
        // Lấy ID user hiện tại từ session hoặc auth
        $currentCustomerId = $user->id;

        // Lấy các RentalContracts liên quan đến CustomerID
        $rentalContracts = RentalContract::with(['vehicle.brand']) // Tải trước các liên kết nếu cần
            ->where('CustomerID', $currentCustomerId)
            ->orderBy('created_at', 'desc')
            ->paginate(3);


        // Lấy tất cả các vehicleID từ rentalContracts
        $vehicleId = $rentalContracts->pluck('VehicleID')->unique();

         // Lấy dữ liệu các vehicle tương ứng
        $vehicles = Vehicle::whereIn('id', $vehicleId)->get();



        // Mảng để lưu ảnh chính và ảnh phụ của từng xe
        $vehicleImages = [];

        // Duyệt qua từng xe để lấy ảnh chính và ảnh phụ
        foreach ($vehicles as $vehicle) {
            // Lấy ảnh chính của từng xe (IsMainImage = 1)
            $mainImage = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 1) // Lọc ảnh chính
                ->first();

            // Lấy ảnh phụ của từng xe (IsMainImage = 0)
            $additionalImages = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 0) // Lọc ảnh phụ
                ->get();

            // Lưu ảnh chính và ảnh phụ của xe vào mảng
            $vehicleImages[$vehicle->id] = [
                'mainImage' => $mainImage,
                'additionalImages' => $additionalImages,
            ];
        }

        // Trả về view cùng dữ liệu
        return view('user.main.history', compact('rentalContracts', 'vehicle', 'vehicleImages'));
    }

    

}
