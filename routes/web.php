<?php
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//User
Route::get('/', [MainController::class, 'index']);
##### Đăng nhạp user ############
Route::get('/dang-nhap', function () {
    return view('auth.login');
});
##### Dăng ký user ############
Route::get('/dang-ky', function () {
    return view('auth.register');
});
##### Giới thiệu ############
Route::get('/gioi-thieu', function () {
    return view('user.main.about-us');
});
##### Liên hệ ############
Route::get('/lien-he', function () {
    return view('user.main.contact');
});
##### Chính sách ############
// Route::get('/chinh-sach', function () {
//     return view('user.about-us');
// });\
##### Chi tiết xe ############
Route::get('chi-tiet/{id}', [VehicleController::class, 'show']);

Route::get('/san-pham-1', function () {
    return view('user.main.product-details-fixed-img');
});
Route::get('/san-pham-2', function () {
    return view('user.main.product-details-gallery');
});

##### thanh toán hóa đơn user ############
Route::get('/thanh-toan', function () {
    return view('user.main.checkout');
});
##### lịch sử đặt xe ############
Route::get('/lich-su', function () {
    return view('user.main.history');
});
##### Quên mật khẩu ############
Route::get('/quen-mat-khau', function () {
    return view('user.main.forgot-password');
});
##### Cửa hàng ############
Route::get('/shop', [VehicleController::class, 'index'])->name('vehicle.shop');
Route::get('/shop/{brandName}', [VehicleController::class, 'filterByBrand'])->name('vehicles.filterByBrand');
Route::get('/shop/location/{location}', [VehicleController::class, 'filterByLocation']);

Route::get('/shop/tim-kiem', [VehicleController::class, 'search1'])->name('search1');

Route::get('/shop/sap-xep', [VehicleController::class, 'SapXep'])->name('vehicles.sort');

##### tìm kiếm ############
Route::get('/tim-xe', [VehicleController::class, 'search'])->name('vehicle.search');
##### thông tin tài khoản ############
Route::get('/tai-khoan', function () {
    return view('user.main.account');
});
##### Thay đổi thông tin cá nhân ############
Route::get('/doi-thong-tin', function () {
    return view('user.main.change');
});
##### Đổi mật khẩu ############
Route::get('/doi-mat-khau', function () {
 return view('user.main.change-password');
});
##### giỏ hàng ############
// Route thêm sản phẩm vào giỏ hàng
Route::post('/add-yeu-thich', [CartController::class, 'addToCart']);
Route::get('/yeu-thich', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/yeu-thich/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');


##### giỏ hàng ############
Route::get('/fogot', function () {
 return view('user.main.forgot-password');
});




///ADMIN
Route::get('/admin', function () {
    return view('admin.index');
});
##### Category ############
Route::get('/admin/category', function () {
    return view('admin.main.category.category-list');
});
Route::get('/admin/category/add', function () {
    return view('admin.main.category.category-add');
});
Route::get('/admin/category/edit', function () {
    return view('admin.main.category.category-edit');
});
##### Sản phẩm ############
Route::get('/admin/product', function () {
    return view('admin.main.product.product-list');
});


##### pucahra ############
Route::get('/admin/purchase', function () {
    return view('admin.main.purchase.purchase-list');
});
##### hh ############
Route::get('/admin/hh', function () {
    return view('admin.main.purchase.purchase-list');
});

