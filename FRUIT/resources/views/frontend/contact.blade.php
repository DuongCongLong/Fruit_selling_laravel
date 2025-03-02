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
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main-color.css">
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

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Organic Fruits</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav nav-86px">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Trang chủ</a></li>
                <li class="nav-item"><span class="current-page">Liên hệ</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain contact-us">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            {{-- <div class="wrap-map biolife-wrap-map" id="map-block">
                <iframe width="1920" height="591" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.7297198886176!2d106.66183357439722!3d10.755301459584325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ef083aed259%3A0xdc35aee68bbb8dc9!2zMjE1IMSQLiBI4buTbmcgQsOgbmcsIFBoxrDhu51uZyAxMSwgUXXhuq1uIDUsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1714892624260!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0">
                </iframe>
            </div> --}}

            <div class="container">
                <div class="row">
                    <!--Contact info-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-5">
                        <div class="contact-info-container sm-margin-top-27px xs-margin-bottom-60px xs-margin-top-60px">
                            <h4 class="box-title">Liên hệ với chúng tôi</h4>
                            <ul class="addr-info">
                                <li>
                                    <div class="if-item">
                                        <p class="dsc"><b>Địa chỉ:</b>5A,đường số 8,kp4,phường Tam Bình,TP.Thủ Đức,TP.Hồ Chí Minh</b>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <p class="dsc"><b>Điện thoại:</b>0396813911</b>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        
                                        <p class="dsc"><b>Email:</b>duongconglong@example.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        
                                        <p class="dsc"><b>Thời gian mở cửa:</b>8am - 8pm, Thứ 2 đến Thứ 6</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-5">
                        <div class="contact-form-container sm-margin-top-112px">
                            @if (!Auth::check())
                            <div class="page-contain page-404">
                              <div id="main-content" class="main-content">
                                  <div class="container">
                                      <div class="row">
                                          <div class="content-404">
                                              <h1 class="heading">Lỗi</h1>
                                              <h2 class="title">Bạn chưa đăng nhập.</h2>
                                              <p>Vui lòng đăng nhập để liên hệ với chúng tôi</p>
                                              <a class="button" href="{{route('website.getlogin')}}">ĐĂNG NHẬP</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                            @else
                            <form action="{{route('saveContact')}}" name="frm-contact" method="post">
                                @csrf
                                @php
                                $user = Auth::user();
                                @endphp
                                <p class="form-row">
                                    <input type="text" name="name" value="{{ $user->name }}" placeholder="Hãy nhập tên" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <input type="text" name="email" value="{{ $user->email }}" placeholder="Địa chỉ email" class="txt-input">
                                </p>
                                
                                <p class="form-row">
                                    <input type="tel" name="phone" value="{{ $user->phone }}" placeholder="Số điện thoại" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <input type="text" name="title" value="{{ $user->title }}" placeholder="Vui lòng nhập tiêu đề" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <input type="text" id="content" name="content" value="{{ $user->content }}" class="txt-input" placeholder="Vui lòng nhập nội dung">
                                </p>
                                <p class="form-row">
                                    <button class="btn btn-submit" type="submit">Gửi tin nhắn</button>
                                </p>
                            </form>
                            @endif
                        </div>
                    </div>
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
                    <li class="list-item"><a href="#">$ USD (Dollar)</a></li>
                    <li class="list-item"><a href="#">£ GBP (Pound)</a></li>
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