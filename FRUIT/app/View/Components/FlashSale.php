<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;

class FlashSale extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // Lấy danh sách sản phẩm có giá sale lớn hơn 0, status = 1 và giá > 80,000 đồng
        $args = [
            ['status', '=', 1],
            ['price', '>', 80000], // Chỉ lấy sản phẩm có giá lớn hơn 80,000 đồng
            ['pricesale', '>', 0],
        ];

        $product_list = Product::where($args)
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        // Áp dụng giảm giá 50% cho từng sản phẩm
        foreach ($product_list as $product) {
            $product->pricesale = $product->price * 0.5; // Giảm giá 50%
        }

        return view('components.flash-sale', compact('product_list'));
    }
}
