@extends('frontend')

@section('content')

    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li><a href="{{url('/')}}">Trang chủ</a></li>
                    <li><a href="{{url('phan-phoi')}}">Phân phối</a></li>
                    <li class="active">{{config('delivery')['city'][$delivery->city]}}</li>
                </ul>
                <div class="boxDetail">
                    <h2 class="titlePost">
                        Hệ thống phân phối tại {{config('delivery')['city'][$delivery->city]}}
                    </h2>
                    {!! $delivery->content !!}

                </div>
            </div>
            @include('frontend.right')
        </div>
    </section>

@endsection