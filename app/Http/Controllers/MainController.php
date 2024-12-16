<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brand;
use App\Models\Category;
use App\Models\VehicleType;
use App\Models\VehicleImage;
use App\Models\RentalContract;
use Illuminate\Support\Facades\DB;



class MainController extends Controller
{

    public function index()
    {
        $vehicles = Vehicle::all();
        $brands = Brand::all();
        $types = VehicleType::all();
        $cates = Category::all();


        $reviews = DB::table('vehicles')
            ->leftJoin('reviews', 'vehicles.id', '=', 'reviews.vehicle_id')
            ->leftJoin('users', 'reviews.customer_id', '=', 'users.id')
            ->where('vehicles.id')
            ->select('vehicles.*', 'reviews.*', 'users.*')
            ->select(
                'vehicles.*',
                'reviews.*',
                'users.id as user_id',
                'users.name as customer_name'  // Lấy tên khách hàng từ bảng users
            )
            ->get();

        $ordersCount =
            Vehicle::join('rental_contracts', 'vehicles.id', '=', 'rental_contracts.VehicleID')
            ->where('rental_contracts.StatusPayment', 'Đã thanh toán')
            ->select('vehicles.id', 'vehicles.VehicleName', DB::raw('COUNT(rental_contracts.ContractID) as total_orders'))
            ->groupBy('vehicles.id', 'vehicles.VehicleName')
            ->get();
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
        return view(
            'index',
            compact('brands', 'vehicles', 'cates', 'vehicleImages', 'reviews', 'ordersCount')
        );
    }
}
