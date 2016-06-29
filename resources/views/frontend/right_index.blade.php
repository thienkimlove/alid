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
    @if ($featureVideos->count() > 0)
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
</div>