@extends('frontend')

@section('content')
    <section class="layoutHome">
        <div class="container">
            <div class="layoutLeft">
                <ul class="breadCrumb clearFix">
                    <li><a href="{{url('/')}}">Trang chủ</a></li>
                    <li class="active">Hỏi đáp chuyên gia</li>
                </ul>
                <div class="boxQuestion">
                    <h3 class="globalTitle">
                        <a href="{{url('cau-hoi-thuong-gap')}}">Góc chuyên gia</a>
                    </h3>
                    @if ($mainQuestion)
                        <div class="headQuestion clearFix">
                            <a href="{{url('cau-hoi-thuong-gap', $mainQuestion->slug)}}" class="thumb">
                                <img src="{{url('img/cache/200x200', $mainQuestion->image)}}" alt="">
                            </a>
                            <h3>
                                {{$mainQuestion->question}}
                            </h3>
                            {{$mainQuestion->answer}}
                            <p>
                                Độc giả có thể gửi câu hỏi trực tiếp vào bảng đặt câu hỏi dưới đây, hoặc gửi trực tiếp vào Email:
                                <a href="mailto:tuvansuckhoe.bsdinh@gmail.com">tuvansuckhoe.bsdinh@gmail.com</a>
                                <a href="mailto:tuvanbigbb@gmail.com">tuvanbigbb@gmail.com</a>
                            </p>
                        </div>
                    @endif
                    <div class="boxForm">
                        {!! Form::open(array('url' => 'save_question')) !!}
                            <input type="text" name="ask_person" class="txt txt-name" placeholder="Họ và tên"/>
                            <input type="email" name="ask_email" class="txt txt-email" placeholder="Email"/>
                            <input type="number" name="ask_phone" class="txt txt-phone" placeholder="Số điện thoại"/>
                            <input type="text" name="ask_address" class="txt txt-add" placeholder="Địa chỉ"/>
                            <textarea name="question" class="txt txt-content" placeholder="Nội dung"></textarea>
                            <input type="submit" value="gửi đi" class="btn btn-submit"/>
                            <input type="reset" value="Làm lại" class="btn btn-reset"/>
                        {!! Form::close() !!}
                    </div>
                    <!-- //listQuestion -->
                    @foreach ($questions as $question)
                       <article class="item">
                        <h3 class="title-faq"><span>?</span>{{$question->title}}</h3>
                        <div class="content">
                            <p>
                                <span class="question">Câu hỏi:</span>
                                <span>
                                 {{$question->question}}
                                </span>
                            </p>
                            <div class="viewDetail clearFix">
                                <div class="date">
                                  <span class="datePost">
                                    {{$question->updated_at->format('d/m/Y')}}
                                  </span>
                                  <span>
                                    {{$question->updated_at->format('H:i:s')}}
                                  </span>
                                </div>
                                <a href="{{url('cau-hoi-thuong-gap', $question->slug)}}" class="viewMore">Xem thêm</a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    <div class="boxPaging">
                        @include('pagination.default', ['paginate' => $questions])
                    </div><!--//news-list-->
                </div>
            </div>
            @include('frontend.right')
        </div>
    </section>

@endsection