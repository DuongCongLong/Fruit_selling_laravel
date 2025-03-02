@if (count($list_menu_sub) == 0)
<li class="menu-item">
    <a href="{{$menu->link}}" class="menu-name" data-title="Trái cây tươi">
        <i class="biolife-icon icon-grape"></i>{{$menu->name}}
    </a>
</li>
@else
<li class="menu-item menu-item-has-children has-megamenu">
    <a href="{{$menu->link}}" class="menu-name" data-title="Trái cây tươi">
        <i class="biolife-icon icon-grape"></i>{{$menu->name}}
    </a>
    <div class="wrap-megamenu lg-width-900 md-width-640 background-mega-02">
        <div class="mega-content">
            <div class="row">
                <!-- Cột 1 -->
                <div class="col-lg-3 col-md-4 sm-col-12 md-margin-bottom-83 xs-margin-bottom-25">
                    <div class="wrap-custom-menu vertical-menu">
                        <h4 class="menu-title">{{$menu->name}}</h4>
                        <ul class="menu">
                            @foreach ($list_menu_sub as $row_menu_sub)
                            <li><a href="{{$row_menu_sub->link}}">{{$row_menu_sub->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Cột 2 -->
                <div class="col-lg-3 col-md-4 sm-col-12 lg-padding-left-23 xs-margin-bottom-36px md-margin-bottom-0">
                    <div class="wrap-custom-menu vertical-menu">
                        <h4 class="menu-title">{{$menu->name}}</h4>
                        <ul class="menu">
                            @foreach ($list_menu_sub as $row_menu_sub)
                            <li><a href="{{$row_menu_sub->link}}">{{$row_menu_sub->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Cột 3 -->
                <div class="col-lg-6 col-md-4 sm-col-12 lg-padding-left-25 md-padding-top-55">
                    <div class="biolife-banner layout-01">
                        <h3 class="top-title">Tươi ngon từ nông trại</h3>
                        <p class="content">Tất cả các nhà sản xuất Lorem Ipsum trên Internet đều có thể.</p>
                        <b class="bottomm-title">Dòng sản phẩm Dâu</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
@endif
