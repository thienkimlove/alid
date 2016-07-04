@extends('frontend')

@section('content')

    <div class="boxPromo">
        <div class="container">
            <div class="centerImg">
                <img src="{{url('frontend/imgs/temp/promo.png')}}" alt="Promo">
            </div>
            <div class="col">
                @foreach ($promos->chunk(2) as $k => $promoContents)
                <div class="col-0{{$k+1}}">
                    @foreach ($promoContents as $promoContent)
                        <div class="block0{{$k+1}} clearFix">
                        <h3><a href="{{url($promoContent->slug.'.html')}}">{{$promoContent->title}}</a></h3>
                        <p>
                           {{$promoContent->desc}}
                        </p>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <section class="boxTabs">
        <div class="container">
            <div id="horizontalTab">
                <ul class="navTabs clearFix">
                    @foreach ($categories as $k => $category)
                        <li>
                            <a href="#tab0{{$k + 1}}" title="{{$category->name}}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
                @foreach ($categories as $k => $category)
                   <article class="tabContent clearFix" id="tab0{{$k + 1}}">
                    @foreach ($category->indexPosts() as $indexPost)
                    <div class="item clearFix">
                        <a href="{{url($indexPost->slug . '.html')}}" class="thumb">
                            <img src="{{url('img/cache/320x225', $indexPost->image)}}" alt="{{$indexPost->title}}" width="320" height="225">
                        </a>
                        <h3>
                            {{$indexPost->title}}
                        </h3>
                        <p>
                           {{$indexPost->desc}}
                        </p>
                    </div>
                   @endforeach
                </article>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /endboxTabs -->
    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <div class="boxHistory">
                    <div class="globalTitle">
                        Câu chuyện thành công
                    </div>
                    <div class="data owl-carousel" id="slideHistory">
                        @foreach ($historyPosts->chunk(2) as $historyContents)
                            <div class="item">
                                @foreach ($historyContents as $historyContent)
                                   <div class="block">
                                    <a href="{{url($historyContent . '.html')}}" class="thumbHistory">
                                        <img src="{{url('img/cache/340x225', $historyContent->image)}}" alt="History" width="340" height="225">
                                    </a>
                                    <h3>
                                        <a href="{{url($historyContent . '.html')}}">
                                            {{$historyContent->title}}
                                        </a>
                                    </h3>
                                    <p class="authorPost">
                                        {{$historyContent->author}}
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @include('frontend.right_index')
        </div>
    </section>

@endsection