<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $list_product = Product::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(12)
            ->get();
        $list_productsale = Product::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(12)
            ->get();
        $list_category = Category::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(16)
            ->get();
        $list_brand = Brand::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
        $list_cart=session('carts',[]);
        return view('frontend.home', compact('list_product', 'list_category','list_brand','list_productsale','list_cart'));
    }
}
