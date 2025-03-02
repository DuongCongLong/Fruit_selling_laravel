<ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
    @foreach ($list_menu as $row_menu)
    <x-main-menu-item :rowmenu="$row_menu"/>
    @endforeach
</ul>