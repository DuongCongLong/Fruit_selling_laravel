<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biolife - Organic Food</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main-color.css">
</head>
<body class="biolife-body">

    <!-- Preloader -->
    <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    <x-header/>

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            {{-- <!--Block 01: Main slide-->
            <div class="main-slide block-slider">
                <ul class="biolife-carousel nav-none-on-mobile" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}' >
                    <li>
                        <div class="slide-contain slider-opt03__layout01">
                            <div class="media">
                                <div class="child-elememt">
                                    <a href="#" class="link-to">
                                        <img src="assets/images/home-03/slide-01-child-01.png" width="604" height="580" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="text-content">
                                <i class="first-line">Lựu</i>
                                <h3 class="second-line">Rau củ 100% Hữu cơ</h3>
                                <p class="third-line">Hỗn hợp táo xanh và trái cây tươi ép</p>
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Mua ngay</a>
                                    <a href="#" class="btn btn-thin">Xem bộ sưu tập</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-contain slider-opt03__layout01">
                            <div class="media">
                                <div class="child-elememt"><a href="#" class="link-to"><img src="assets/images/home-03/slide-01-child-01.png" width="604" height="580" alt=""></a></div>
                            </div>
                            <div class="text-content">
                                <i class="first-line">Lựu đỏ</i>
                                <h3 class="second-line">Rau củ 100% Hữu Cơ</h3>
                                <p class="third-line">Sự pha trộn giữa táo xanh ép tươi & các loại trái cây</p>
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Mua ngay</a>
                                    <a href="#" class="btn btn-thin">Xem lookbook</a>
                                </p>
                            </div>
                        </div>                        
                    </li>
                </ul>
            </div> --}}

            <!--Block 02: Banner-->
            <div class="special-slide">
                <div class="container">
                    <ul class="biolife-carousel dots_ring_style" data-slick='{"arrows": false, "dots": true, "slidesMargin": 30, "slidesToShow": 1, "infinite": true, "speed": 800, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 1}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":20, "dots": false}},{"breakpoint":480, "settings":{ "slidesToShow": 1}}]}' >
                        <li>
                            <div class="slide-contain biolife-banner__special">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link">
                                            <figure><img src="assets/images/home-03/banner.webp" width="616" height="483" alt=""></figure>
                                            <figure><img src="assets/images/home-03/banner.webp" width="616" height="483" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="text-content">
                                        <b class="first-line">Trái cây tươi</b>
                                        <span class="second-line">Thiên đường trái cây</span>
                                        <span class="third-line">Dễ dàng <i>Sống khỏe mạnh, hạnh phúc</i></span>
                                        {{-- <div class="product-detail">
                                            <h4 class="product-name">Sản phẩm trái cây tươi quốc gia</h4>
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span class="currencySymbol">₫</span>1,950,000</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">₫</span>2,200,000</span></del>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="btn add-to-cart-btn">Thêm vào giỏ hàng</a>
                                            </div>
                                        </div> --}}
                                    </div>                                    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slide-contain biolife-banner__special">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link">
                                            <figure><img src="assets/images/home-03/banner.webp" width="616" height="483" alt=""></figure>
                                            <figure><img src="assets/images/home-03/banner.webp" width="616" height="483" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="text-content">
                                        <b class="first-line">Lựu</b>
                                        <span class="second-line">Thiên đường hữu cơ</span>
                                        <span class="third-line">Dễ dàng <i>Sống khỏe mạnh, hạnh phúc</i></span>
                                        {{-- <div class="product-detail">
                                            <h4 class="product-name">Sản phẩm trái cây tươi quốc gia</h4>
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span class="currencySymbol">₫</span>1,950,000</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">₫</span>2,200,000</span></del>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="btn add-to-cart-btn">Thêm vào giỏ hàng</a>
                                            </div>
                                        </div> --}}
                                    </div>                                    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slide-contain biolife-banner__special">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link">
                                            <figure><img src="assets/images/home-03/banner.webp" width="616" height="483" alt=""></figure>
                                            <figure><img src="assets/images/home-03/banner.webp" width="616" height="483" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="text-content">
                                        <b class="first-line">Lựu</b>
                                        <span class="second-line">Thiên đường hữu cơ</span>
                                        <span class="third-line">Dễ dàng <i>Sống khỏe mạnh, hạnh phúc</i></span>
                                        {{-- <div class="product-detail">
                                            <h4 class="product-name">Sản phẩm trái cây tươi quốc gia</h4>
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span class="currencySymbol">₫</span>1,950,000</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">₫</span>2,200,000</span></del>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="btn add-to-cart-btn">Thêm vào giỏ hàng</a>
                                            </div>
                                        </div> --}}
                                    </div>                                    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slide-contain biolife-banner__special">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link">
                                            <figure><img src="assets/images/home-03/banner.webp" width="616" height="483" alt=""></figure>
                                            <figure><img src="assets/images/home-03/banner.webp" width="616" height="483" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="text-content">
                                        <b class="first-line">Lựu</b>
                                        <span class="second-line">Thiên đường hữu cơ</span>
                                        <span class="third-line">Dễ dàng <i>Sống khỏe mạnh, hạnh phúc</i></span>
                                        {{-- <div class="product-detail">
                                            <h4 class="product-name">Sản phẩm trái cây tươi quốc gia</h4>
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span class="currencySymbol">₫</span>1,950,000</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">₫</span>2,200,000</span></del>
                                            </div>
                                            <div class="buttons">
                                                <a href="#" class="btn add-to-cart-btn">Thêm vào giỏ hàng</a>
                                            </div>
                                        </div> --}}
                                    </div>                                    
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="biolife-service type01 biolife-service__type01 sm-margin-top-0 xs-margin-top-45px">
                        <b class="txt-show-01">100%Nature</b>
                        <i class="txt-show-02">Trái cây tươi</i>
                        <ul class="services-list">
                            <li>
                                <div class="service-inner">
                                    <span class="number">1</span>
                                    <span class="biolife-icon icon-beer"></span>
                                    <a class="srv-name" href="#">Sản phẩm được đóng dấu đầy đủ</a>
                                </div>
                            </li>
                            <li>
                                <div class="service-inner">
                                    <span class="number">2</span>
                                    <span class="biolife-icon icon-schedule"></span>
                                    <a class="srv-name" href="#">Đặt hàng và giao hàng đúng giờ</a>
                                </div>
                            </li>
                            <li>
                                <div class="service-inner">
                                    <span class="number">3</span>
                                    <span class="biolife-icon icon-car"></span>
                                    <a class="srv-name" href="#">Miễn phí vận chuyển trong thành phố</a>
                                </div>
                            </li>
                        </ul>                        
                    </div>
                </div>
            </div>

            <!--Block 03: Product Tab-->
            <div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
                <div class="container">
                    <div class="biolife-title-box">
                        <span class="subtitle">Tất cả các sản phẩm tốt nhất cho bạn</span>
                        <h3 class="main-title">
                            <a href="{{ route('site.product') }}">Xem tất cả sản phẩm</a>
                        </h3>                        
                    </div>
                    <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                        <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                            <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im"> 
                                <li class="tab-element">
                                    <a href="#" class="tab-link"><span class="biolife-icon icon-blueberry"></span>Trái cây tươi của cửa hàng</a>
                                </li>
                            </ul>                                                  
                        </div>
                        <div class="tab-content">
                            <div id="tab01_1st" class="tab-contain active">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                    {{-- <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-21.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Dưa hấu</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                                     --}}
                                    @foreach ($list_product as $productitem)
                                    <div class="col-sm-3 mb-4">
                                      <x-product-card :$productitem/>
                                    </div>
                                  @endforeach
                                </ul>
                            </div>
                            <div id="tab01_2nd" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bơ Hass hữu cơ, lớn</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả các sản phẩm đều được lựa chọn kỹ lưỡng để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Chanh hữu cơ</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-07.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Công Dụng Chữa Bệnh Của Chanh</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả các sản phẩm đều được lựa chọn kỹ lưỡng để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-02.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biHolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Ớt Cay Đỏ Muối Từ</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả các sản phẩm đều được lựa chọn kỹ lưỡng để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-03.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bánh Cauliflower Kugel cho Lễ Vượt Qua</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-06.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Lê Packham</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-20.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Trái cây tươi Quốc gia</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-19.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bí ngô Cổ tích</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bơ Hass hữu cơ</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Chanh hữu cơ</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab01_3rd" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bơ Hass hữu cơ, lớn</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả các sản phẩm đều được lựa chọn kỹ lưỡng để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-07.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Công Dụng Chữa Bệnh Của Chanh</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả các sản phẩm đều được lựa chọn kỹ lưỡng để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Chanh hữu cơ</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-02.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Ớt Cay Đỏ Muối Từ</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả các sản phẩm đều được lựa chọn kỹ lưỡng để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-03.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bánh Cauliflower Kugel cho Lễ Vượt Qua</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-06.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Lê Packham</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-20.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Trái cây tươi Quốc gia</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-19.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bí ngô Cổ tích</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bơ Hass hữu cơ</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Chanh hữu cơ</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab01_4th" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Chanh hữu cơ</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bơ Hass hữu cơ, lớn</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả các sản phẩm đều được lựa chọn kỹ lưỡng để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-07.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Công Dụng Chữa Bệnh Của Chanh</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả các sản phẩm đều được lựa chọn kỹ lưỡng để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-02.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Ớt Cay Đỏ Muối Từ</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả các sản phẩm đều được lựa chọn kỹ lưỡng để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-03.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bánh Cauliflower Kugel cho Lễ Vượt Qua</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-06.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Lê Packham</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-20.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Trái cây tươi Quốc gia</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-19.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bí ngô Cổ tích</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bơ Hass hữu cơ</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Chanh hữu cơ</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab01_5th" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>

                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bơ Hass hữu cơ, lớn</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả các sản phẩm đều được lựa chọn kỹ lưỡng để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-07.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Công Dụng Chữa Bệnh Của Chanh</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả các sản phẩm đều được lựa chọn kỹ lưỡng để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-02.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Ớt Cay Đỏ Muối Từ</a></h4>
                                                <div class="price">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả các sản phẩm đều được lựa chọn kỹ lưỡng để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                                    
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-03.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bánh Cauliflower Kugel cho Lễ Vượt Qua</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-06.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Lê Packham</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-20.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Trái cây tươi Quốc gia</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-19.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bí ngô Cổ tích</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-05.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Bơ Hass hữu cơ</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Chanh hữu cơ</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="assets/images/products/p-22.jpg" alt="Rau củ" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Rau củ</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Chanh hữu cơ</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">đ</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">đ</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Block 04: Banner Promotion 01 -->
            <div class="banner-promotion-01 xs-margin-top-50px sm-margin-top-11px">
                <div class="biolife-banner promotion biolife-banner__promotion">
                    <div class="banner-contain">
                        <div class="media background-biolife-banner__promotion">
                            <div class="img-moving position-1">
                                <img src="assets/images/home-03/img-moving-pst-1.png" width="149" height="139" alt="img msv">
                            </div>
                            <div class="img-moving position-2">
                                <img src="assets/images/home-03/img-moving-pst-2.png" width="185" height="265" alt="img msv">
                            </div>
                            <div class="img-moving position-3">
                                <img src="assets/images/home-03/img-moving-pst-3-cut.png" width="384" height="151" alt="img msv">
                            </div>
                            <div class="img-moving position-4">
                                <img src="assets/images/home-03/img-moving-pst-4.png" width="198" height="269" alt="img msv">
                            </div>
                        </div>
                        <div class="text-content">
                            <div class="container text-wrap">
                                <i class="first-line">Trái cây 100% organic</i>
                                <span class="second-line">Trái cây luôn tươi ngon</span>
                                <p class="third-line">Còn chần chờ gì mà không nhấn mua hàng...</p>
                                <div class="product-detail">
                                    <p class="txt-price"><span>Chỉ còn:</span> đ 8.00</p>
                                    <a href="#" class="btn add-to-cart-btn">thêm vào giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Block 05: Banner Promotion 02-->
            {{-- <div class="banner-promotion-02 z-index-20">
                <div class="biolife-banner promotion2 biolife-banner__promotion2">
                    <div class="banner-contain">
                        <div class="container">
                            <div class="media"></div>
                            <div class="text-content">
                                <b class="first-line">Thiên Đường Ẩm Thực Đã Được Tạo Ra</b>
                                <span class="second-line">Dễ Dàng <i>Khỏe Mạnh, Hạnh Phúc</i></span>
                                <p class="third-line">Thiên Đường Ẩm Thực Đã Được Tạo Ra nghe có vẻ như là tên của một dịch vụ giao đồ ăn ngon miệng tuyệt vời, nhưng đừng nhầm lẫn. Blog thực sự là một tập hợp các công thức nấu ăn, video nấu ăn, và mẹo dinh dưỡng.</p>
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Đọc Thêm</a>
                                    <a href="#" class="btn btn-thin">Xem Thực Đơn Ngay</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--Block 06: Products-->
            <div class="Product-box sm-margin-top-96px xs-margin-top-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-6">
                            <div class="advance-product-box">
                                <div class="biolife-title-box bold-style biolife-title-box__bold-style">
                                    <h3 class="title">Ưu đãi sản phẩm</h3>
                                </div>
                                   <x-flash-sale/>
                            </div>
                        </div>
                        
                        <div class="col-lg-8 col-md-7 col-sm-6">
                            <div class="advance-product-box">
                                <div class="biolife-title-box bold-style biolife-title-box__bold-style">
                                    <h3 class="title">Sản phẩm mới nhất của cửa hàng</h3>
                                </div>
                                <ul class="products biolife-carousel eq-height-contain nav-center-03 nav-none-on-mobile row-space-29px" data-slick='{"rows":2,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":2,"responsive":[{"breakpoint":1200,"settings":{"rows":2,"slidesToShow":2}},{"breakpoint":992,"settings":{"rows":2,"slidesToShow":1}},{"breakpoint":768,"settings":{"rows":2,"slidesToShow":2}},{"breakpoint":500,"settings":{"rows":2,"slidesToShow":1}}]}'>
                                    @foreach ($list_product as $productitem)
                                    <x-product-new :$productitem/>
                                    @endforeach
                                    <!-- Continue translating the rest of the items similarly -->
                                </ul>
                                {{-- @foreach ($list_product as $productitem)
                                    <div class="col-sm-3 mb-4">
                                      <x-product-card :$productitem/>
                                    </div>
                                  @endforeach --}}
                                <div class="biolife-banner style-01 biolife-banner__style-01 xs-margin-top-80px-im sm-margin-top-30px-im">
                                    <div class="banner-contain">
                                        <a href="#" class="bn-link"></a>
                                        <div class="text-content">
                                            <span class="first-line">Tươi mỗi ngày</span>
                                            <b class="second-line">Tự nhiên</b>
                                            <i class="third-line">Thực phẩm tươi</i>
                                            <span class="fourth-line">Chất lượng cao cấp</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!--Block 07: Brands-->
            <div class="brand-slide sm-margin-top-100px background-fafafa xs-margin-top-80px xs-margin-bottom-80px">
                <div class="container">
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}},{"breakpoint":450, "settings":{ "slidesToShow": 1, "slidesMargin":10}}]}'>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-01.jpg" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-02.jpg" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-03.jpg" width="153" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-04.jpg" width="224" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-01.jpg" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-02.jpg" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-03.jpg" width="153" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-04.jpg" width="224" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Block 08: Blog Posts-->
            <div class="blog-posts sm-margin-top-93px sm-padding-top-72px xs-padding-bottom-50px">
                <div class="container">
                    <div class="biolife-title-box">
                        <span class="subtitle">Tin tức mới nhất và thú vị nhất</span>
                        <h3 class="main-title">Từ Blog</h3>
                    </div>
                   <x-last-post/>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
   <x-footer/>

    <!--Footer For Mobile-->
    <div class="mobile-footer">
        <div class="mobile-footer-inner">
            <div class="mobile-block block-menu-main">
                <a class="menu-bar menu-toggle btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                    <span class="fa fa-bars"></span>
                    <span class="text">Menu</span>
                </a>
            </div>
            <div class="mobile-block block-sidebar">
                <a class="menu-bar filter-toggle btn-toggle" data-object="open-mobile-filter" href="javascript:void(0)">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    <span class="text">Sidebar</span>
                </a>
            </div>
            <div class="mobile-block block-minicart">
                <a class="link-to-cart" href="#">
                    <span class="fa fa-shopping-bag" aria-hidden="true"></span>
                    <span class="text">Cart</span>
                </a>
            </div>
            <div class="mobile-block block-global">
                <a class="menu-bar myaccount-toggle btn-toggle" data-object="global-panel-opened" href="javascript:void(0)">
                    <span class="fa fa-globe"></span>
                    <span class="text">Global</span>
                </a>
            </div>
        </div>
    </div>

    <!--Mobile Global Menu-->
    <div class="mobile-block-global">
        <div class="biolife-mobile-panels">
            <span class="biolife-current-panel-title">Global</span>
            <a class="biolife-close-btn" data-object="global-panel-opened" href="#">&times;</a>
        </div>
        <div class="block-global-contain">
            <div class="glb-item my-account">
                <b class="title">My Account</b>
                <ul class="list">
                    <li class="list-item"><a href="#">Login/register</a></li>
                    <li class="list-item"><a href="#">Wishlist <span class="index">(8)</span></a></li>
                    <li class="list-item"><a href="#">Checkout</a></li>
                </ul>
            </div>
            <div class="glb-item currency">
                <b class="title">Currency</b>
                <ul class="list">
                    <li class="list-item"><a href="#">€ EUR (Euro)</a></li>
                    <li class="list-item"><a href="#">đ  USD (Dollar)</a></li>
                    <li class="list-item"><a href="#">đ GBP (Pound)</a></li>
                    <li class="list-item"><a href="#">¥ JPY (Yen)</a></li>
                </ul>
            </div>
            <div class="glb-item languages">
                <b class="title">Language</b>
                <ul class="list inline">
                    <li class="list-item"><a href="#"><img src="assets/images/languages/us.jpg" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="assets/images/languages/fr.jpg" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="assets/images/languages/ger.jpg" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="assets/images/languages/jap.jpg" alt="flag" width="24" height="18"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--Quickview Popup-->
    <div id="biolife-quickview-block" class="biolife-quickview-block">
        <div class="quickview-container">
            <a href="#" class="btn-close-quickview" data-object="open-quickview-block"><span class="biolife-icon icon-close-menu"></span></a>
            {{-- @foreach ($list_product as $productitem) --}}
           <x-product-card-inner />
           {{-- :$productitem --}}
           {{-- @endforeach --}}
        </div>
    </div>

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.nicescroll.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/biolife.framework.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>