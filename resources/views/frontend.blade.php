<!DOCTYPE html>
<html lang="en" class="no-js" xmlns:fb='http://www.facebook.com/2008/fbml'>
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <link rel="stylesheet" href="{{url('frontend/css/alid.css')}}" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <meta content='GCL' name='generator'/>
    <title>{{$meta_title}}</title>

    <meta property="og:title" content="{{$meta_title}}">
    <meta property="og:description" content="{{$meta_desc}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{$meta_url}}">
    <meta property="og:image" content="{{$meta_image}}">
    <meta property="og:site_name" content="Alidslim">

    <meta name="twitter:card" content="Card">
    <meta name="twitter:url" content="{{$meta_url}}">
    <meta name="twitter:title" content="{{$meta_title}}">
    <meta name="twitter:description" content="{{$meta_desc}}">
    <meta name="twitter:image" content="{{$meta_image}}">
    <meta property="fb:app_id" content="1565586193743263" />

    <meta itemprop="name" content="{{$meta_title}}">
    <meta itemprop="description" content="{{$meta_desc}}">
    <meta itemprop="image" content="{{$meta_image}}">

    <meta name="ABSTRACT" content="{{$meta_desc}}"/>
    <meta http-equiv="REFRESH" content="1200"/>
    <meta name="REVISIT-AFTER" content="1 DAYS"/>
    <meta name="DESCRIPTION" content="{{$meta_desc}}"/>
    <meta name="KEYWORDS" content="{{$meta_keywords}}"/>
    <meta name="ROBOTS" content="index,follow"/>
    <meta name="AUTHOR" content="Alidslim"/>
    <meta name="RESOURCE-TYPE" content="DOCUMENT"/>
    <meta name="DISTRIBUTION" content="GLOBAL"/>
    <meta name="COPYRIGHT" content="Copyright 2013 by Goethe"/>
    <meta name="Googlebot" content="index,follow,archive" />
    <meta name="RATING" content="GENERAL"/>
    <!--[if lte IE 9]>
    <script src="{{url('frontend/js/html5.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" href="{{url('frontend/css/ie9.css')}}" type="text/css"/>
    <![endif]-->
    <script src="{{url('frontend/js/modernizr.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570f69bb385fe2f2"></script>
</head>
<body>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId : '1565586193743263',
            status : true, // check login status
            cookie : true, // enable cookies to allow the server to access the session
            xfbml : true // parse XFBML
        });
    };
    (function() {
        var e = document.createElement('script');
        e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
    }());
</script>
@include('frontend.header')
@yield('content')
@include('frontend.footer')
{{--@include('frontend.footer')
<div class="overlay" id="overlay"></div>
@include('frontend.mobile_menu')--}}
<script type="text/javascript" src="{{url('frontend/js/jquery-1.10.2.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery.matchHeight-min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/jquery.responsiveTabs.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/ScrollToFixed/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/fixedsidebar.js')}}"></script>
<script type="text/javascript" src="{{url('frontend/js/common.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#box-search').each(function() {
            $(this).find('input').keypress(function(e) {
                // Enter pressed?
                if(e.which == 10 || e.which == 13) {
                    this.form.submit();
                }
            });
        });
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-80266539-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>