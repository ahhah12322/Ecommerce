<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentalContract;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\DB;
use DateTime;

class AdminOrderController extends Controller
{
    public function showOrderForm()
    {
        // Lấy danh sách người dùng và xe sẵn sàng
        $users = User::where('role', 'user')->get();
        $vehicles = Vehicle::where('status', 'Sẵn sàng')->get();

        return view('admin.main.order.order-add', compact('users', 'vehicles'));
    }

    public function storeOrder(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'vehicle_id' => 'required|exists:vehicles,id',
            'rental_start_date' => 'required|date|after:now',
            'rental_end_date' => 'required|date|after:rental_start_date',
        ]);


        


        // Lấy thông tin admin từ session
        $admin = session('user');

        // Kiểm tra xe có sẵn không
        $vehicle = Vehicle::findOrFail($validated['vehicle_id']);
        if ($vehicle->status !== 'Sẵn sàng') {
            return back()->withErrors(['vehicle_id' => 'Xe đã được thuê hoặc không khả dụng.']);
        }

        $paymentMethod = $request->input('payment_method');


        // Tính Cost
        $totalCost = 0;
        $price = $vehicle->rental_price_per_day;
        $priceh = $vehicle->rental_price_per_hour;
        
        
            // Tính chi phí dựa trên rental_start_date và rental_end_date
            $startDateTime = new DateTime($request->rental_start_date);
            $endDateTime = new DateTime($request->rental_end_date);
            $interval = $startDateTime->diff($endDateTime);
            $hours = $interval->h + ($interval->days * 24);
    
            if ($hours <= 6) {
                $totalCost += $priceh * $hours;
            } else {
                $days = intdiv($hours, 24);
                $remainingHours = $hours % 24;
    
                $totalCost += $price * $days;
                if ($remainingHours <= 6) {
                    $totalCost += $priceh * $remainingHours;
                } else {
                    $totalCost += $price;
                }
            }
        




        // Tạo hợp đồng
        RentalContract::create([
            'CustomerID' => $validated['user_id'],
            'VehicleID' => $validated['vehicle_id'],
            'RentalStartDate' => $validated['rental_start_date'],
            'RentalEndDate' => $validated['rental_end_date'],
            'TotalCost' => $totalCost, // Tính toán giá nếu cần
            'Status' => 'Đang chờ',
            'StatusPayment' => 'Chưa thanh toán',
            'payment_method' => $paymentMethod,
            'creator' => $admin->name, // Tên admin hoặc 'system'
        ]);

        // Cập nhật trạng thái xe
        $vehicle->update(['status' => 'Đang thuê']);

        return redirect()->route('admin.order.add')->with('success', 'Hợp đồng đã được tạo thành công.');
    }
}
