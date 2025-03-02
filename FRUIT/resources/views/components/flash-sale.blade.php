<ul class="products biolife-carousel nav-top-right nav-none-on-mobile" data-slick='{"arrows":true, "dots":false, "infinite":false, "speed":400, "slidesMargin":30, "slidesToShow":1}'>
    @foreach ($product_list as $product)    
<li class="product-item">
    <div class="contain-product deal-layout contain-product__deal-layout">
        <div class="product-thumb">
            <a href="{{route('site.product.detail',['slug'=>$product->slug])}}" class="link-to-product">
                <img src="{{asset('images/products/'.$product->image)}}" alt="{{$product->image}}" width="330" height="330" class="product-thumnail">
            </a>
            <div class="labels">
                <span class="sale-label">-50%</span>
            </div>
        </div>
        <div class="info">
            <div class="biolife-countdown" data-datetime="2020/02/18 00:00:00"></div>
            <b class="categories">Trái cây tươi</b>
            <h4 class="product-title"><a href="{{route('site.product.detail',['slug'=>$product->slug])}}" class="pr-name">{{$product->name}}</a></h4>
            <div class="price">
                <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($product->price)}} đ</span></ins>
                <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($product->pricesale)}} đ</span></del>
            </div>
            <div class="slide-down-box">
                <p class="message">Tất cả sản phẩm đều được lựa chọn kỹ càng để đảm bảo an toàn thực phẩm.</p>
                <div class="buttons">
                    <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                    <a href="{{route('site.product.detail',['slug'=>$product->slug])}}" class="btn add-to-cart-btn">Thêm vào giỏ hàng</a>
                    <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</li>
@endforeach
</ul>