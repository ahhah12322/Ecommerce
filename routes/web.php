<?php

use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RentalContractController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckUserSession;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\VehicleViewController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\MailKM;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


//User
// Route::get('/', [MainController::class, 'index'])->name('index');
// ##### Đăng nhạp user ############
// Route::get('/dang-nhap', function () {
//     return view('auth.login');
// });
// ##### Dăng ký user ############
// Route::get('/dang-ky', function () {
//     return view('auth.register');
// });
// gửi mail
Route::post('/subscribe', function (Request $request) {
    $validated = $request->validate([
        'EMAIL' => 'required|email',
    ]);

    Mail::to($validated['EMAIL'])->send(new MailKM($validated['EMAIL']));

    return back()->with('success', 'Cảm ơn bạn đã đăng ký!');
});
// đánh giá
Route::post('/reviews', [ReviewController::class, 'store'])->middleware('auth')->name('reviews.store');

// tính view
Route::get('/api/statistics', [VehicleController::class, 'getStatistics'])->name('statistics');
// chat
Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
Route::post('/chat/send', [ChatController::class, 'send'])->name('chat.send');
Route::get('/chat/messages', [ChatController::class, 'messages'])->name('chat.messages');
Route::get('/chat/users', [ChatController::class, 'users'])->name('chat.users');

