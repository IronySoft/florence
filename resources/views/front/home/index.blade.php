@extends('front.master')
@section('title', 'Home | Florence Nursing Center')
@section('body')
    @include('front.includes.slider.slider')
    <div id="colorlib-container">
        <div class="container">


            <div class="row row-pb-md">
                @foreach($projects as $row)
                    <div class="col-md-8">
                        <div class="blog-entry">
                            <div class="blog-img">
                                <div class="video colorlib-video"
                                     style="background-image: url({{asset('/')}}front/images/blog-8.jpg);">
                                    <a href="https://www.youtube.com/watch?v=8v_T-Bn-YmU" class="popup-vimeo"><i
                                                class="icon-play"></i></a>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <div class="desc">
                                <p class="meta">
                                    <span class="cat"><a href="https://www.youtube.com/watch?v=oAhwjQMG0RQ">Watch</a></span>
                                    <span class="date">20 March 2018</span>
                                    <span class="pos">By <a href="#">Rich</a></span>
                                </p>
                                <h2><a href="blog.html"> our video how to make website</a></h2>
                                <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                            </div>
                        </div>
                    </div>

                @endforeach
                    <div class="col-md-4">
                        <div class="sidebar">
                            <div class="side">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
                                    <button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
                                </div>
                            </div>

                            <div class="side">
                                <h2 class="sidebar-heading">Recent Blog</h2>
                                <div class="f-blog">
                                    <a href="blog.html" class="blog-img" style="background-image: url({{asset('/')}}front/images/blog-1.jpg);">
                                    </a>
                                    <div class="desc">
                                        <h3><a href="blog.html">Be a designer</a></h3>
                                        <p class="admin"><span>25 March 2018</span></p>
                                    </div>
                                </div>
                                <div class="f-blog">
                                    <a href="blog.html" class="blog-img" style="background-image: url({{asset('/')}}front/images/blog-2.jpg);">
                                    </a>
                                    <div class="desc">
                                        <h3><a href="blog.html">How to build website</a></h3>
                                        <p class="admin"><span>24 March 2018</span></p>
                                    </div>
                                </div>
                                <div class="f-blog">
                                    <a href="blog.html" class="blog-img" style="background-image: url({{asset('/')}}front/images/blog-3.jpg);">
                                    </a>
                                    <div class="desc">
                                        <h3><a href="blog.html">Create website</a></h3>
                                        <p class="admin"><span>23 March 2018</span></p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

            </div>


            <div class="row row-pb-md">

                @foreach($blogs as $blog)
                    <div class="col-md-4">
                        <div class="blog-entry">
                            <div class="blog-img">
                                {{--<a href="blog.html"><img src="{{asset('/')}}front/images/blog-2.jpg"--}}
                                <a href="blog.html"><img src="{{asset($blog->image)}}"
                                                         class="img-responsive" alt="html5 bootstrap template"></a>
                            </div>
                            <div class="desc">
                                <p class="meta">
                                    <span class="cat"><a href="#"><small>post</small></a></span>
                                    <span class="date">{{$blog->created_at}}</span>
                                    <span class="pos">By <a href="#">{{$blog->writer}}</a></span>
                                </p>
                                <h2><a href="blog.html">{{$blog->title}}</a></h2>
                                <p> {!! str_limit($blog->description ,40) !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>


            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




    {{--new--}}
    {{--<div class="row row-pb-md">--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="blog-entry">--}}
    {{--<div class="blog-img">--}}
    {{--<a href="blog.html"><img src="{{asset('/')}}front/images/blog-4.jpg" class="img-responsive" alt="html5 bootstrap template"></a>--}}
    {{--</div>--}}
    {{--<div class="desc">--}}
    {{--<p class="meta">--}}
    {{--<span class="cat"><a href="#">Lifestyle</a></span>--}}
    {{--<span class="date">20 March 2018</span>--}}
    {{--<span class="pos">By <a href="#">Rich</a></span>--}}
    {{--</p>--}}
    {{--<h2><a href="blog.html">Recipe for your site</a></h2>--}}
    {{--<p>A small river named Duden flows by their place and supplies it with the necessary </p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="blog-entry">--}}
    {{--<div class="blog-img">--}}
    {{--<a href="blog.html"><img src="{{asset('/')}}front/images/blog-5.jpg" class="img-responsive" alt="html5 bootstrap template"></a>--}}
    {{--</div>--}}
    {{--<div class="desc">--}}
    {{--<p class="meta">--}}
    {{--<span class="cat"><a href="#">Events</a></span>--}}
    {{--<span class="date">20 March 2018</span>--}}
    {{--<span class="pos">By <a href="#">Rich</a></span>--}}
    {{--</p>--}}
    {{--<h2><a href="blog.html">Recipe for your site</a></h2>--}}
    {{--<p>A small river named Duden flows by their place and supplies it with the necessary </p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="blog-entry">--}}
    {{--<div class="blog-img">--}}
    {{--<a href="blog.html"><img src="{{asset('/')}}front/images/blog-6.jpg" class="img-responsive" alt="html5 bootstrap template"></a>--}}
    {{--</div>--}}
    {{--<div class="desc">--}}
    {{--<p class="meta">--}}
    {{--<span class="cat"><a href="#">Events</a></span>--}}
    {{--<span class="date">20 March 2018</span>--}}
    {{--<span class="pos">By <a href="#">Rich</a></span>--}}
    {{--</p>--}}
    {{--<h2><a href="blog.html">Recipe for your site</a></h2>--}}
    {{--<p>A small river named Duden flows by their place and supplies it with the necessary </p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row row-pb-md">--}}
    {{--<div class="col-md-8">--}}
    {{--<div class="blog-entry">--}}
    {{--<div class="blog-img">--}}
    {{--<div class="video colorlib-video" style="background-image: url({{asset('/')}}front/images/blog-8.jpg);">--}}
    {{--<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-play"></i></a>--}}
    {{--<div class="overlay"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="desc">--}}
    {{--<p class="meta">--}}
    {{--<span class="cat"><a href="#">Watch</a></span>--}}
    {{--<span class="date">20 March 2018</span>--}}
    {{--<span class="pos">By <a href="#">Rich</a></span>--}}
    {{--</p>--}}
    {{--<h2><a href="blog.html">Watch our video how to make website</a></h2>--}}
    {{--<p>A small river named Duden flows by their place and supplies it with the necessary </p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="blog-entry">--}}
    {{--<div class="blog-img">--}}
    {{--<a href="blog.html"><img src="{{asset('/')}}front/images/blog-7.jpg" class="img-responsive" alt="html5 bootstrap template"></a>--}}
    {{--</div>--}}
    {{--<div class="desc">--}}
    {{--<p class="meta">--}}
    {{--<span class="cat"><a href="#">Events</a></span>--}}
    {{--<span class="date">20 March 2018</span>--}}
    {{--<span class="pos">By <a href="#">Rich</a></span>--}}
    {{--</p>--}}
    {{--<h2><a href="blog.html">Recipe for your site</a></h2>--}}
    {{--<p>A small river named Duden flows by their place and supplies it with the necessary </p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row row-pb-md">--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="blog-entry">--}}
    {{--<div class="blog-img">--}}
    {{--<a href="blog.html"><img src="{{asset('/')}}front/images/blog-9.jpg" class="img-responsive" alt="html5 bootstrap template"></a>--}}
    {{--</div>--}}
    {{--<div class="desc">--}}
    {{--<p class="meta">--}}
    {{--<span class="cat"><a href="#">Events</a></span>--}}
    {{--<span class="date">20 March 2018</span>--}}
    {{--<span class="pos">By <a href="#">Rich</a></span>--}}
    {{--</p>--}}
    {{--<h2><a href="blog.html">Recipe for your site</a></h2>--}}
    {{--<p>A small river named Duden flows by their place and supplies it with the necessary </p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="blog-entry">--}}
    {{--<div class="blog-img">--}}
    {{--<a href="blog.html"><img src="{{asset('/')}}front/images/blog-10.jpg" class="img-responsive" alt="html5 bootstrap template"></a>--}}
    {{--</div>--}}
    {{--<div class="desc">--}}
    {{--<p class="meta">--}}
    {{--<span class="cat"><a href="#">Events</a></span>--}}
    {{--<span class="date">20 March 2018</span>--}}
    {{--<span class="pos">By <a href="#">Rich</a></span>--}}
    {{--</p>--}}
    {{--<h2><a href="blog.html">Recipe for your site</a></h2>--}}
    {{--<p>A small river named Duden flows by their place and supplies it with the necessary </p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="blog-entry">--}}
    {{--<div class="blog-img">--}}
    {{--<a href="blog.html"><img src="{{asset('/')}}front/images/blog-11.jpg" class="img-responsive" alt="html5 bootstrap template"></a>--}}
    {{--</div>--}}
    {{--<div class="desc">--}}
    {{--<p class="meta">--}}
    {{--<span class="cat"><a href="#">Events</a></span>--}}
    {{--<span class="date">20 March 2018</span>--}}
    {{--<span class="pos">By <a href="#">Rich</a></span>--}}
    {{--</p>--}}
    {{--<h2><a href="blog.html">Recipe for your site</a></h2>--}}
    {{--<p>A small river named Duden flows by their place and supplies it with the necessary </p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row row-pb-md">--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="blog-entry">--}}
    {{--<div class="blog-img">--}}
    {{--<a href="blog.html"><img src="{{asset('/')}}front/images/blog-12.jpg" class="img-responsive" alt="html5 bootstrap template"></a>--}}
    {{--</div>--}}
    {{--<div class="desc">--}}
    {{--<p class="meta">--}}
    {{--<span class="cat"><a href="#">Events</a></span>--}}
    {{--<span class="date">20 March 2018</span>--}}
    {{--<span class="pos">By <a href="#">Rich</a></span>--}}
    {{--</p>--}}
    {{--<h2><a href="blog.html">Recipe for your site</a></h2>--}}
    {{--<p>A small river named Duden flows by their place and supplies it with the necessary </p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-8">--}}
    {{--<div class="blog-entry">--}}
    {{--<div class="blog-img">--}}
    {{--<a href="blog.html"><img src="{{asset('/')}}front/images/blog-13.jpg" class="img-responsive" alt="html5 bootstrap template"></a>--}}
    {{--</div>--}}
    {{--<div class="desc">--}}
    {{--<p class="meta">--}}
    {{--<span class="cat"><a href="#">Events</a></span>--}}
    {{--<span class="date">20 March 2018</span>--}}
    {{--<span class="pos">By <a href="#">Rich</a></span>--}}
    {{--</p>--}}
    {{--<h2><a href="blog.html">Recipe for your site</a></h2>--}}
    {{--<p>A small river named Duden flows by their place and supplies it with the necessary </p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    {{--//previous--}}
    {{--<section id="content">--}}
    {{----}}
    {{--<br/>--}}
    {{--<br/>--}}
    {{--<div class="container">--}}
    {{--<!-- Portfolio Projects -->--}}
    {{--<div class="row">--}}
    {{--<div class="span12">--}}
    {{--<h4 class="heading">Some of recent <strong>works</strong></h4>--}}
    {{--<div class="row">--}}
    {{--<section id="projects">--}}
    {{--<ul id="thumbs" class="portfolio">--}}
    {{--@php($i=0)--}}
    {{--@if($projects)--}}
    {{--@foreach($projects as $project)--}}
    {{--<li class="item-thumbs span4 design" data-id="id-{{$i++}}" data-type="web">--}}
    {{--<a class="hover-wrap fancybox" data-fancybox-group="gallery"--}}
    {{--title="{{$project->title}}" href="{{asset($project->large_image)}}">--}}
    {{--<span class="overlay-img"></span>--}}
    {{--<span class="overlay-img-thumb font-icon-plus"></span>--}}
    {{--</a>--}}
    {{--<img src="{{asset($project->image)}}" alt="{{$project->description}}">--}}
    {{--</li>--}}

    {{--@endforeach--}}
    {{--@else--}}
    {{--<h1>Give Some Project/Work from admin site after Login</h1>--}}
    {{--@endif--}}


    {{--</ul>--}}

    {{--</section>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- End Portfolio Projects -->--}}
    {{--<!-- divider -->--}}
    {{--<div class="row">--}}
    {{--<div class="span12">--}}
    {{--<div class="solidline">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!-- end divider -->--}}
    {{--<div class="row">--}}

    {{--<div class="span12">--}}
    {{--<h4>Our Students who got Chance in<strong> NURSING!</strong></h4>--}}
    {{--<ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">--}}
    {{--@foreach($students as $student)--}}
    {{--<li>--}}
    {{--<a href="#">--}}
    {{--<img src="{{asset($student->image)}}" class="client-logo" alt=""/>--}}
    {{--</a>--}}
    {{--<small  style="color: #9E001D">{{$student->name}} ({{$student->roll}})--}}
    {{--</small>--}}
    {{--</li>--}}
    {{--@endforeach--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    {{--<section id="bottom">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="span12">--}}
    {{--<div class="aligncenter">--}}
    {{--<div id="twitter-wrapper">--}}
    {{--<div id="twitter">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
@endsection