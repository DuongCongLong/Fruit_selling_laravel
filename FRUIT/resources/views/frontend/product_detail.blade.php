<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biolife - Organic Food</title>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet')}}">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet')}}">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet')}}">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main-color.css')}}">
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
        <h1 class="page-title">Chi tiết sản phẩm</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Trang chủ</a></li>
                <li class="nav-item"><a href="#" class="permal-link">Chi tiết sản phẩm</a></li>
                {{-- <li class="nav-item"><span class="current-page">Fresh Fruit</span></li> --}}
            </ul>
        </nav>
    </div>

    <div class="page-contain single-product">
        <div class="container">

            <!-- Main content -->
            <div id="main-content" class="main-content">
                
                <!-- summary info -->
                <div class="sumary-product single-layout">
                    <div class="media">
                        <ul class="biolife-carousel slider-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
                            <li><img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}" width="500" height="500"></li>
                            <li><img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}" width="500" height="500"></li>
                            <li><img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}" width="500" height="500"></li>
                            <li><img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}" width="500" height="500"></li>
                            <li><img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}" width="500" height="500"></li>
                        </ul>
                        <ul class="biolife-carousel slider-nav" data-slick='{"arrows":false,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":4,"slidesToScroll":1,"asNavFor":".slider-for"}'>
                            <li><img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}" width="88" height="88"></li>
                            <li><img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}" width="88" height="88"></li>
                            <li><img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}" width="88" height="88"></li>
                            <li><img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}" width="88" height="88"></li>
                            <li><img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}" width="88" height="88"></li>
                        </ul>
                    </div>
                    <div class="product-attribute">
                        <h3 class="title">{{ $product->name }}</h3>
                        <div class="rating">
                            <p class="star-rating"><span class="width-80percent"></span></p>
                            <span class="review-count">(04 Đánh giá)</span>
                            <span class="qa-text">Hỏi &amp; Đáp</span>
                            <b class="category">Bởi: Trái cây tự nhiên</b>
                        </div>
                        <span class="sku">Mã sản phẩm: #76584HH</span>
                        <p class="excerpt">{{ $product->description }}</p>
                        <div class="price">
                            <ins><span class="price-amount"><span class="currencySymbol"></span> {{number_format($product->price)}} đồng</span></ins>
                        </div>
                        <div class="shipping-info">
                            <p class="shipping-day">Giao hàng trong 3 ngày</p>
                            <p class="for-today">Nhận hàng miễn phí hôm nay</p>
                        </div>
                    </div>
                    <div class="action-form">
                        <div class="quantity-box">
                            <span class="title">Số lượng:</span>
                            <div class="qty-input">
                                <input type="number" name="qty12554" value="1" data-max_value="20" data-min_value="1" data-step="1" id="qty" >
                                <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true" onclick="incrementValue()"></i></a>
                                <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true" onclick="decrementValue()"></i></a>
                            </div>
                        </div>
                        <div class="buttons">
                            <a class="btn add-to-cart-btn" id="basic-addon2" onclick="handleAddCart({{$product->id}})">Thêm vào giỏ hàng</a>
                            <p class="pull-row">
                                <a href="#" class="btn wishlist-btn">Yêu thích</a>
                                <a href="#" class="btn compare-btn">So sánh</a>
                            </p>
                        </div>
                        <div class="location-shipping-to">
                            <span class="title">Giao đến:</span>
                            <select name="shipping_to" class="country">
                                <option value="-1">Chọn tỉnh thành</option>
                                <option value="america">Thành phố Hồ Chí Minh</option>
                                <option value="france">Thành Phố Hà Nội</option>
                                <option value="germany">Tỉnh Bình Định</option>
                                <option value="japan">Tỉnh Lâm Đồng</option>
                            </select>
                        </div>
                        <div class="social-media">
                            <ul class="social-list">
                                <li><a href="#" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="acepted-payment-methods">
                            <ul class="payment-methods">
                                <li><img src="{{asset('assets/images/card1.jpg') }}" alt="" width="51" height="36"></li>
                                <li><img src="{{asset('assets/images/card2.jpg') }}" alt="" width="51" height="36"></li>
                                <li><img src="{{asset('assets/images/card3.jpg') }}" alt="" width="51" height="36"></li>
                                <li><img src="{{asset('assets/images/card4.jpg') }}" alt="" width="51" height="36"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                

                <!-- Tab info -->
                <div class="product-tabs single-layout biolife-tab-contain">
                    {{-- <div class="tab-head">
                        <ul class="tabs">
                            <li class="tab-element active"><a href="#tab_1st" class="tab-link">Mô tả sản phẩm</a></li>
                            <li class="tab-element" ><a href="#tab_2nd" class="tab-link">Thông tin bổ sung</a></li>
                            <li class="tab-element" ><a href="#tab_3rd" class="tab-link">Vận chuyển & Giao hàng</a></li>
                            <li class="tab-element" ><a href="#tab_4th" class="tab-link">Đánh giá của khách hàng <sup>(3)</sup></a></li>
                        </ul>
                    </div> --}}
                    <div class="tab-content">
                        {{-- <div id="tab_1st" class="tab-contain desc-tab active"> <p class="desc">Mỗi người trong số họ phải tự trang trí cho mình bằng thuốc độc, chất lên men trước cuối tuần. Đó không phải là quá trình của hạm đội quấy rối tình dục. Toàn bộ tiền sảnh của lorem của tôi, hendrerit đó không có trước chính sách. Bây giờ trước đây, chính sách không đáng giá, nhưng có vulputate hay không. Maecenas dolor elit, fringilla hay turpis ac, auctor vulputate nulla. Nhưng anh ấy muốn chiếc thuyền. Một chiếc bình kinh tế hoặc bất động sản. Ngay cả các thành viên, quần chúng cũng không được nhắm đến, chỉ là sôcôla miễn phí, vì vậy việc trang điểm cho chiếc bình rất quan trọng. Không có giai đoạn quan trọng nào trong cuộc đời tôi. Cho đến khi tôi ngồi xuống, tôi sẽ luôn là một nhân vật hoạt hình trong chiếc nơ. Thực ra, anh ta muốn đặt nhân viên vào tình thế hợp pháp, nhưng vì mạng sống của sòng bạc. Đối với nụ cười bệnh viện của bệnh viện, bài tập về nhà không hề có nhưng các thành viên đều rất năng động.
                            Proin fringilla urna vel mattis euismod. Etiam sodales, massa non tincidunt iaculis, mauris libero scelerisque justo, ut rutrum lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan. Donec ngồi amet ligula et enim semper viverra a in arcu. Vestibulum enim ligula, varius sed enim vitae, posuere molestie velit. Morbi risus orci, congue in nulla at, sodales fermentum magna.</p>
                             <div class="desc-expand"> <span class="title">Trái cây tươi hữu cơ</span> <ul class="list"> <li>100% nguyên liệu trái cây thật</li> <li>100 túi trái cây tươi được gói riêng</li> <li>Sự pha trộn giữa truyền thống phương Đông và phương Tây một cách tự nhiên</li> </ul> </div> </div > --}}
                            <div id="tab_2nd" class="tab-contain addtional-info-tab">
                                <table class="tbl_attributes">
                                <tbody>
                                <tr>
                                <th>Màu sắc</th>
                                <td><p>Đen, Xanh lam, Tím, Đỏ, Vàng</p></td>
                                </tr>
                                <tr>
                                <th>Kích thước</th>
                                <td><p>S, M, L</p></td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                        <div id="tab_3rd" class="tab-contain shipping-delivery-tab">
                            <div class="accodition-tab biolife-accodition">
                                <ul class="tabs">
                                    <li class="tab-item">
                                        <span class="title btn-expand">How long will it take to receive my order?</span>
                                        <div class="content">
                                            <p>Orders placed before 3pm eastern time will normally be processed and shipped by the following business day. For orders received after 3pm, they will generally be processed and shipped on the second business day. For example if you place your order after 3pm on Monday the order will ship on Wednesday. Business days do not include Saturday and Sunday and all Holidays. Please allow additional processing time if you order is placed on a weekend or holiday. Once an order is processed, speed of delivery will be determined as follows based on the shipping mode selected:</p>
                                            <div class="desc-expand">
                                                <span class="title">Shipping mode</span>
                                                <ul class="list">
                                                    <li>Standard (in transit 3-5 business days)</li>
                                                    <li>Priority (in transit 2-3 business days)</li>
                                                    <li>Express (in transit 1-2 business days)</li>
                                                    <li>Gift Card Orders are shipped via USPS First Class Mail. First Class mail will be delivered within 8 business days</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">How is the shipping cost calculated?</span>
                                        <div class="content">
                                            <p>You will pay a shipping rate based on the weight and size of the order. Large or heavy items may include an oversized handling fee. Total shipping fees are shown in your shopping cart. Please refer to the following shipping table:</p>
                                            <p>Note: Shipping weight calculated in cart may differ from weights listed on product pages due to size and actual weight of the item.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Why Didn’t My Order Qualify for FREE shipping?</span>
                                        <div class="content">
                                            <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Shipping Restrictions?</span>
                                        <div class="content">
                                            <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Undeliverable Packages?</span>
                                        <div class="content">
                                            <p>Occasionally packages are returned to us as undeliverable by the carrier. When the carrier returns an undeliverable package to us, we will cancel the order and refund the purchase price less the shipping charges. Here are a few reasons packages may be returned to us as undeliverable:</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="tab_4th" class="tab-contain review-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                        <div class="rating-info">
                                            <p class="index"><strong class="rating">4.4</strong>out of 5</p>
                                            <div class="rating"><p class="star-rating"><span class="width-80percent"></span></p></div>
                                            <p class="see-all">See all 68 reviews</p>
                                            <ul class="options">
                                                <li>
                                                    <div class="detail-for">
                                                        <span class="option-name">5stars</span>
                                                        <span class="progres">
                                                            <span class="line-100percent"><span class="percent width-90percent"></span></span>
                                                        </span>
                                                        <span class="number">90</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="detail-for">
                                                        <span class="option-name">4stars</span>
                                                        <span class="progres">
                                                            <span class="line-100percent"><span class="percent width-30percent"></span></span>
                                                        </span>
                                                        <span class="number">30</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="detail-for">
                                                        <span class="option-name">3stars</span>
                                                        <span class="progres">
                                                            <span class="line-100percent"><span class="percent width-40percent"></span></span>
                                                        </span>
                                                        <span class="number">40</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="detail-for">
                                                        <span class="option-name">2stars</span>
                                                        <span class="progres">
                                                            <span class="line-100percent"><span class="percent width-20percent"></span></span>
                                                        </span>
                                                        <span class="number">20</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="detail-for">
                                                        <span class="option-name">1star</span>
                                                        <span class="progres">
                                                            <span class="line-100percent"><span class="percent width-10percent"></span></span>
                                                        </span>
                                                        <span class="number">10</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                                        <div class="review-form-wrapper">
                                            <span class="title">Submit your review</span>
                                            <form action="#" name="frm-review" method="post">
                                                <div class="comment-form-rating">
                                                    <label>1. Your rating of this products:</label>
                                                    <p class="stars">
                                                        <span>
                                                            <a class="btn-rating" data-value="star-1" href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            <a class="btn-rating" data-value="star-2" href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            <a class="btn-rating" data-value="star-3" href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            <a class="btn-rating" data-value="star-4" href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            <a class="btn-rating" data-value="star-5" href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </span>
                                                    </p>
                                                </div>
                                                <p class="form-row wide-half">
                                                    <input type="text" name="name" value="" placeholder="Your name">
                                                </p>
                                                <p class="form-row wide-half">
                                                    <input type="email" name="email" value="" placeholder="Email address">
                                                </p>
                                                <p class="form-row">
                                                    <textarea name="comment" id="txt-comment" cols="30" rows="10" placeholder="Write your review here..."></textarea>
                                                </p>
                                                <p class="form-row">
                                                    <button type="submit" name="submit">submit review</button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="comments">
                                    <ol class="commentlist">
                                        <li class="review">
                                            <div class="comment-container">
                                                <div class="row">
                                                    <div class="comment-content col-lg-8 col-md-9 col-sm-8 col-xs-12">
                                                        <p class="comment-in"><span class="post-name">Quality is our way of life</span><span class="post-date">01/04/2018</span></p>
                                                        <div class="rating"><p class="star-rating"><span class="width-80percent"></span></p></div>
                                                        <p class="author">by: <b>Shop organic</b></p>
                                                        <p class="comment-text">There are few things in life that please people more than the succulence of quality fresh fruit and vegetables.  At Fresh Fruits we work to deliver the world’s freshest, choicest, and juiciest produce to discerning customers across the UAE and GCC.</p>
                                                    </div>
                                                    <div class="comment-review-form col-lg-3 col-lg-offset-1 col-md-3 col-sm-4 col-xs-12">
                                                        <span class="title">Was this review helpful?</span>
                                                        <ul class="actions">
                                                            <li><a href="#" class="btn-act like" data-type="like"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Yes (100)</a></li>
                                                            <li><a href="#" class="btn-act hate" data-type="dislike"><i class="fa fa-thumbs-down" aria-hidden="true"></i>No (20)</a></li>
                                                            <li><a href="#" class="btn-act report" data-type="dislike"><i class="fa fa-flag" aria-hidden="true"></i>Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="review">
                                            <div class="comment-container">
                                                <div class="row">
                                                    <div class="comment-content col-lg-8 col-md-9 col-sm-8 col-xs-12">
                                                        <p class="comment-in"><span class="post-name">Quality is our way of life</span><span class="post-date">01/04/2018</span></p>
                                                        <div class="rating"><p class="star-rating"><span class="width-80percent"></span></p></div>
                                                        <p class="author">by: <b>Shop organic</b></p>
                                                        <p class="comment-text">There are few things in life that please people more than the succulence of quality fresh fruit and vegetables.  At Fresh Fruits we work to deliver the world’s freshest, choicest, and juiciest produce to discerning customers across the UAE and GCC.</p>
                                                    </div>
                                                    <div class="comment-review-form col-lg-3 col-lg-offset-1 col-md-3 col-sm-4 col-xs-12">
                                                        <span class="title">Was this review helpful?</span>
                                                        <ul class="actions">
                                                            <li><a href="#" class="btn-act like" data-type="like"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Yes (100)</a></li>
                                                            <li><a href="#" class="btn-act hate" data-type="dislike"><i class="fa fa-thumbs-down" aria-hidden="true"></i>No (20)</a></li>
                                                            <li><a href="#" class="btn-act report" data-type="dislike"><i class="fa fa-flag" aria-hidden="true"></i>Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="review">
                                            <div class="comment-container">
                                                <div class="row">
                                                    <div class="comment-content col-lg-8 col-md-9 col-sm-8 col-xs-12">
                                                        <p class="comment-in"><span class="post-name">Quality is our way of life</span><span class="post-date">01/04/2018</span></p>
                                                        <div class="rating"><p class="star-rating"><span class="width-80percent"></span></p></div>
                                                        <p class="author">by: <b>Shop organic</b></p>
                                                        <p class="comment-text">There are few things in life that please people more than the succulence of quality fresh fruit and vegetables.  At Fresh Fruits we work to deliver the world’s freshest, choicest, and juiciest produce to discerning customers across the UAE and GCC.</p>
                                                    </div>
                                                    <div class="comment-review-form col-lg-3 col-lg-offset-1 col-md-3 col-sm-4 col-xs-12">
                                                        <span class="title">Was this review helpful?</span>
                                                        <ul class="actions">
                                                            <li><a href="#" class="btn-act like" data-type="like"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Yes (100)</a></li>
                                                            <li><a href="#" class="btn-act hate" data-type="dislike"><i class="fa fa-thumbs-down" aria-hidden="true"></i>No (20)</a></li>
                                                            <li><a href="#" class="btn-act report" data-type="dislike"><i class="fa fa-flag" aria-hidden="true"></i>Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                    <div class="biolife-panigations-block version-2">
                                        <ul class="panigation-contain">
                                            <li><span class="current-page">1</span></li>
                                            <li><a href="#" class="link-page">2</a></li>
                                            <li><a href="#" class="link-page">3</a></li>
                                            <li><span class="sep">....</span></li>
                                            <li><a href="#" class="link-page">20</a></li>
                                            <li><a href="#" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="result-count">
                                            <p class="txt-count"><b>1-5</b> of <b>126</b> reviews</p>
                                            <a href="#" class="link-to">See all<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- related products -->
                <div class="product-related-box single-layout">
                    <div class="biolife-title-box lg-margin-bottom-26px-im">
                        <span class="biolife-icon icon-organic"></span>
                        <span class="subtitle">Tất cả các sản phẩm tốt nhất dành cho bạn</span>
                        <h3 class="main-title">Sản Phẩm Liên Quan</h3>
                    </div>
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
                        @foreach ($list_product as $productitem)
                        <x-product-card :$productitem/>
                        @endforeach
                    </ul>
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
                    <li class="list-item"><a href="#">đ GBP (Pound)</a></li>
                    <li class="list-item"><a href="#">¥ JPY (Yen)</a></li>
                </ul>
            </div>
            <div class="glb-item languages">
                <b class="title">Language</b>
                <ul class="list inline">
                    <li class="list-item"><a href="#"><img src="{{asset('assets/images/languages/us.jpg') }}" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="{{asset('assets/images/languages/fr.jpg') }}" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="{{asset('assets/images/languages/ger.jpg') }}" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="{{asset('assets/images/languages/jap.jpg') }}" alt="flag" width="24" height="18"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/biolife.framework.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
    <script>
        function handleAddCart(productid)
        {
        //   alert(productid)
          let qty=document.getElementById("qty").value;
          $.ajax({
            url:"{{route('site.cart.addcart')}}",
            type:"GET",
            data:{
            productid:productid,
            qty:qty
           },
           success:function(result,status,xhr)
           {
            document.getElementById("showcart").innerHTML=result;
            alert("Thêm vào giỏ hàng thành công!");
           },
           error:function(xhr,status,error)
           {
            console.log(error);
           }
          });
        }
      </script>
</body>

</html>