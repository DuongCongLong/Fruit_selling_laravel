<ul class="biolife-carousel nav-center nav-none-on-mobile xs-margin-top-36px" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":600, "settings":{ "slidesToShow": 1}}]}'>
    @foreach ($post_list as $post)
    <li>
        <div class="post-item effect-01 style-bottom-info layout-02">
            <div class="thumbnail">
                <a href="{{route('blogs')}}" class="link-to-post"><img src="{{asset('images/posts/'.$post->image)}}" width="370" height="270" alt="{{$post->image}}"></a>
                {{-- <div class="post-date">
                    <span class="date">26</span>
                    <span class="month">tháng 12</span>
                </div> --}}
            </div>
            <div class="post-content">
                <h4 class="post-name"><a href="{{route('blogs')}}" class="linktopost">{{$post->title}}</a></h4>
                <div class="post-meta">
                    <a href="#" class="post-meta__item author"><img src="assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Quản trị viên</span></a>
                    <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                    <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                    <div class="post-meta__item post-meta__item-social-box">
                        <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                        <div class="inner-content">
                            <ul class="socials">
                                <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="excerpt">{{$post->description}}</p>
                <div class="group-buttons">
                    <a href="#" class="btn readmore">Tiếp tục đọc</a>
                </div>
            </div>
        </div>
    </li>
@endforeach
</ul>