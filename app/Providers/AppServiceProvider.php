<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
   public function boot()
    {
        // Chia sẻ dữ liệu số lượng sản phẩm giỏ hàng cho mọi view
        View::composer('*', function ($view) {
            $cart = json_decode(Cookie::get('cart'), true) ?? [];
            $cartCount = count($cart);
            $view->with('cartCount', $cartCount);
        });


    //         // Chia sẻ thông tin người dùng cho mọi view
    // View::composer('*', function ($view) {
    //     $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
    //     $view->with('user', $user);
    // });
    }
}