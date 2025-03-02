<?php

use Illuminate\Support\Facades\Route;
// Frontend
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as SanPhamController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\frontend\SignUpController;
use App\Http\Controllers\frontend\SearchController;
use App\Http\Controllers\frontend\LienHeController;
use App\Http\Controllers\frontend\OopsController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\CategoryListController;
use App\Http\Controllers\SearchsController;
use App\Http\Controllers\PaymentController;

//Backend
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\MenuController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\ProductController ;
use App\Http\Controllers\AuthController;


Route::prefix('/')->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('frontend.home');
    Route::get('/tat-ca-san-pham', [SanPhamController::class, 'index'])->name('site.product');//tat ca san pham
    Route::get('/danh-muc/{slug}', [SanPhamController::class, 'category'])->name('site.product.category');//loai san pham
    Route::get('/chi-tiet-san-pham/{slug}',[SanphamController::class,'product_detail'])->name('site.product.detail');//Chi tiết sản phẩm
    Route::get('/dang-ky', [SignUpController::class, 'signup'])->name('signup');
    Route::get('/lien-he', [LienHeController::class, 'contact'])->name('contact');
    Route::post('/save-contact',[LienHeController::class,'save'])->name('saveContact');
    Route::get('/loi-404', [OopsController::class, 'oops'])->name('oops');
    Route::get('/bai-viet', [BlogController::class, 'blogs'])->name('blogs');
    Route::get('/chi-tiet-bai-viet/{slug}', [BlogController::class, 'detail'])->name('site.post.detail');
    Route::get('/filter', [SanPhamController::class, 'filter'])->name('filter');
    Route::get('/filters', [SanPhamController::class, 'filters'])->name('filters');
});


//Giỏ hàng
Route::get('gio-hang', [CartController::class, 'index'])->name('cart.index');
Route::get('gio-hang/addcart', [CartController::class, 'addcart'])->name('site.cart.addcart');
Route::post('gio-hang/update', [CartController::class, 'update'])->name('site.cart.update');
Route::get('gio-hang/delete/{id}', [CartController::class, 'delete'])->name('site.cart.delete');
Route::get('thanh-toan',[CartController::class,'checkout'])->name('site.cart.checkout');
Route::post('thong-bao',[CartController::class,'docheckout'])->name('site.cart.docheckout');
Route::get('thong-bao',[CartController::class,'docheckout'])->name('site.cart.docheckout');

//Đăng nhập
Route::get('dang-nhap',[AuthController::class,'getlogin'])->name('website.getlogin');
Route::post('dang-nhap',[AuthController::class,'dologin'])->name('website.dologin');
Route::get('dang-xuat',[AuthController::class,'logout'])->name('website.logout');


//Đăng ký
Route::get('register',[AuthController::class,'addUser'])->name('addUser');
Route::post('save-user',[AuthController::class,'save'])->name('saveUser');


//Search
Route::get('/search', [SearchsController::class,'search'])->name('search');

//Bài viết
Route::get('tat-ca-bai-viet', [BaiVietController::class, 'index'])->name('site.post.index');
Route::get('chu-de-bai-viet/{slug}', [BaiVietController::class, 'topic'])->name('site.post.topic');
// Route::get('chi-tiet-bai-viet/{slug}', [BaiVietController::class, 'detail'])->name('site.post.detail');

//Cổng thanh toán
Route::post('/vnpay_payment',[CartController::class,'vnpay_payment']);

