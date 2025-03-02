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

  <div class="hero-section hero-background">
    <h1 class="page-title">ĐĂNG KÝ TÀI KHOẢN</h1>
</div>
<div class="container">
    <nav class="biolife-nav">
        <ul>
            <li class="nav-item"><a href="index-2.html" class="permal-link">Chào mừng bạn đến với Biolife! Vui lòng đăng ký.</a></li>
        </ul>
    </nav>
</div>

<div class="page-contain login-page">
    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="container">
            <div class="row">
             
                <!--Form Sign In-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="signin-container">
                        <form action="{{ route('saveUser') }}" method="post">
                            @csrf
                            <p class="form-row">
                                @if (session('msg'))
                                {{session('msg')}}
                                @endif
                            </p>
                            <p class="form-row">
                                <label for="fid-name">Tên người dùng:<span class="requite">*</span></label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="txt-input" placeholder="Vui lòng nhập tên của bạn">
                                @error('name')
                                <span class="error-msg" style="color: red;">{{ $message }}</span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label for="fid-name">Tên tài khoản:<span class="requite">*</span></label>
                                <input type="text" id="username" name="username" value="{{ old('username') }}" class="txt-input" placeholder="Vui lòng nhập tài khoản của bạn">
                                @error('username')
                                <span class="error-msg" style="color: red;">{{ $message }}</span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label for="fid-name">Giới tính (O:Nữ; 1:Nam)<span class="requite">*</span></label>
                                <input type="text" id="gender" name="gender" value="{{ old('gender') }}" class="txt-input" placeholder="Vui lòng nhập giới tính của bạn">
                                @error('gender')
                                <span class="error-msg" style="color: red;">{{ $message }}</span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label for="fid-name">Địa chỉ email:<span class="requite">*</span></label>
                                <input type="text" id="email" name="email" value="{{ old('email') }}" class="txt-input" placeholder="Vui lòng nhập email của bạn">
                                @error('email')
                                <span class="error-msg" style="color: red;">{{ $message }}</span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label for="fid-name">Số điện thoại:<span class="requite">*</span></label>
                                <input type="text" id="phone" name="phone" value="{{ old('phone') }}" class="txt-input" placeholder="Vui lòng nhập số điện thoại của bạn">
                                @error('phone')
                                <span class="error-msg" style="color: red;">{{ $message }}</span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label for="fid-name">Địa chỉ:<span class="requite">*</span></label>
                                <input type="text" id="address" name="address" value="{{ old('address') }}" class="txt-input" placeholder="Vui lòng nhập địa chỉ của bạn">
                                @error('address')
                                <span class="error-msg" style="color: red;">{{ $message }}</span>
                                @enderror
                            </p>
                            <p class="form-row">
                                <label for="fid-pass">Mật khẩu:<span class="requite">*</span></label>
                                <input type="password" name="password" id="password" class="txt-input" placeholder="Vui lòng nhập mật khẩu của bạn">
                                @error('password')
                                <span class="error-msg" style="color: red;">{{ $message }}</span>
                                @enderror
                            </p>
                            <p class="form-row wrap-btn">
                                <button class="btn btn-submit btn-bold" name="DANGKY" type="submit">Đăng ký</button>
                                <a href="#" class="link-to-help">Quên mật khẩu của bạn</a>
                            </p>
                        </form>                        
                    </div>
                </div>
                <!--Go to Register form-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="register-in-container">
                        <div class="intro">
                            <h4 class="box-title">Khách hàng mới?</h4>
                            <p class="sub-title">Tạo tài khoản với chúng tôi và bạn sẽ có thể:</p>
                            <ul class="lis">
                                <li>Thanh toán nhanh hơn</li>
                                <li>Lưu nhiều địa chỉ giao hàng</li>
                                <li>Truy cập lịch sử đơn hàng của bạn</li>
                                <li>Theo dõi đơn hàng mới</li>
                                <li>Lưu các mặt hàng vào danh sách yêu thích của bạn</li>
                            </ul>
                            <a href="{{route('website.getlogin')}}" class="btn btn-bold">ĐÃ CÓ TÀI KHOẢN</a>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(Session::has('message'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true
    }
    toastr.error("{{ Session::get('message') }}");
</script>
@endif

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