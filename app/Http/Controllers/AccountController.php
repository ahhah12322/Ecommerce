<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\RentalContract;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AccountController extends Controller
{

    public function formatRevenue($amount)
{
    if ($amount >= 1_000_000_000) {
        // Tỷ: B
        return number_format($amount / 1_000_000_000, 1) . 'B';
    } elseif ($amount >= 1_000_000) {
        // Triệu: M
        return number_format($amount / 1_000_000, 1) . 'M';
    } elseif ($amount >= 1_000) {
        // Nghìn: K
        return number_format($amount / 1_000, 1) . 'K';
    } else {
        // Nếu nhỏ hơn 1000 thì giữ nguyên
        return number_format($amount);
    }
}

    public function index(Request $request)
    {
        $user = session('user');
        
        if (!$user) {
            // Nếu chưa đăng nhập, chuyển hướng tới trang login
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để truy cập trang này.');
        }
        if ($user->role == 'admin' || $user->role == 'staff') {
            $vehicles = Vehicle::all(); // Lấy tất cả dữ liệu từ bảng vehicles
            $users = User::all();       // Lấy tất cả dữ liệu từ bảng users
            $pageVisits = DB::table('page_visits')
            ->orderBy('visit_count', 'desc') // Sắp xếp theo lượt truy cập giảm dần
            ->take(8) // Lấy 8 bản ghi đầu tiên
            ->get(); // Lấy dữ liệu

            // Tính Booked Revenue: Tổng tất cả tổng chi phí của các hợp đồng thuê
            $bookedRevenue = RentalContract::sum('TotalCost');
            // Định dạng Booked Revenue
            $formattedRevenue = $this->formatRevenue($bookedRevenue);
            // Tính New Leads: Số lượng người dùng mới tạo trong tháng này
            $newLeads = User::whereMonth('created_at', Carbon::now()->month)
            ->whereYear('created_at', Carbon::now()->year)
            ->count();
            // Tính Total Orders: Số lượng hợp đồng thuê
            $totalOrders = RentalContract::count();

            $orders = DB::table('rental_contracts')
            ->join('vehicles', 'rental_contracts.VehicleID', '=', 'vehicles.id')
            ->join('users', 'rental_contracts.CustomerID', '=', 'users.id')
            ->select(
                'rental_contracts.ContractID as order_id',
                'rental_contracts.created_at as date',
                'vehicles.VehicleName as product',
                'users.name as customer_name',
                'users.email as email_id',
                'users.phone as phone_no',
                'vehicles.location as address',
                'rental_contracts.payment_method as payment_type',
                'rental_contracts.status as status'
            )
            ->orderBy('rental_contracts.created_at', 'desc') // Sắp xếp giảm dần theo ngày tạo
            ->paginate(5); // Hiển thị 5 bản ghi mỗi trang

            return view('admin.index' , compact('vehicles', 'users', 'pageVisits', 'newLeads', 'totalOrders', 'formattedRevenue','orders')); 
        }

        else if ($user->role == 'user') {   
            return view('user.main.account');

        }
    }
}
