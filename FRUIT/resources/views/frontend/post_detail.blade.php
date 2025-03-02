<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Bài Viết - Biolife</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main-color.css') }}">
    <style>
    .post-title {
        border-radius: 10px;
        background-color: #f8f9fa;
        padding: 10px 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: inline-block;
    }
    
    .post-description {
        border-radius: 8px;
        background-color: #e9ecef;
        padding: 8px 12px;
        margin-top: 4px;
    }
    
    .post-detail {
        border-radius: 6px;
        background-color: #dee2e6;
        padding: 6px 10px;
        margin-top: 10px;
    }
    .post-thumbnail{
        border-radius: 6px;
        background-color: #dee2e6;
        padding: 6px 10px;
    }
    .post-thumbnail-container {
        display: flex;
        gap: 10px; /* Khoảng cách giữa các hình ảnh */
        justify-content: center; /* Canh giữa nếu muốn */
        margin-top: 10px;
    }

    .post-thumbnail-container .post-thumbnail img {
        width: 100%; /* Hình ảnh tự co giãn theo container */
        max-width: 200px; /* Giới hạn kích thước tối đa */
        height: auto; /* Đảm bảo tỷ lệ hình ảnh */
        border-radius: 6px;
    }
</style>
</head>

<body class="biolife-body">

    <!-- Header -->
    <x-header />

    <!-- Hero Section -->
    <div class="hero-section hero-background style-02">
        <h1 class="page-title">Organic Fruits</h1>
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Trang chủ</a></li>
                <li class="nav-item"><span class="current-page">Chi tiết bài viết của chúng tôi</span></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
<!-- Main Content -->
<main class="page-contain single-post-page">
    <div class="container">
        <div id="main-content" class="main-content">
            <!-- Post Content -->
            <h1 class="post-title">{{$list_post->title}}</h1>
            <h3 class="post-description">{{$list_post->description}}</h3>
            <h4 class="post-detail">{{$list_post->detail}}</h4>
            <article class="post-single-content">
                <div class="post-thumbnail-container">
                    <div class="post-thumbnail">
                        <img src="{{ asset('images/posts/'.$list_post->image)}}" alt="{{ $list_post->title }}" class="img-fluid">
                    </div>
                    <div class="post-thumbnail">
                        <img src="{{ asset('images/posts/'.$list_post->image)}}" alt="{{ $list_post->title }}" class="img-fluid">
                    </div>
                    <div class="post-thumbnail">
                        <img src="{{ asset('images/posts/'.$list_post->image)}}" alt="{{ $list_post->title }}" class="img-fluid">
                    </div>
                </div>

                <!-- Meta Info -->
                <div class="post-meta">
                    <span class="post-category badge badge-success">ORGANIC</span>
                    <span class="post-date"> / {{ $list_post->created_at->format('d M, Y') }}</span>
                    <span class="author">Đăng bởi: {{ $list_post->author_name ?? 'Admin' }}</span>
                </div>
            </article>
        </div>
    </div>
</main>


    <!-- Footer -->
    <x-footer />

    <!-- Scroll to Top -->
    <a class="btn-scroll-top" href="#">
        <i class="biolife-icon icon-left-arrow"></i>
    </a>

    <!-- JS Assets -->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/biolife.framework.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>

</html>
