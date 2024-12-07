<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function province()
    {
        return $this->belongsTo(Province::class, 'ProvinceID');
    }
}

