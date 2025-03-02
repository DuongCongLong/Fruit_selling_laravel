<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Menu;

class MainCategoryItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $row_menu=null;

    public function __construct($rowmenu)
    {
    $this->row_menu=$rowmenu;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $menu=$this->row_menu;
        $args_mainmenu_sub=[
            ['status','=',1],
            ['position','=','mainmenu'],
            ['parent_id','=',$menu->id]
        ];
        $list_menu_sub=Menu::where($args_mainmenu_sub)
        ->orderBy('sort_order','asc')->get();
        return view('components.main-category-item',compact('menu','list_menu_sub'));
    }
}
