<li class="product-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="contain-product pr-detail-layout">
        <div class="product-thumb">
            <a href="{{route('site.product.detail',['slug'=>$product->slug])}}" class="link-to-product">
                <img src="{{asset('images/products/'.$product->image)}}" alt="{{$product->image}}" width="270" height="270" class="product-thumnail">
            </a>
        </div>
        <div class="info">
            <b class="categories">Trái cây tươi</b>
            <h4 class="product-title"><a href="{{route('site.product.detail',['slug'=>$product->slug])}}" class="pr-name">{{$product->name}}</a></h4>
            <p class="excerpt">{{$product->description}}</p>
            <div class="price">
                <ins><span class="price-amount"><span class="currencySymbol">đ</span>{{number_format($product->price)}}</span></ins>
                <del><span class="price-amount"><span class="currencySymbol">đ</span>{{number_format($product->pricesale)}}</span></del>
            </div>
            <div class="buttons">
                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a href="{{route('site.product.detail',['slug'=>$product->slug])}}" class="btn add-to-cart-btn">thêm vào giỏ hàng</a>
                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="advance-info">
            <ul class="list">
                <li>100% thành phần từ trái cây thật</li>
                <li>Đường hoàn toàn tự nhiên</li>
                <li>Được chứng nhận không biến đổi gen (Non-GMO)</li>
            </ul>
            <div class="shipping-info">
                <p class="shipping-day">Giao hàng trong 3 ngày</p>
                <p class="for-today">Nhận hàng miễn phí hôm nay</p>
            </div>
        </div>                                        
    </div>
</li>  

