<header id="header" class="header-area style-01 layout-03">
    <div class="header-top bg-main hidden-xs">
        <div class="container">
            <div class="top-bar left">
                <ul class="horizontal-menu">
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Organic@company.com</a></li>
                    <li><a href="#">Miễn phí vận chuyển đơn hàng 99k</a></li>
                </ul>
            </div>
            <div class="top-bar right">
                <ul class="social-list">
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
                <ul class="horizontal-menu">
                    @if (Auth::check())
    @php
        $user = Auth::user();
    @endphp
    <li><a href="#" class="login-link"><i class="biolife-icon icon-login"></i>{{ $user->name }}</a></li>
    <li><a href="{{ route('website.logout') }}" class="login-link"><i class="biolife-icon icon-login"></i>Đăng xuất</a></li>
@else
    <li><a href="{{ route('website.getlogin') }}" class="login-link"><i class="biolife-icon icon-login"></i>Đăng nhập</a></li>
    <li><a href="{{ route('addUser') }}" class="login-link"><i class="biolife-icon icon-login"></i>Đăng ký</a></li>
@endif
                </ul>
            </div>
        </div>
    </div>
    <div class="header-middle biolife-sticky-object ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                    <a href="{{route('frontend.home')}}" class="biolife-logo"><img src="{{asset('assets/images/organic-3.png')}}" alt="biolife logo" width="135" height="34"></a>
                </div>
                <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                    <div class="primary-menu">
                    <x-main-menu/>
                </div>
                </div>
                <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                    <div class="biolife-cart-info">
                        <div class="mobile-search">
                            <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                            <div class="mobile-search-content">
                                <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                    <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
                                    <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                                    <select name="category">
                                        <option value="-1" selected>Tất cả danh mục</option>
                                        <option value="vegetables">Rau củ</option>
                                        <option value="fresh_berries">Quả mọng tươi</option>
                                        <option value="ocean_foods">Hải sản</option>
                                        <option value="butter_eggs">Bơ & Trứng</option>
                                        <option value="fastfood">Đồ ăn nhanh</option>
                                        <option value="fresh_meat">Thịt tươi</option>
                                        <option value="fresh_onion">Hành tươi</option>
                                        <option value="papaya_crisps">Đu đủ & Snack</option>
                                        <option value="oatmeal">Yến mạch</option>
                                    </select>                                    
                                    <button type="submit" class="btn-submit">go</button>
                                </form>
                            </div>
                        </div>
                        <div class="wishlist-block hidden-sm hidden-xs">
                            <a href="#" class="link-to">
                                {{-- <span class="icon-qty-combine">
                                    <i class="icon-heart-bold biolife-icon"></i>
                                    <span class="qty">4</span>
                                </span> --}}
                            </a>
                        </div>
                        <div class="minicart-block">
                            <div class="minicart-contain">
                                @php
                                $carts = session('carts', []);
                                $count = count($carts);
                                $totalMoney = 0;  // Khởi tạo biến $totalMoney
                        
                                // Vòng lặp tính tổng tiền
                                foreach($list_cart as $row_cart) {
                                    $totalMoney += ($row_cart['price'] - $row_cart['pricesale']) * $row_cart['qty'];
                                }
                                @endphp
                                <a href="{{ route('cart.index') }}" class="link-to">
                                    <span class="icon-qty-combine">
                                        <i class="icon-cart-mini biolife-icon"></i>
                                        <span class="qty">{{ $count }}</span>
                                    </span>
                                    <span class="title">Giỏ hàng </span>
                                    <span class="sub-total">{{ number_format($totalMoney) }} VNĐ</span>
                                </a>
                                <div class="cart-content">
                                    <div class="cart-inner">
                                        <ul class="products">
                                            <form action="{{route('site.cart.update')}}" method="post">
                                                <li>
                                                    @php
                                                    $totalMoney = 0;
                                                    $totalProduct = 0;
                                                    @endphp
                                                    @foreach($list_cart as $row_cart)
                                                        <div class="minicart-item">
                                                            <div class="thumb">
                                                                <a href="#"><img src="{{ asset('images/products/' . $row_cart['image']) }}" alt="{{ $row_cart['image'] }}" width="90" height="90" ></a>
                                                            </div>
                                                            <div class="left-info">
                                                                <div class="product-title"><a href="#" class="product-name">{{$row_cart['name']}}</a></div>
                                                                <div class="price">
                                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>{{ number_format($row_cart['price']) }}</span></ins>
                                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>{{ number_format($row_cart['pricesale']) }}</span></del>
                                                                </div>
                                                                <div class="qty">
                                                                    <label for="cart[id127][qty]">Số lượng:</label>
                                                                    <input type="number" class="input-qty" value="{{$row_cart['qty']}}" name="qty[{{$row_cart['id']}}]" id="cart[id127][qty]" value="1" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="action">
                                                                {{-- <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                                <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a> --}}
                                                            </div>
                                                        </div>
                                                        @php
                                                        $totalMoney += ($row_cart['price'] - $row_cart['pricesale']) * $row_cart['qty'];
                                                        $totalProduct += $row_cart['qty'];
                                                        @endphp
                                                    @endforeach
                                                </li>
                                            </form>
                                        </ul>
                                        <p class="btn-control">
                                            <a href="{{route('cart.index')}}" class="btn view-cart">Xem giỏ hàng</a>
                                            <a href="{{route('site.cart.checkout')}}" class="btn">Thanh toán</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mobile-menu-toggle">
                            <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="vertical-menu vertical-category-block">
                        <div class="block-title">
                            <span class="menu-icon">
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </span>
                            <span class="menu-title">Biolife</span>
                            <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                        </div>
                        <div class="wrap-menu">
                            <ul class="menu clone-main-menu">
                                    <a href="#" class="menu-name" data-title="Fruit & Nut Gifts"><i class="biolife-icon icon-fruits"></i>Quà Tặng Trái Cây & Hạt</a>
                                    <div class="wrap-megamenu lg-width-900 md-width-640">
                                        <div class="mega-content">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                    <div class="wrap-custom-menu vertical-menu">
                                                        <h4 class="menu-title">Fresh Fuits</h4>
                                                        <ul class="menu">
                                                            <li><a href="#">Quà tặng trái cây và hạt</a></li>
                                                            <li><a href="#">Trái cây hỗn hợp</a></li>
                                                            <li><a href="#">Cam</a></li>
                                                            <li><a href="#">Chuối và Chuối Plantain</a></li>
                                                            <li><a href="#">Táo Gala tươi</a></li>
                                                            <li><a href="#">Dâu</a></li>
                                                            <li><a href="#">Lê</a></li>
                                                            <li><a href="#">Sản phẩm tươi</a></li>
                                                            <li><a href="#">Thức ăn nhẹ</a></li>
                                                        </ul>                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-12 lg-padding-left-23 xs-margin-bottom-25 md-margin-bottom-0">
                                                    <div class="wrap-custom-menu vertical-menu">
                                                        <h4 class="menu-title">Quà tặng hạt</h4>
                                                        <ul class="menu">
                                                            <li><a href="#">Kem cà phê không sữa</a></li>
                                                            <li><a href="#">Kem cà phê</a></li>
                                                            <li><a href="#">Mayonnaise</a></li>
                                                            <li><a href="#">Sữa hạnh nhân</a></li>
                                                            <li><a href="#">Ghee</a></li>
                                                            <li><a href="#">Đồ uống</a></li>
                                                            <li><a href="#">Nước sốt salad Ranch</a></li>
                                                            <li><a href="#">Sữa hạt gai</a></li>
                                                            <li><a href="#">Hạt và hạt giống</a></li>
                                                        </ul>                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-4 col-sm-12 lg-padding-left-50 xs-margin-bottom-25 md-margin-bottom-0">
                                                    <div class="biolife-products-block max-width-270">
                                                        <h4 class="menu-title">Sản phẩm bán chạy nhất</h4>
                                                        <ul class="products-list default-product-style biolife-carousel nav-none-after-1k2 nav-center" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1, "responsive":[{"breakpoint":767, "settings":{ "arrows": false}}]}' >
                                                            <li class="product-item">
                                                                <div class="contain-product none-overlay">
                                                                    <div class="product-thumb">
                                                                        <a href="#" class="link-to-product">
                                                                            <img src="assets/images/products/p-08.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                        </a>
                                                                    </div>
                                                                    <div class="info">
                                                                        <b class="categories">Trái cây tươi</b>
                                                                        <h4 class="product-title"><a href="#" class="pr-name">Trái cây tươi quốc gia</a></h4>
                                                                        <div class="price">
                                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="product-item">
                                                                <div class="contain-product none-overlay">
                                                                    <div class="product-thumb">
                                                                        <a href="#" class="link-to-product">
                                                                            <img src="assets/images/products/p-11.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                        </a>
                                                                    </div>
                                                                    <div class="info">
                                                                        <b class="categories">Trái cây tươi</b>
                                                                        <h4 class="product-title"><a href="#" class="pr-name">Trái cây tươi quốc gia</a></h4>
                                                                        <div class="price">
                                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="product-item">
                                                                <div class="contain-product none-overlay">
                                                                    <div class="product-thumb">
                                                                        <a href="#" class="link-to-product">
                                                                            <img src="assets/images/products/p-15.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                        </a>
                                                                    </div>
                                                                    <div class="info">
                                                                        <b class="categories">Trái cây tươi</b>
                                                                        <h4 class="product-title"><a href="#" class="pr-name">Trái cây tươi quốc gia</a></h4>
                                                                        <div class="price">
                                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 md-margin-top-9">
                                                    <div class="biolife-brand" >
                                                        <ul class="brands">
                                                            <li><a href="#"><img src="assets/images/megamenu/brand-organic.png" width="161" height="136" alt="organic"></a></li>
                                                            <li><a href="#"><img src="assets/images/megamenu/brand-explore.png" width="160" height="136" alt="explore"></a></li>
                                                            <li><a href="#"><img src="assets/images/megamenu/brand-organic-2.png" width="99" height="136" alt="organic 2"></a></li>
                                                            <li><a href="#"><img src="assets/images/megamenu/brand-eco-teas.png" width="164"  height="136" alt="eco teas"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <x-main-category/>                                                                                --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 padding-top-2px">
                    <div class="header-search-bar layout-01">
                        <form action="{{ route('search') }}" class="form-search" name="desktop-seacrh" method="get">
                            <input type="text" name="query" class="input-text" value="{{ request('query') }}" placeholder="Tìm kiếm tại đây...">
                            {{-- <select name="category">
                                <option value="-1" selected>Tất cả danh mục</option>
                                <option value="vegetables">Rau củ</option>
                                <option value="fresh_berries">Dâu tươi</option>
                                <option value="ocean_foods">Hải sản</option>
                                <option value="butter_eggs">Bơ & Trứng</option>
                                <option value="fastfood">Đồ ăn nhanh</option>
                                <option value="fresh_meat">Thịt tươi</option>
                                <option value="fresh_onion">Hành tươi</option>
                                <option value="papaya_crisps">Đu đủ & Hoa quả sấy</option>
                                <option value="oatmeal">Bột yến mạch</option>
                            </select>                             --}}
                            <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                        </form>
                    </div>
                    <div class="live-info">
                        <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">0396813911</b></p>
                        <p class="working-time">Thứ 2 - Thứ 7: 8h30 sáng - 7h30 tối</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>