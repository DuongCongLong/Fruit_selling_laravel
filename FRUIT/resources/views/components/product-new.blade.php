<li class="product-item">
    <div class="contain-product right-info-layout contain-product__right-info-layout">
        <div class="product-thumb">
            <a href="{{route('site.product.detail',['slug'=>$product->slug])}}" class="link-to-product">
                <img src="{{asset('images/products/'.$product->image)}}" alt="{{$product->image}}" width="270" height="270" class="product-thumnail">
            </a>
        </div>
        <div class="info">
            <b class="categories">Trái cây tươi</b>
            <h4 class="product-title"><a href="{{route('site.product.detail',['slug'=>$product->slug])}}" class="pr-name">{{$product->name}}</a></h4>
            <div class="price">
                <ins><span class="price-amount"><span class="currencySymbol"></span>{{number_format($product->price)}}</span></ins>
                <del><span class="price-amount"><span class="currencySymbol"></span>{{number_format($product->pricesale)}}</span></del>
            </div>
            <div class="rating">
                <p class="star-rating"><span class="width-80percent"></span></p>
                <span class="review-count">(05 đánh giá)</span>
            </div>
        </div>
    </div>
</li>