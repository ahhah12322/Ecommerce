<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    // Nếu tên bảng trong cơ sở dữ liệu không phải dạng số nhiều, bạn có thể chỉ định tên bảng:
    protected $table = 'brands';

    // Nếu tên cột 'BrandID' không phải là 'id', bạn có thể chỉ định khóa chính:
    protected $primaryKey = 'BrandID';

    // Nếu không sử dụng timestamp (created_at, updated_at), bạn có thể tắt tính năng này:
    public $timestamps = true;

    // Nếu có các cột không thể thay đổi, bạn có thể chỉ định chúng trong $fillable hoặc $guarded
    protected $fillable = ['BrandName'];
}
