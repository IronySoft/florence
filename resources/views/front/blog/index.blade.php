
@extends('front.master')
@section('body')
    {{--<section id="inner-headline">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="span4">--}}
                    {{--<div class="inner-heading">--}}
                        {{--<h2>Blog left sidebar</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="span8">--}}
                    {{--<ul class="breadcrumb">--}}
                        {{--<li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>--}}
                        {{--<li><a href="#">Blog</a><i class="icon-angle-right"></i></li>--}}
                        {{--<li class="active">Blog with left sidebar</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <article>
                        <div class="row">
                            @foreach($blogs as $blog)

                            <div class="span8">
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h3><a href="#">{{$blog->title}}</a></h3>
                                    </div>
                                    <img src="{{asset($blog->image)}}" alt="" />
                                </div>
                                <p>
                                    {{$blog->description}}
                                </p>
                                <div class="bottom-article">
                                    <ul class="meta-post">
                                        <li><i class="icon-calendar"></i><a href="#"> {{$blog->created_at}}</a></li>
                                        <li><i class="icon-user"></i><a href="#">posted by: {{$blog->writer}}</a></li>
                                        <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                        <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                                    </ul>
                                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100006495202618" class="pull-right">Chat<i class="icon-angle-right"></i></a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </article>

                    <div id="pagination">
                        <span class="all">Page 1 of 3</span>
                        <span class="current">1</span>
                        <a href="#" class="inactive">2</a>
                        <a href="#" class="inactive">3</a>
                    </div>
                </div>
                <div class="span4">
                    <aside class="right-sidebar">
                        <div class="widget">
                            <form class="form-search">
                                <input placeholder="Type something" type="text" class="input-medium search-query">
                                <button type="submit" class="btn btn-square btn-theme">Search</button>
                            </form>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Categories</h5>
                            <ul class="cat">
                                <li><i class="icon-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
                                <li><i class="icon-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
                                <li><i class="icon-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
                                <li><i class="icon-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
                                <li><i class="icon-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Latest posts</h5>
                            <ul class="recent">
                                <li>
                                    <img src="{{asset('/')}}front/img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
                                    <h6><a href="#">Lorem ipsum dolor sit</a></h6>
                                    <p>
                                        Mazim alienum appellantur eu cu ullum officiis pro pri
                                    </p>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('/')}}front/img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
                                    <h6><a href="#">Maiorum ponderum eum</a></h6>
                                    <p>
                                        Mazim alienum appellantur eu cu ullum officiis pro pri
                                    </p>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('/')}}front/img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
                                    <h6><a href="#">Et mei iusto dolorum</a></h6>
                                    <p>
                                        Mazim alienum appellantur eu cu ullum officiis pro pri
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Popular tags</h5>
                            <ul class="tags">
                                <li><a href="#">Web design</a></li>
                                <li><a href="#">Trends</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Internet</a></li>
                                <li><a href="#">Tutorial</a></li>
                                <li><a href="#">Development</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection

