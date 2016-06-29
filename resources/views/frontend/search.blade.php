@extends('frontend')

@section('content')

    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li>
                        <a href="{{url('/')}}">Trang chủ</a>
                    </li>
                    <li class="active">{{$keyword}}</li>
                </ul>
                @if ($posts->count() > 0)
                    @foreach ($posts as $post)
                    <div class="boxNews">
                        <div class="listNews">
                            @foreach ($posts as $post)
                                <div class="item clearFix">
                                    <a href="{{url($post->slug.'.html')}}" class="thumb">
                                        <img src="{{url('img/cache/275x200', $post->image)}}" alt="">
                                    </a>
                                    <h3>
                                        <a href="{{url($post->slug.'.html')}}">{{$post->title}}</a>
                                    </h3>
                                    <p>
                                        {{$post->desc}}
                                    </p>
                                    <div class="viewDetail clearFix">
                                        <div class="date">
                                    <span class="datePost">
                                      {{$post->updated_at->format('d/m/Y')}}
                                    </span>
                                    <span>
                                      {{$post->views}} lượt xem
                                    </span>
                                        </div>
                                        <a href="{{url($post->slug.'.html')}}" class="viewMore">Xem thêm</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                @endif

                <div class="boxPaging">
                    @include('pagination.default', ['paginate' => $posts])
                </div><!--//news-list-->

            </div>
            @include('frontend.right')
        </div>
    </section>

@endsection