<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class RentalContract extends Model
{
    use HasFactory;

    protected $fillable = [
        'ContractID',
        'CustomerID', 
        'VehicleID', 
        'ProvinceID',
        'RentalStartDate', 
        'RentalEndDate', 
        'TotalCost', 
        'Status',
        'StatusPayment',
        'payment_method',
        'DateCreated',
    ];

    // Quan hệ với khách hàng
    public function customer()
    {
        return $this->belongsTo(User::class, 'CustomerID');
    }

    // Quan hệ với xe
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'VehicleID');
    }



    protected $table = 'rental_contracts';
    // Sử dụng sự kiện tạo
    protected static function booted()
    {
        static::creating(function ($contract) {
            $now = Carbon::now();
            $rentalStartDate = $now->setTime(9, 0);

            // Kiểm tra nếu hiện tại đã qua 9:00 AM thì chọn ngày hôm sau
            if ($now->gt($rentalStartDate)) {
                $rentalStartDate->addDay();
            }

            // Thiết lập giá trị mặc định
            $contract->RentalStartDate = $contract->RentalStartDate ?? $rentalStartDate;
            $contract->RentalEndDate = $contract->RentalEndDate ?? $rentalStartDate->copy()->addDay();
        });
    }
    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class, 'VehicleID');
    }
}

