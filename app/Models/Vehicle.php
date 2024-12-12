<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
      use HasFactory;

    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'vehicles';

    // Các cột có thể được gán giá trị hàng loạt
    protected $fillable = [
        'VehicleName',
        'vehicle_type_id',
        'BrandID',
        'CategoryID',
        'year_of_manufacture',
        'color',
        'license_plate',
        'seat_number',
        'chassis_number',
        'engine_number',
        'vehicle_color',
        'description',
        'location',
        'battery_capacity',
        'max_range',
        'status',
        'rental_price_per_hour',
        'rental_price_per_day'
    ];

    // Định nghĩa quan hệ với model Brand
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'BrandID', 'BrandID');
    }

    // Định nghĩa quan hệ với model Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryID', 'CategoryID');
    }
     public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id'); // Liên kết đến bảng vehicle_types qua vehicle_type_id
    }

    // public function province()
    // {
    //     return $this->belongsTo(Province::class, 'ProvinceID');
    // }

    // $vehicle->province->ProvinceName;
}

