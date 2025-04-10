<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;

class Product_New extends Component
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
        $list_product=Product::where('status','=',1)
        ->orderBy('created_at','DESC')
        ->limit(5)
        ->get();
        return view('components.product-new',compact('list_product'));
    }
}
