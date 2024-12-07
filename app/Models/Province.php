<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    // Nếu bảng không dùng tên mặc định (provinces), cần khai báo tên bảng
    protected $table = 'provinces';

    // Cột nào có thể được thêm/sửa đổi
    protected $fillable = [
        'ProvinceCode',  // Mã biển số xe
        'name',  // Tên tỉnh
    ];
    
    // Liên kết với các quan hệ khác nếu cần
    public function rentalContracts()
    {
        return $this->hasMany(RentalContract::class, 'ProvinceID', 'id');
    }
}
