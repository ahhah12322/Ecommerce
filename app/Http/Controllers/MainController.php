<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brand;
use App\Models\Category;
use App\Models\VehicleType;
use App\Models\VehicleImage;


class MainController extends Controller
{

    public function index()
    {
        $vehicles = Vehicle::all();
        $brands = Brand::all();
        $types = VehicleType::all();
        $cates = Category::all();
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
        return view('index', compact('brands', 'vehicles', 'types', 'cates', 'vehicleImages'));
    }
}
