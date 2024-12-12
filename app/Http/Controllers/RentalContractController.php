<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentalContract;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use DateTime;


class RentalContractController extends Controller
{


    // Hiển thị trang thanh toán 
    public function showCheckout(Request $request)
    {
        $cart = $request->cookie('cart') ? json_decode($request->cookie('cart'), true) : [];
        // Nếu không có dữ liệu trong cookie hoặc giỏ hàng rỗng
        if (!$cart || empty($cart)) {
            // Lấy một xe bất kỳ có trạng thái "Sẵn sàng"
            $defaultVehicle = DB::table('vehicles')->where('status', 'Sẵn sàng')->first();

            if (!$defaultVehicle) {
                return redirect()->route('cart')->with('error', 'Không có xe nào sẵn sàng để thuê. Vui lòng thử lại sau.');
            }

            // Gán giá trị mặc định vào giỏ hàng
            $cart = [
                [
                    'vehicle_id' => $defaultVehicle->id,
                    'name' => $defaultVehicle->VehicleName,
                    'price' => $defaultVehicle->rental_price_per_day, // Giá theo ngày
                    'priceh' => $defaultVehicle->rental_price_per_hour, // Giá theo giờ
                ]
            ];
        }
        
        $user = session('user'); // Lấy thông tin người dùng từ session

        return view('user.main.checkout', compact('cart', 'user'));
    }



    // Hiển thị trang đặt xe
    public function createOrder($vehicleId)
    {
        $vehicle = Vehicle::findOrFail($vehicleId); // Lấy thông tin xe
        return view('order.create', compact('vehicle'));
    }

    // Lưu thông tin đơn hàng vào bảng rental_contracts
    public function completeRental(Request $request)
{
    // Lấy giỏ hàng từ cookie
    $cart = $request->cookie('cart') ? json_decode($request->cookie('cart'), true) : [];

    $user = Auth::user();

    // Nếu giỏ hàng trống, tạo dữ liệu mặc định
    if (!$cart || empty($cart)) {
        $defaultVehicle = DB::table('vehicles')->where('id', 1)->where('status', 'Sẵn sàng')->first();

        if (!$defaultVehicle) {
            return redirect()->route('cart')->with('error', 'Không có xe sẵn sàng để thuê. Vui lòng thử lại sau.');
        }

        $cart = [
            [
                'vehicle_id' => $defaultVehicle->id,
                'name' => $defaultVehicle->VehicleName,
                'price' => $defaultVehicle->rental_price_per_day, // Giá theo ngày
                'priceh' => $defaultVehicle->rental_price_per_hour, // Giá theo giờ
            ]
        ];

        // Thiết lập thời gian mặc định
        $request->merge([
            'rental_start_date' => now()->addDay()->setTime(9, 0)->toDateTimeString(),
            'rental_end_date' => now()->addDays(2)->setTime(9, 0)->toDateTimeString(),
        ]);
    }

    // Kiểm tra trạng thái của các xe trong giỏ hàng
    foreach ($cart as $item) {
        $vehicle = DB::table('vehicles')->where('id', $item['vehicle_id'])->first();

        if (!$vehicle) {
            return redirect()->route('cart')->with('error', 'Xe không tồn tại trong hệ thống.');
        }

        if ($vehicle->status !== 'Sẵn sàng') {
            return redirect()->route('cart')->with('error', 'Xe "' . $vehicle->name . '" không còn ở trạng thái sẵn sàng. Vui lòng chọn xe khác.');
        }
    }

    // Tính tổng chi phí
    $totalCost = 0;
    foreach ($cart as $item) {
        // Tính chi phí dựa trên rental_start_date và rental_end_date
        $startDateTime = new DateTime($request->rental_start_date);
        $endDateTime = new DateTime($request->rental_end_date);
        $interval = $startDateTime->diff($endDateTime);
        $hours = $interval->h + ($interval->days * 24);

        if ($hours <= 6) {
            $totalCost += $item['priceh'] * $hours;
        } else {
            $days = intdiv($hours, 24);
            $remainingHours = $hours % 24;

            $totalCost += $item['price'] * $days;
            if ($remainingHours <= 6) {
                $totalCost += $item['priceh'] * $remainingHours;
            } else {
                $totalCost += $item['price'];
            }
        }
    }

    // Tạo bản ghi mới trong bảng rental_contracts
    foreach ($cart as $item) {
        DB::table('rental_contracts')->insert([
            'CustomerID' => $user->id,
            'VehicleID' => $item['vehicle_id'],
            'RentalStartDate' => $request->rental_start_date,
            'RentalEndDate' => $request->rental_end_date,
            'TotalCost' => $totalCost,
            'Status' => 'Đang chờ', // Trạng thái ban đầu
            'StatusPayment' => 'Chưa thanh toán',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }


    // Cập nhật trạng thái của xe
    DB::table('vehicles')->where('id', $item['vehicle_id'])->update([
        'status' => 'Đang thuê',
        'updated_at' => now(),
    ]);

    // Xóa giỏ hàng khỏi cookie
    $cookie = cookie('cart', null, -1); // Xóa cookie giỏ hàng

    return redirect()->route('account')->with('success', 'Hợp đồng đã được tạo thành công!')->withCookie($cookie);
}


    // Hiển thị danh sách đơn hàng
    public function orderList()
    {
        $orders = RentalContract::with(['customer', 'vehicle'])->get();
        return view('admin.main.order.orders-list', compact('orders'));
    }


    // Admin
    public function order_cart()
    {
        return view('admin.main.order.order-cart');
    }
    public function order_checkout()
    {
        return view('admin.main.order.order-checkout');
    }
    public function order_detail($id)
    {
        return view('admin.main.order.order-detail');
    }
    // public function listorder()
    // {
    //     return view('admin.main.order.orders-list');
    // }





    // User 

}
