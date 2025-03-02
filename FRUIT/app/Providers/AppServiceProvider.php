<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // Thêm dòng này
use Illuminate\Support\Facades\Session; // Thêm nếu bạn dùng Session
use Illuminate\Pagination\Paginator;
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
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
        // Chia sẻ dữ liệu giỏ hàng với tất cả các view chứa header component
        View::composer('components.header', function ($view) {
            $list_cart = Session::get('carts', []);
            $view->with('list_cart', $list_cart);
        });
    }
}