Route::get('/email/verify', function () {
    return view('mail.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return response()->json(['message' => 'Verification link sent!'], 200);
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');



// Những trang không cần đăng nhập vẫn xem được thông tin
Route::withoutMiddleware([CheckUserSession::class])->group(function () {

    Route::get('/', [MainController::class, 'index'])->name('index');


    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});




Route::middleware(['checkSession', 'role:user'])->group(function () {

    // Contract
    Route::get('/gioi-thieu', function () {
        return view('user.main.about-us');
    })->name('about-us');

    ##### Liên hệ ############
    Route::get('/lien-he', function () {
        return view('user.main.contact');
    })->name('contact');







    ##### thanh toán hóa đơn user ############
    // Route::get('/thanh-toan', function () {
    //     return view('user.main.checkout');
    // })->name('checkout');
    Route::get('/checkout', [RentalContractController::class, 'showCheckout'])->name('checkout');

    Route::post('/complete-rental', [RentalContractController::class, 'completeRental'])->name('completeRental');
    // Quản lý đơn hàng









    ##### lịch sử đặt xe ############
    Route::get('/lich-su', function () {
        return view('user.main.history');
    })->name('history');

    ##### Quên mật khẩu ############
    Route::get('/quen-mat-khau', function () {
        return view('user.main.forgot-password');
    })->name('forgot-password');

    Route::get('/tai-khoan', [AccountController::class, 'index'])->name('account');
    ##### Thay đổi thông tin cá nhân ############
    Route::get('/doi-thong-tin', function () {
        return view('user.main.change');
    })->name('change_infor');
    Route::post('/doi-thong-tin', [UserController::class, 'update'])->name('user.update');

    ##### Đổi mật khẩu ############
    // Route::get('/doi-mat-khau', function () {
    //  return view('user.main.change-password');
    // })->name('change-password');

    Route::get('/doi-mat-khau', [UserController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('/doi-mat-khau', [UserController::class, 'changePassword'])->name('password.update');

    Route::post('/user/update-avatar', [UserController::class, 'updateAvatar'])->name('user.update.avatar');




    ##### giỏ hàng ############
    // Route thêm sản phẩm vào giỏ hàng
    Route::post('/add-yeu-thich', [CartController::class, 'addToCart']);
    Route::get('/yeu-thich', [CartController::class, 'showCart'])->name('cart.show');
    Route::post('/yeu-thich/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');



});









Route::get('chi-tiet/{id}', [VehicleController::class, 'show']);

Route::get('/san-pham-1', function () {
    return view('user.main.product-details-fixed-img');
})->name('product-details-fixed-img');

Route::get('/san-pham-2', function () {
    return view('user.main.product-details-gallery');
})->name('product-details-gallery');


##### lịch sử đặt xe ############
// Route::get('/lich-su', function () {
//     return view('user.main.history');
// })->name('history');

// Route::get('/lich-su', [AuthController::class, 'showHistory'] )->name('history');


##### Cửa hàng ############
Route::get('/shop', [VehicleController::class, 'index'])->name('vehicle.shop');
Route::get('/shop/{brandName}', [VehicleController::class, 'filterByBrand'])->name('vehicles.filterByBrand');
Route::get('/shop/location/{location}', [VehicleController::class, 'filterByLocation']);

Route::get('/shop/tim-kiem', [VehicleController::class, 'search1'])->name('search1');

Route::get('/shop/sap-xep', [VehicleController::class, 'SapXep'])->name('vehicles.sort');

##### tìm kiếm ############
Route::get('/tim-xe', [VehicleController::class, 'search'])->name('vehicle.search');
##### thông tin tài khoản ############




Route::middleware(['checkSession', 'role:admin'])->group(function () {

        ///ADMIN
    Route::get('/admin', [AccountController::class, 'index'])->name('admin');

    // admin 
    //order
    Route::get('/admin/order-cart', [RentalContractController::class, 'order_cart'])->name('order.cart');
    Route::get('/admin/order-checkout', [RentalContractController::class, 'order_checkout'])->name('order.checkout');
    Route::get('/admin/order-detail/{id}', [RentalContractController::class, 'order_detail'])->name('order.detail');
    Route::get('/admin/orders-list', [RentalContractController::class, 'orderList'])->name('orders.list');
    Route::get('/admin/order-add', [AdminOrderController::class, 'showOrderForm'])->name('admin.order.add');
    Route::post('/admin/order-add', [AdminOrderController::class, 'storeOrder'])->name('admin.order.store');

    Route::get('/customer-list', [UserController::class, 'list'])->name('customer.list');
    Route::get('/customer-detail/{id}', [UserController::class, 'detail'])->name('customer.detail');


        ///ADMIN
        ##### Category ############
        Route::get('/admin/category', [CategoryController::class, 'index'])->name('category-list');
        Route::get('/admin/category/add', function () {
            return view('admin.main.category.category-add');
        })->name('category-add-form');
        Route::post('/admin/category/add', [CategoryController::class, 'store'])->name('category-add');
        Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('category-edit');
        Route::post('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('category-update');
        Route::post('/admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category-delete');
        ##### Brand ############
        Route::get('/admin/brand', [BrandController::class, 'index'])->name('brand-list');
        Route::get('/admin/brand/add', function () {
            return view('admin.main.brand.brand-add');
        })->name('brand-add-form');
        Route::post('/admin/brand/add', [BrandController::class, 'store'])->name('brand-add');
        Route::get('/admin/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand-edit');
        Route::post('/admin/brand/update/{id}', [BrandController::class, 'update'])->name('brand-update');
        Route::post('/admin/brand/delete/{id}', [BrandController::class, 'destroy'])->name('brand-delete');
        ##### Sản phẩm ############
        Route::get('/admin/product', [VehicleController::class, 'index3'])->name('vehical-list');
        Route::get('/admin/product-grid', [VehicleController::class, 'vehicalgrid'])->name('vehical-grid');
        Route::post('/get-vehicles', [VehicleController::class, 'getVehicles']);

        Route::get('/admin/product/add', [VehicleController::class, 'index2'])->name('vehical-add1');
        Route::post('/admin/product/add', [VehicleController::class, 'store'])->name('vehical-add');
        Route::get('/admin/product/edit/{id}', [VehicleController::class, 'edit'])->name('vehicle.edit');
        Route::post('/admin/product/update/{id}', [VehicleController::class, 'update'])->name('vehicle.update'); // Xử lý cập nhật
        Route::post('/admin/product/delete/{id}', [VehicleController::class, 'destroy'])->name('vehicle.delete'); // Xử lý cập nhật
        Route::get('/vehicles/filter', [VehicleController::class, 'filter'])->name('vehicles.filter');
        Route::delete('/remove-image/{ImageID}', [VehicleController::class, 'removeImage'])->name('remove.image');




        ##### pucahra ############
        Route::get('/admin/purchase', function () {
            return view('admin.main.purchase.purchase-list');
        })->name('purchase-list');
        ##### hh ############
        Route::get('/admin/hh', function () {
            return view('admin.main.purchase.purchase-list');
        });
    }




);


Route::get('/error', function () {
    return view('errors.forbidden');
})->name('forbidden');



