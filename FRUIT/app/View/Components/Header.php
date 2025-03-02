<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    // public $product_item=null;
    public function __construct()
    {
        // $this->product_item=$productitem;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $list_cart=session('carts',[]);
        $list_product=Product::where('status','=',1)
        ->orderBy('created_at','desc')
        ->paginate(8);
        return view('components.header',compact('list_cart','list_product'));
    }
}
