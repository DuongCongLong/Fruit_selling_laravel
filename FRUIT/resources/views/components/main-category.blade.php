<li class="menu-item menu-item-has-children has-megamenu">
    @foreach ($list_menu as $row_menu)
    <x-main-category-item :rowmenu="$row_menu"/>
    @endforeach
</li> 