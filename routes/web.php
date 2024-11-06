<?php

use Illuminate\Support\Facades\Route;

//User
Route::get('/', function () {
    return view('index');
});
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
Route::get('/san-pham', function () {
    return view('user.main.product-details');
});
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
Route::get('/shop', function () {
    return view('user.main.shop');
});
##### tìm kiếm ############
Route::get('/tim-kiem', function () {
    return view('user.main.search');
});
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
Route::get('/gio-hang', function () {
 return view('user.main.cart');
});
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

