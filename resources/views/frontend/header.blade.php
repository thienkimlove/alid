<header class="header">
    <div class="container">
        <h1>
            <a href="#" class="logo" title="logo">
                <img src="{{url('frontend/imgs/logo.png')}}" alt="Logo" width="211" height="67">
            </a>
        </h1>
        <div class="panelTop">
            {!! Form::open(array('url' => 'search','id' => 'box-search', 'method' => 'get')) !!}
                <div class="boxSearch">
                    <input type="text" name="q"  placeholder="Nội dung tìm kiếm">
                </div>
            {!! Form::close() !!}
            <ul class="navSocial pc">
                <li>
                    <a href="#" class="fb">Facebook</a>
                </li>
                <li><a href="#" class="yu">Youtube</a></li>
            </ul>
        </div>
        <a href="#" title="Menu" class="sp btnMenu" id="btnMenu">Menu</a>
    </div>
    <div class="navGlobal">
        <div class="container">
            <ul id="navGlobal" class="pc clearFix">
                <li>
                    <a class="{{(isset($page) && $page == 'index') ? 'active' : ''}}" href="{{url('/')}}" title="">TRANG CHỦ</a>
                </li>

                <li>
                    <a class="{{(isset($page) && $page == 'product') ? 'active' : ''}}" href="{{url('product')}}" title="">Sản phẩm</a>
                </li>

                @if ($headerCategories->count() > 0)
                    @foreach ($headerCategories as $headerCategory)
                        <li>
                            <a class="{{(isset($page) && ($page == $headerCategory->slug || in_array($page, $headerCategory->subCategories->lists('slug')->all()))) ? 'active' : ''}}" href="{{url($headerCategory->slug)}}">{{$headerCategory->name}}</a>
                            @if ($headerCategory->subCategories->count() > 0)
                                <ul>
                                    @foreach ($headerCategory->subCategories as $childCategory)
                                        <li><a class="{{(isset($page) && $page == $childCategory->slug) ? 'active' : ''}}" href="{{url($childCategory->slug)}}">{{$childCategory->name}}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                @endif


                <li>
                    <a class="{{(isset($page) && $page == 'cau-hoi-thuong-gap') ? 'active' : ''}}" href="{{url('cau-hoi-thuong-gap')}}" title="">Hỏi đáp chuyên gia</a>
                </li>
                <li>
                    <a class="{{(isset($page) && $page == 'video') ? 'active' : ''}}" href="{{url('video')}}" title="">Video</a>
                </li>
                <li>
                    <a class="{{(isset($page) && $page == 'lien-he') ? 'active' : ''}}" href="{{url('lien-he')}}" title="">Liên hệ</a>
                </li>
                <li>
                    <a class="{{(isset($page) && $page == 'phan-phoi') ? 'active' : ''}}" href="{{url('phan-phoi')}}" title="">Phân phối</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<section class="boxBanner">
    <div class="boxSlider">
        <div class="owl-carousel" id="slideHomepage">
            @foreach ($headerIndexBanners as $banner)
                <div class="item">
                    <a class="thumb" href="{{$banner->url}}" title="">
                        <img src="{{url('files/'.$banner->image)}}"/>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>