<div class="layoutRight">
    <div class="boxAdv">
        <a href="{{url('lien-he')}}">
            <img src="{{url('frontend/imgs/temp/contact.jpg')}}" alt="">
        </a>
    </div>
    <div class="boxAdv">
        <a href="{{url('phan-phoi')}}">
            <img src="{{url('frontend/imgs/temp/dis.jpg')}}" alt="">
        </a>
    </div>
    @if ($featureVideos->count() > 0 && $page != 'video')
        <div class="boxVideo">
            <h3 class="globalTitle">
                Góc Video
            </h3>
            <div class="listVideo">
                @if ($firstVideo = $featureVideos->shift())
                    <div class="videoScreen">
                        <iframe width="100%" height="200" src="{{$firstVideo->url}}" frameborder="0" allowfullscreen></iframe>
                    </div>
                @endif
                @if ($featureVideos->count() > 0)
                    @foreach ($featureVideos as $video)
                        <div class="item">
                            <a href="{{url('video', $video->slug)}}" class="thumb">
                                <img src="{{url('img/cache/105x62', $video->image)}}" alt="">
                            </a>
                            <h3>
                                <a href="{{url('video', $video->slug)}}">{{$video->title}}</a>
                            </h3>
                            <p class="view">{{$video->views}} lượt xem</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    @endif

    <div class="boxSocial">
        <div class="Social">
            <div class="fb-page" data-href="https://www.facebook.com/AlidSlim-Eo-thon-d%C3%A1ng-%C4%91%E1%BA%B9p-1025739557533863/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/AlidSlim-Eo-thon-d%C3%A1ng-%C4%91%E1%BA%B9p-1025739557533863/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AlidSlim-Eo-thon-d%C3%A1ng-%C4%91%E1%BA%B9p-1025739557533863/">AlidSlim - Eo thon, dáng ð?p</a></blockquote></div>
        </div>
    </div>
    @if ($rightNews->count() > 0 && $page != 'phan-phoi')
        <div class="boxNews" id="sideBar">
            <h3 class="globalTitle">
                Tin nổi bật
            </h3>
            <div class="listNews">
                @foreach ($rightNews as $latestNew)
                   <div class="item clearFix">
                    <a href="{{url($latestNew->slug. '.html')}}" class="thumb">
                        <img src="{{url('img/cache/105x62', $latestNew->image)}}" alt="">
                    </a>
                    <h3>
                        <a href="{{url($latestNew->slug. '.html')}}">{{str_limit($latestNew->title, 65)}}</a>
                    </h3>
                </div>
                @endforeach
            </div>
        </div>
    @endif
</div>