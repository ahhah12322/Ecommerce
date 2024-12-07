<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentalContract;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class RentalContractController extends Controller
{
    // Hiển thị trang đặt xe
    public function createOrder($vehicleId)
    {
        $vehicle = Vehicle::findOrFail($vehicleId); // Lấy thông tin xe
        return view('order.create', compact('vehicle'));
    }

    // Lưu thông tin đơn hàng vào bảng rental_contracts
    public function storeOrder(Request $request)
    {
        $request->validate([
            'vehicle_id' => 'required|exists:vehicles,id',
            'rental_start_date' => 'required|date|after_or_equal:today',
            'rental_end_date' => 'required|date|after:rental_start_date',
            'total_cost' => 'required|numeric|min:0',
        ]);

        $user = Auth::user();

        RentalContract::create([
            'CustomerID' => $user->id,
            'VehicleID' => $request->vehicle_id,
            'RentalStartDate' => $request->rental_start_date,
            'RentalEndDate' => $request->rental_end_date,
            'TotalCost' => $request->total_cost,
            'Status' => 'Đang diễn ra',
        ]);

        return redirect()->route('order.list')->with('success', 'Đặt xe thành công!');
    }

    // Hiển thị danh sách đơn hàng
    public function orderList()
    {
        $orders = RentalContract::with(['customer', 'vehicle', 'province'])->get();
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
}