//Route admin---Kiểm tra đăng nhập bằng middleware
Route::prefix('admin')->middleware("middleauth")->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('admin.dashboard');//Bảng điểu khiển--home admin
    //1.Banner
    Route::prefix('banner')->group(function(){
        Route::get('/',[BannerController::class,'index'])->name('admin.banner.index');
        Route::get('trash',[BannerController::class,'trash'])->name('admin.banner.trash');
        Route::get('show/{id}',[BannerController::class,'show'])->name('admin.banner.show');
        Route::post('store',[BannerController::class,'store'])->name('admin.banner.store');
        Route::get('edit/{id}',[BannerController::class,'edit'])->name('admin.banner.edit');
        Route::put('update/{id}',[BannerController::class,'update'])->name('admin.banner.update');
        Route::get('delete/{id}',[BannerController::class,'delete'])->name('admin.banner.delete');
        Route::get('restore/{id}',[BannerController::class,'restore'])->name('admin.banner.restore');
        Route::get('status/{id}',[BannerController::class,'status'])->name('admin.banner.status');
        Route::delete('destroy/{id}',[BannerController::class,'destroy'])->name('admin.banner.destroy');
    });

    //2.Brand
    Route::prefix('brand')->group(function(){
        Route::get('/',[BrandController::class,'index'])->name('admin.brand.index');
        Route::get('trash',[BrandController::class,'trash'])->name('admin.brand.trash');
        Route::get('show/{id}',[BrandController::class,'show'])->name('admin.brand.show');
        Route::get('create',[BrandController::class,'create'])->name('admin.brand.create');
        Route::post('store',[BrandController::class,'store'])->name('admin.brand.store');
        Route::get('edit/{id}',[BrandController::class,'edit'])->name('admin.brand.edit');
        Route::put('update/{id}',[BrandController::class,'update'])->name('admin.brand.update');
        Route::get('delete/{id}',[BrandController::class,'delete'])->name('admin.brand.delete');
        Route::get('restore/{id}',[BrandController::class,'restore'])->name('admin.brand.restore');
        Route::get('status/{id}',[BrandController::class,'status'])->name('admin.brand.status');
        Route::delete('destroy/{id}',[BrandController::class,'destroy'])->name('admin.brand.destroy');
    });

    //3.Category
    Route::prefix('category')->group(function(){
        Route::get('/',[CategoryController::class,'index'])->name('admin.category.index');
        Route::get('trash',[CategoryController::class,'trash'])->name('admin.category.trash');
        Route::get('show/{id}',[CategoryController::class,'show'])->name('admin.category.show');
        Route::get('create',[CategoryController::class,'create'])->name('admin.category.create');
        Route::post('store',[CategoryController::class,'store'])->name('admin.category.store');
        Route::get('edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
        Route::put('update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
        Route::get('delete/{id}',[CategoryController::class,'delete'])->name('admin.category.delete');
        Route::get('restore/{id}',[CategoryController::class,'restore'])->name('admin.category.restore');
        Route::get('status/{id}',[CategoryController::class,'status'])->name('admin.category.status');
        Route::delete('destroy/{id}',[CategoryController::class,'destroy'])->name('admin.category.destroy');
    });
    
    //4.Contact
    Route::prefix('contact')->group(function(){
        Route::get('/',[ContactController::class,'index'])->name('admin.contact.index');
        Route::get('trash',[ContactController::class,'trash'])->name('admin.contact.trash');
        Route::get('show/{id}',[ContactController::class,'show'])->name('admin.contact.show');
        Route::get('reply/{id}',[ContactController::class,'reply'])->name('admin.contact.reply');
        Route::put('doreply/{id}',[ContactController::class,'doreply'])->name('admin.contact.doreply');
        Route::get('edit/{id}',[ContactController::class,'edit'])->name('admin.contact.edit');
        Route::get('delete/{id}',[ContactController::class,'delete'])->name('admin.contact.delete');
        Route::get('restore/{id}',[ContactController::class,'restore'])->name('admin.contact.restore');
        Route::get('status/{id}',[ContactController::class,'status'])->name('admin.contact.status');
        Route::delete('destroy/{id}',[ContactController::class,'destroy'])->name('admin.contact.destroy');
    });

    //5.Menu    
        Route::prefix('menu')->group(function(){
            Route::get('/',[MenuController::class,'index'])->name('admin.menu.index');
            Route::get('trash',[MenuController::class,'trash'])->name('admin.menu.trash');
            Route::get('show/{id}',[MenuController::class,'show'])->name('admin.menu.show');
            Route::post('store',[MenuController::class,'store'])->name('admin.menu.store');
            Route::get('edit/{id}',[MenuController::class,'edit'])->name('admin.menu.edit');
            Route::put('update/{id}',[MenuController::class,'update'])->name('admin.menu.update');
            Route::get('delete/{id}',[MenuController::class,'delete'])->name('admin.menu.delete');
            Route::get('restore/{id}',[MenuController::class,'restore'])->name('admin.menu.restore');
            Route::get('status/{id}',[MenuController::class,'status'])->name('admin.menu.status');
            Route::delete('destroy/{id}',[MenuController::class,'destroy'])->name('admin.menu.destroy');
    });

    //6.Order
    Route::prefix('order')->group(function(){
        Route::get('/',[OrderController::class,'index'])->name('admin.order.index');
        Route::get('trash',[OrderController::class,'trash'])->name('admin.order.trash');
        Route::get('show/{id}',[OrderController::class,'show'])->name('admin.order.show');
        Route::get('delete/{id}',[OrderController::class,'delete'])->name('admin.order.delete');
        Route::get('restore/{id}',[OrderController::class,'restore'])->name('admin.order.restore');
        Route::get('status/{id}',[OrderController::class,'status'])->name('admin.order.status');
        Route::delete('destroy/{id}',[OrderController::class,'destroy'])->name('admin.order.destroy');
    });

    //7.Post
    Route::prefix('post')->group(function(){
        Route::get('/',[PostController::class,'index'])->name('admin.post.index');
        Route::get('trash',[PostController::class,'trash'])->name('admin.post.trash');
        Route::get('show/{id}',[PostController::class,'show'])->name('admin.post.show');
        Route::get('create',[PostController::class,'create'])->name('admin.post.create');
        Route::post('store',[PostController::class,'store'])->name('admin.post.store');
        Route::get('edit/{id}',[PostController::class,'edit'])->name('admin.post.edit');
        Route::put('update/{id}',[PostController::class,'update'])->name('admin.post.update');
        Route::get('delete/{id}',[PostController::class,'delete'])->name('admin.post.delete');
        Route::get('restore/{id}',[PostController::class,'restore'])->name('admin.post.restore');
        Route::get('status/{id}',[PostController::class,'status'])->name('admin.post.status');
        Route::delete('destroy/{id}',[PostController::class,'destroy'])->name('admin.post.destroy');
    });

    //8.Product
    Route::prefix('product')->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('admin.product.index');
        Route::get('trash',[ProductController::class,'trash'])->name('admin.product.trash');
        Route::get('show/{id}',[ProductController::class,'show'])->name('admin.product.show');
        Route::get('create',[ProductController::class,'create'])->name('admin.product.create');
        Route::post('store',[ProductController::class,'store'])->name('admin.product.store');
        Route::get('edit/{id}',[ProductController::class,'edit'])->name('admin.product.edit');
        Route::put('update/{id}',[ProductController::class,'update'])->name('admin.product.update');
        Route::get('delete/{id}',[ProductController::class,'delete'])->name('admin.product.delete');
        Route::get('restore/{id}',[ProductController::class,'restore'])->name('admin.product.restore');
        Route::get('status/{id}',[ProductController::class,'status'])->name('admin.product.status');
        Route::delete('destroy/{id}',[ProductController::class,'destroy'])->name('admin.product.destroy');
    });

    //9.Topic
    Route::prefix('topic')->group(function(){
        Route::get('/',[TopicController::class,'index'])->name('admin.topic.index');
        Route::get('trash',[TopicController::class,'trash'])->name('admin.topic.trash');
        Route::get('show/{id}',[TopicController::class,'show'])->name('admin.topic.show');
        Route::get('create',[TopicController::class,'create'])->name('admin.topic.create');
        Route::post('store',[TopicController::class,'store'])->name('admin.topic.store');
        Route::get('edit/{id}',[TopicController::class,'edit'])->name('admin.topic.edit');
        Route::put('update/{id}',[TopicController::class,'update'])->name('admin.topic.update');
        Route::get('delete/{id}',[TopicController::class,'delete'])->name('admin.topic.delete');
        Route::get('restore/{id}',[TopicController::class,'restore'])->name('admin.topic.restore');
        Route::get('status/{id}',[TopicController::class,'status'])->name('admin.topic.status');
        Route::delete('destroy/{id}',[TopicController::class,'destroy'])->name('admin.topic.destroy');
    });

    //10.User
    Route::prefix('user')->group(function(){
        Route::get('/',[UserController::class,'index'])->name('admin.user.index');
        Route::get('trash',[UserController::class,'trash'])->name('admin.user.trash');
        Route::get('show/{id}',[UserController::class,'show'])->name('admin.user.show');
        Route::get('create',[UserController::class,'create'])->name('admin.user.create');
        Route::post('store',[UserController::class,'store'])->name('admin.user.store');
        Route::get('edit/{id}',[UserController::class,'edit'])->name('admin.user.edit');
        Route::put('update/{id}',[UserController::class,'update'])->name('admin.user.update');
        Route::get('delete/{id}',[UserController::class,'delete'])->name('admin.user.delete');
        Route::get('restore/{id}',[UserController::class,'restore'])->name('admin.user.restore');
        Route::get('status/{id}',[UserController::class,'status'])->name('admin.user.status');
        Route::delete('destroy/{id}',[UserController::class,'destroy'])->name('admin.user.destroy');
    });
});