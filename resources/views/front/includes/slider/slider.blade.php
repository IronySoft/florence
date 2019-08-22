<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            {{--@php($i=1)--}}
            @foreach($sliders as $slider)
            <li style="background-image: url({{asset('/')}}front/images/img_bg_1.jpg);">
            {{--<li style="background-image: url({{asset($slider->image)}});">--}}
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <p class="meta">
                                        <span class="cat"><a href="#">{{$slider->first_title}}</a></span>
                                        <span class="pos"> <a href="#"><marquee>{{$slider->last_title}}</marquee></a></span>
                                    </p>
                                    <h1>{!! str_limit($slider->description ,40) !!}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>

    </div>
</aside>


{{--<section id="featured">--}}
    {{--<!-- start slider -->--}}
    {{--<!-- Slider -->--}}
    {{--<div id="nivo-slider">--}}
        {{--<div class="nivo-slider">--}}
            {{--<!-- Slide #1 image -->--}}
            {{--@php($i=1)--}}
            {{--@foreach($sliders as $slider)--}}
                {{--<img src="{{asset($slider->image)}}" alt="" title="#caption-{{$i++}}"/>--}}
            {{--@endforeach--}}

        {{--</div>--}}
        {{--<br/>--}}
        {{--@foreach($text as $row)--}}
            {{--<p>--}}
                {{--<marquee><h3 class="mydanger">{{$row->text}}</h3></marquee>--}}
            {{--</p>--}}
        {{--@endforeach--}}
        {{--<header id="myHiro">--}}
            {{--<div  class="container ">--}}
                {{--<div class="row">--}}
                    {{--<div >--}}
                        {{--<div class="span12 ">--}}
                            {{--@php($i=1)--}}
                            {{--@foreach($sliders as $slider)--}}
                                {{--<div class=" nivo-caption" id="caption-{{$i++}}">--}}
                                    {{--<div>--}}
                                        {{--<h2 >{{$slider->first_title}} <strong>{{$slider->last_title}}</strong></h2>--}}
                                        {{--<p  class="myHider2">--}}

                                            {{--{!!$slider->description!!}--}}

                                        {{--</p>--}}
                                        {{--<a href="#" class="myHider3 btn btn-theme">Read More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endforeach--}}



                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</header>--}}

    {{--</div>--}}
    {{--<!-- end slider -->--}}
{{--</section>--}}



