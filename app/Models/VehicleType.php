<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    use HasFactory;

    // Đảm bảo tên bảng là 'vehicle_types', nếu không Laravel sẽ tự động tìm bảng có tên số nhiều của model này (vehicle_types).
    protected $table = 'vehicle_types';

    // Các cột có thể được điền (mass assignable)
    protected $fillable = ['name'];

    // Mối quan hệ với bảng vehicles (mỗi loại xe có thể có nhiều phương tiện)
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'vehicle_type_id'); // Liên kết với bảng vehicles qua vehicle_type_id
    }
}

