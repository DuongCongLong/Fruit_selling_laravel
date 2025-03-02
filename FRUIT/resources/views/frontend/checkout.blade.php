<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biolife - Thực Phẩm Hữu Cơ</title>
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

    <!-- Bộ tải trang -->
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
    <!-- Phần Mục Anh Hùng -->
    <div class="hero-section hero-background">
        <h1 class="page-title">Trái Cây Hữu Cơ</h1>
    </div>

    <!-- Phần Điều Hướng -->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Trang Chủ</a></li>
                <li class="nav-item"><span class="current-page">Thanh toán</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain checkout">

        <!-- Nội dung chính -->
        <div id="main-content" class="main-content">
            <div class="container sm-margin-top-37px">
                <div class="row">

                    <!-- Hộp tiến trình thanh toán -->
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                        <div class="checkout-progress-wrap">
                            <ul class="steps">
                                <li class="step 1st">
                                    <div class="checkout-act active">
                                        <h3 class="title-box"><span class="number">1</span>Khách Hàng</h3>
                                        <div class="box-content">
                                            <p class="txt-desc">Thanh toán với tư cách là <a class="pmlink" href="#">Khách?</a> Bạn có thể lưu thông tin để tạo tài khoản với chúng tôi sau.</p>
                                            
                                            <div class="login-on-checkout">
                                                @if (!Auth::check())
                                                <div class="page-contain page-404">
                                                  <div id="main-content" class="main-content">
                                                      <div class="container">
                                                          <div class="row">
                                                              <div class="content-404">
                                                                  <h1 class="heading">Lỗi</h1>
                                                                  <h2 class="title">Bạn chưa đăng nhập.</h2>
                                                                  <p>Vui lòng đăng nhập để thanh toán</p>
                                                                  <a class="button" href="{{route('website.getlogin')}}">ĐĂNG NHẬP</a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                                @else
                                                <form action="{{route('site.cart.docheckout')}}" name="frm-login" method="post">
                                                    @csrf
                                                    @php
                                                    $user = Auth::user();
                                                    @endphp
                                                   <p class="form-row">
                                                    <label for="fid-name">Họ tên khách hàng:<span class="requite"></span></label>
                                                    <input type="text" id="name" name="name" value="{{ $user->name }}" class="txt-input" placeholder="Vui lòng nhập tên của bạn">
                                                    @error('name')
                                                    <span class="error-message" style="color: red;">{{ $message }}</span>
                                                    @enderror
                                                   </p>
                                                   <p class="form-row">
                                                    <label for="fid-name">Email:<span class="requite"></span></label>
                                                    <input type="text" id="email" name="email" value="{{ $user->email }}" class="txt-input" placeholder="Vui lòng nhập tên của bạn">
                                                    @error('email')
                                                    <span class="error-message" style="color: red;">{{ $message }}</span>
                                                    @enderror
                                                   </p>
                                                    <p class="form-row">
                                                        <label for="fid-name">Số điện thoại:<span class="requite"></span></label>
                                                        <input type="text" id="phone" name="phone" value="{{ $user->phone }}" class="txt-input" placeholder="Vui lòng nhập tên của bạn">
                                                        @error('phone')
                                                        <span class="error-message" style="color: red;">{{ $message }}</span>
                                                        @enderror
                                                       </p>
                                                       <p class="form-row">
                                                        <label for="fid-name">Địa chỉ:<span class="requite"></span></label>
                                                        <input type="text" id="address" name="address" value="{{ $user->address }}" class="txt-input" placeholder="Vui lòng nhập tên của bạn">
                                                        @error('address')
                                                        <span class="error-message" style="color: red;">{{ $message }}</span>
                                                        @enderror
                                                       </p>
                                                    <p class="form-row">
                                                        <label for="fid-name">Ghi chú đơn hàng:<span class="requite"></span></label>
                                                        <input type="text" id="note" name="note" value="{{ $user->note }}" class="txt-input" placeholder="Vui lòng nhập ghi chú">
                                                        <button type="submit" name="btn-sbmt" class="btn">Thanh toán</button>   
                                                    </p>
                                                    {{-- <p class="msg">Đã có tài khoản? <a href="'website.getlogin" class="link-forward">Đăng nhập ngay</a></p> --}}
                                                </form>
                                                @endif
                                                <form action="{{url('/vnpay_payment')}}" method="POST">
                                                    @csrf
                                                     <button type="submit" name="redirect" class="btn">Thanh toán bằng VnPay</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
    
                            </ul>
                        </div>
                    </div>

                    <!-- Tóm tắt đơn hàng -->
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                        <div class="order-summary sm-margin-bottom-80px">
                            <div class="title-block">\ @php
                                $carts = session('carts', []);
                                $count = count($carts);
                                $totalMoney = 0;
                                @endphp
                                <h3 class="title">Tổng {{ $count }} sản phẩm </h3>
                                <a href="#" class="link-forward">Chỉnh sửa giỏ hàng</a>
                            </div>
                            <div class="cart-list-box short-type">
                                    @php
                                    $totalMoney=0;
                                    @endphp
                                    @foreach($list_cart as $row_cart)
                                  
                                <ul class="cart-list">
                                    <li class="cart-elem">
                                        <div class="cart-item">
                                           
                                            <div class="product-thumb">
                                                <a class="prd-thumb" href="#">
                                                    <figure><img src="{{ asset('images/products/' . $row_cart['image']) }}" alt="{{ $row_cart['image'] }}" width="113" height="113"></figure>
                                                </a>
                                            </div>
                                            <div class="info">
                                                <span class="txt-quantity">Số lượng: {{$row_cart['qty']}}</span>
                                                <a href="#" class="pr-name"> {{$row_cart['name']}}</a>
                                            </div>
                                            <div class="price price-contain">
                                                <ins><span class="price-amount"><span class="currencySymbol">đ</span> {{number_format($row_cart['price'])}}</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">đ</span> {{number_format($row_cart['pricesale'])}}</span></del>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                @php
                               $totalMoney += ($row_cart['price'] - $row_cart['pricesale']) * $row_cart['qty'];
                              @endphp
                                @endforeach
                                <ul class="subtotal">
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Tổng phụ</b>
                                            <span class="stt-price">đ170.00</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Vận Chuyển</b>
                                            <span class="stt-price">đ20.00</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Thuế</b>
                                            <span class="stt-price">đ0.00</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="subtotal-line">
                                            <a href="#" class="link-forward">Mã khuyến mãi/chứng chỉ quà tặng</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Tổng cộng:</b>
                                            <span class="stt-price">đ{{ number_format($totalMoney) }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <x-footer/>
    <!--Footer cho điện thoại-->
    <div class="mobile-footer">
        <div class="mobile-footer-inner">
            <div class="mobile-block block-menu-main">
                <a class="menu-bar menu-toggle btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                    <span class="fa fa-bars"></span>
                    Menu
                </a>
            </div>
            <div class="mobile-block block-sidebar">
                <a class="menu-bar filter-toggle btn-toggle" data-object="open-mobile-filter" href="javascript:void(0)">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    Lọc
                </a>
            </div>
            <div class="mobile-block block-minicart">
                <a class="link-to-cart" href="#">
                    <span class="fa fa-shopping-bag" aria-hidden="true"></span>
                    <span class="total-minicart-item">0</span>
                </a>
            </div>
        </div>
    </div>

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