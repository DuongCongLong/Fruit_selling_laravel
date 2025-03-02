<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Menu;

class MainCategory extends Component
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
        $args_mainmenu=[
            ['status','=',1],
            ['position','=','mainmenu'],
            ['parent_id','=',0]
        ];
        $list_menu=Menu::where($args_mainmenu)
        ->orderBy('sort_order','asc')->get();
        return view('components.main-category',compact('list_menu'));
    }
}
