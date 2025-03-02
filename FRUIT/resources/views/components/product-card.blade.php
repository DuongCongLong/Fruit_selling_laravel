<li class="product-item">
    <div class="contain-product layout-default">
        <div class="product-thumb">
            <a href="{{route('site.product.detail',['slug'=>$product->slug])}}" class="link-to-product">
                <img src="{{asset('images/products/'.$product->image)}}" alt="{{$product->image}}" width="270" height="270" class="product-thumnail">
            </a>
            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
        </div>
        <div class="info">
            <b class="categories">Trái cây</b>
            <h4 class="product-title"><a href="{{route('site.product.detail',['slug'=>$product->slug])}}" class="pr-name">{{$product->name}}</a></h4>
            <div class="price ">
                <ins><span class="price-amount"><span class="currencySymbol">đ</span>{{number_format($product->price)}}</span></ins>
                <del><span class="price-amount"><span class="currencySymbol">đ</span>{{number_format($product->pricesale)}}</span></del>
            </div>
            <div class="slide-down-box">
                <p class="message">Tất cả sản phẩm đều được chọn lọc cẩn thận để đảm bảo an toàn thực phẩm.</p>
                <div class="buttons">
                    <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                    <a href="{{route('site.product.detail',['slug'=>$product->slug])}}" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>thêm vào giỏ hàng</a>
                    <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</li> 