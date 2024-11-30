<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleImage extends Model
{
    use HasFactory;

    // Định nghĩa tên bảng nếu khác với tên model
    protected $table = 'vehicle_images';

    // Các cột có thể được gán giá trị hàng loạt (mass assignable)
    protected $fillable = [
        'VehicleID',
        'ImageURL',
        'IsMainImage',
    ];

    // Quan hệ với bảng 'vehicles' (bảng xe)
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'VehicleID');
    }
}
