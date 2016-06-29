@extends('frontend')

@section('content')

    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li><a href="{{url('/')}}">Trang chủ</a></li>
                    <li class="active">Sản phẩm</li>
                </ul>
                <div class="boxDetail">
                    <h2 class="titlePost">
                        {{$product->title}}
                    </h2>

                    {!! $product->content_tab1 !!}
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