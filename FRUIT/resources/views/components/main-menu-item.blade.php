@if (count($list_menu_sub) == 0)
<li class="menu-item"><a href="{{$menu->link}}">{{$menu->name}}</a></li>
@else
    <li class="menu-item menu-item-has-children has-megamenu">
        <a href="{{$menu->link}}" class="menu-name" data-title="Shop" >{{$menu->name}}</a>
        <div class="wrap-megamenu lg-width-900 md-width-750">
            <div class="mega-content">
                <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                    <div class="wrap-custom-menu vertical-menu">
                        <h4 class="menu-title" href="{{$menu->link}}">{{$menu->name}}</h4>
                        <ul class="menu">
                            @foreach ($list_menu_sub as $row_menu_sub)
                            <li><a href="{{$row_menu_sub->link}}">{{$row_menu_sub->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                    <div class="wrap-custom-menu vertical-menu">
                        <h4 class="menu-title" href="{{$menu->link}}">{{$menu->name}}</h4>
                        <ul class="menu">
                            @foreach ($list_menu_sub as $row_menu_sub)
                            <li><a href="{{$row_menu_sub->link}}">{{$row_menu_sub->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                    <div class="wrap-custom-menu vertical-menu">
                        <h4 class="menu-title" href="{{$menu->link}}">{{$menu->name}}</h4>
                        <ul class="menu">
                            @foreach ($list_menu_sub as $row_menu_sub)
                            <li><a href="{{$row_menu_sub->link}}">{{$row_menu_sub->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                    <div class="wrap-custom-menu vertical-menu">
                        <h4 class="menu-title" href="{{$menu->link}}">{{$menu->name}}</h4>
                        <ul class="menu">
                            @foreach ($list_menu_sub as $row_menu_sub)
                            <li><a href="{{$row_menu_sub->link}}">{{$row_menu_sub->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>                                
        </div>
    </li>
@endif