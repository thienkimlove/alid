@extends('frontend')

@section('content')

    <section class="layoutHome contentDetail">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li><a href="{{url('/')}}">Trang chủ</a></li>
                    <li class="active">Sản phẩm</li>
                </ul>
                <div class="boxDetail">
                    <h2 class="titlePost">{{$product->title}}</h2>

                    <ul class="news-type bgList">
                        <li class="active">
                            <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-infoproduct" data-parent="news-type" data-reset="news-home" title="Thông tin sản phẩm">
                                Thông tin sản phẩm</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-research01" data-parent="news-type" data-reset="news-home" title="Nhận biết bao bì">
Bằng chứng khoa học</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" rel="nofollow" data-type="tab" data-content="tab-video" data-parent="news-type" data-reset="news-home" title="Hướng dẫn sử dụng">
                                Hướng dẫn sử dụng
                            </a>
                        </li>
                    </ul><!--//news-type-->
                    <div class="news-home" id="tab-infoproduct" style="display: block">
                        <article class="detail">
                            {!! $product->content_tab1 !!}
                        </article>
                    </div><!--//news-list-->
                    <div class="news-home" id="tab-research01">
                        <article class="detail">
                            {!! $product->content_tab2 !!}
                        </article>
                    </div><!--//news-list-->
                    <div class="news-home" id="tab-video">
                        <article class="detail">
                            {!! $product->content_tab3 !!}
                        </article>
                    </div><!--//news-list-->

                </div>
                <!-- //listButton -->
                <ul class="listButton clearFix">
                    <li class="ilocal"><a href="{{url('phan-phoi')}}">Xem điểm bán Alid Slim</a></li>
                    <li class="icall"><a href="{{url('lien-he')}}">1900 6482 - 0912 571 190</a></li>
                </ul>
                @foreach ($middleIndexBanner as $innerAd)
                    <div class="boxAdv">
                        <a href="{{$innerAd->url}}"><img src="{{url('files/'.$innerAd->image)}}" alt=""></a>
                    </div>
                @endforeach
                <!-- //boxOther -->
                <div class="boxOther">
                    <h3 class="titleOther">
                        <a href="#">Tin liên quan</a>
                    </h3>
                    <ul class="listOther" id="listOrther">
                        @foreach ($product->related_posts as $rPost)
                            <li><a href="{{url($rPost->slug.'.html')}}">{{$rPost->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- //boxTag -->
                <div class="boxTags">
                    <span>Từ khóa</span>
                    @foreach ($product->tags as $tag)
                        <a href="{{url('tag/'.$tag->slug)}}" title="">{{$tag->name}}</a>
                    @endforeach
                </div>
                <!-- //boxComment -->
                <div class="boxComment">
                    <h3 class="titleComment">
                        Bình luận
                    </h3>
                    <div class="fb-comments" data-href="{{url('product')}}" data-numposts="5"></div>
                </div>
            </div>
            @include('frontend.right')
        </div>
    </section>

@endsection