@extends('front.master')
@section('title', 'Blog | Florence Nursing Center')
@section('body')


    <div id="colorlib-container">
        <div class="container">
            <div class="row">

                <div class="col-md-9 content">
                    @foreach($blogs as $blog)

                        @if(str_word_count($blog->title)<4)
                            <div class="col-md-4">
                                <div class="blog-entry">
                                    <div class="blog-img">
                                        <a href="blog.html"><img src="{{asset('/')}}front/images/blog-1.jpg"
                                                                 class="img-responsive"
                                                                 alt="html5 bootstrap template"></a>
                                    </div>
                                    <div class="desc">
                                        <p class="meta">
                                            <span class="cat"><a href="#">Events</a></span>
                                            <span class="date">20 March 2018</span>
                                            <span class="pos">By <a href="#">Rich</a></span>
                                        </p>
                                        <h2><a href="blog.html">{{$blog->title}}</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary </p>
                                    </div>
                                </div>
                            </div>

                        @else
                            <div class="col-md-4">
                                <div class="blog-entry">
                                    <div class="blog-slider">
                                        <div class="owl-carousel">
                                            <div class="item">
                                                <a href="blog.html" class="image-popup-link"><img
                                                            src="{{asset('/')}}front/images/blog-3.jpg"
                                                            class="img-responsive" alt="html5 bootstrap template"></a>
                                            </div>
                                            <div class="item">
                                                <a href="blog.html" class="image-popup-link"><img
                                                            src="{{asset('/')}}front/images/blog-4.jpg"
                                                            class="img-responsive" alt="html5 bootstrap template"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <p class="meta">
                                            <span class="cat"><a href="#">Travel</a></span>
                                            <span class="date">20 March 2018</span>
                                            <span class="pos">By <a href="#">Rich</a></span>
                                        </p>
                                        <h2><a href="blog.html">{{$blog->title}}</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach

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
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="side">
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Enter anything to search...">
                                <button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
                            </div>
                        </div>
                        <div class="side">
                            <h2 class="sidebar-heading">Categories</h2>
                            <p>
                            <ul class="category">
                                <li><a href="#"><i class="icon-check"></i> Home</a></li>
                                <li><a href="#"><i class="icon-check"></i> About Me</a></li>
                                <li><a href="#"><i class="icon-check"></i> Blog</a></li>
                                <li><a href="#"><i class="icon-check"></i> Travel</a></li>
                                <li><a href="#"><i class="icon-check"></i> Lifestyle</a></li>
                                <li><a href="#"><i class="icon-check"></i> Fashion</a></li>
                                <li><a href="#"><i class="icon-check"></i> Health</a></li>
                            </ul>
                            </p>
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
                        <div class="side">
                            <h2 class="sidebar-heading">Instagram</h2>
                            <div class="instagram-entry">
                                <a href="#" class="instagram text-center" style="background-image: url({{asset('/')}}front/images/gallery-1.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url({{asset('/')}}front/images/gallery-2.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url({{asset('/')}}front/images/gallery-3.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url({{asset('/')}}front/images/gallery-4.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url({{asset('/')}}front/images/gallery-5.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url({{asset('/')}}front/images/gallery-6.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url({{asset('/')}}front/images/gallery-7.jpg);">
                                </a>
                                <a href="#" class="instagram text-center" style="background-image: url({{asset('/')}}front/images/gallery-8.jpg);">
                                </a>
                            </div>
                        </div>
                        <div class="side">
                            <div class="form-group">
                                <input type="text" class="form-control form-email text-center" id="email" placeholder="Enter your email">
                                <button type="submit" class="btn btn-primary btn-subscribe">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>




                </div>
            </div>
        </div>
    </div>

    {{--<section id="inner-headline">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    {{--<section id="content">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="span8">--}}
    {{--<article>--}}
    {{--<div class="row">--}}
    {{--@foreach($blogs as $blog)--}}

    {{--<div class="span8">--}}
    {{--<div class="post-image">--}}
    {{--<div class="post-heading">--}}
    {{--<h3><a href="#">{{$blog->title}}</a></h3>--}}
    {{--</div>--}}
    {{--<img src="{{asset($blog->image)}}" alt=""/>--}}
    {{--</div>--}}
    {{--<p>--}}
    {{--{!! $blog->description !!}--}}
    {{--</p>--}}
    {{--<div class="bottom-article">--}}
    {{--<ul class="meta-post">--}}
    {{--<li><i class="icon-calendar"></i><a href="#"> {{$blog->created_at}}</a></li>--}}
    {{--<li><i class="icon-user"></i><a href="#">posted by: {{$blog->writer}}</a>--}}
    {{--</li>--}}
    {{--<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>--}}
    {{--<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>--}}
    {{--</ul>--}}
    {{--<a target="_blank"--}}
    {{--href="https://www.facebook.com/profile.php?id=100006495202618"--}}
    {{--class="pull-right">Chat<i class="icon-angle-right"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}

    {{--</div>--}}
    {{--</article>--}}

    {{--<div id="pagination">--}}
    {{--<span class="all">Page 1 of 3</span>--}}
    {{--<span class="current">1</span>--}}
    {{--<a href="#" class="inactive">2</a>--}}
    {{--<a href="#" class="inactive">3</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="span4">--}}
    {{--<aside class="right-sidebar">--}}
    {{--<div class="widget">--}}
    {{--<form method="post" action="{{route('blog.store')}}" class="form-search">--}}
    {{--@csrf--}}
    {{--<input placeholder="Type something" type="text" class="input-medium search-query">--}}
    {{--<button type="submit" class="btn btn-square btn-theme">Search</button>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--<div class="widget">--}}
    {{--<h5 class="widgetheading">Favourite Post</h5>--}}
    {{--<ul class="cat">--}}
    {{--@foreach($headLines as $headLine)--}}
    {{--<li><i class="icon-angle-right"></i><a--}}
    {{--href="#">{{$headLine->title}}</a><span> (20)</span></li>--}}
    {{--@endforeach--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="widget">--}}
    {{--<h5 class="widgetheading">Latest posts</h5>--}}
    {{--<ul class="recent">--}}

    {{--@foreach($blogs as $blog)--}}
    {{--<li>--}}
    {{--<img src="{{asset($blog->image)}}"--}}
    {{--class="pull-left" alt="" width="65" height="65"/>--}}
    {{--<h6><a href="#">{{str_limit($blog->title ,30)}}</a></h6>--}}
    {{--<p>--}}
    {{--{!! str_limit($blog->description ,40) !!}--}}
    {{--</p>--}}
    {{--</li>--}}
    {{--@endforeach--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="widget">--}}
    {{--<h5 class="widgetheading">Older posts</h5>--}}
    {{--<ul class="recent">--}}

    {{--@foreach($olderBlogs as $blog)--}}
    {{--<li>--}}
    {{--<img src="{{asset($blog->image)}}"--}}
    {{--class="pull-left" alt="" width="65" height="65"/>--}}
    {{--<h6><a href="#">{{str_limit($blog->title ,30)}}</a></h6>--}}
    {{--<p>--}}
    {{--{!! str_limit($blog->description ,40) !!}--}}
    {{--</p>--}}
    {{--</li>--}}
    {{--@endforeach--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="widget">--}}
    {{--<h5 class="widgetheading">Popular Name</h5>--}}
    {{--<ul class="tags">--}}
    {{--<li><a href="#">Web design</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</aside>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
@endsection

