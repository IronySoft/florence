@extends('front.master')
@section('title', 'Blog | Florence Nursing Center')
@section('body')
    <section id="inner-headline">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
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
                                        <img src="{{asset($blog->image)}}" alt=""/>
                                    </div>
                                    <p>
                                     {!! $blog->description !!}
                                    </p>
                                    <div class="bottom-article">
                                        <ul class="meta-post">
                                            <li><i class="icon-calendar"></i><a href="#"> {{$blog->created_at}}</a></li>
                                            <li><i class="icon-user"></i><a href="#">posted by: {{$blog->writer}}</a>
                                            </li>
                                            <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                            <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                                        </ul>
                                        <a target="_blank"
                                           href="https://www.facebook.com/profile.php?id=100006495202618"
                                           class="pull-right">Chat<i class="icon-angle-right"></i></a>
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
                            <form method="post" action="{{route('blog.store')}}" class="form-search">
                                @csrf
                                <input placeholder="Type something" type="text" class="input-medium search-query">
                                <button type="submit" class="btn btn-square btn-theme">Search</button>
                            </form>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Favourite Post</h5>
                            <ul class="cat">
                                @foreach($headLines as $headLine)
                                    <li><i class="icon-angle-right"></i><a
                                                href="#">{{$headLine->title}}</a><span> (20)</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Latest posts</h5>
                            <ul class="recent">

                                @foreach($blogs as $blog)
                                    <li>
                                        <img src="{{asset($blog->image)}}"
                                             class="pull-left" alt="" width="65" height="65"/>
                                        <h6><a href="#">{{str_limit($blog->title ,30)}}</a></h6>
                                        <p>
                                            {!! str_limit($blog->description ,40) !!}
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Older posts</h5>
                            <ul class="recent">

                                @foreach($olderBlogs as $blog)
                                    <li>
                                        <img src="{{asset($blog->image)}}"
                                             class="pull-left" alt="" width="65" height="65"/>
                                        <h6><a href="#">{{str_limit($blog->title ,30)}}</a></h6>
                                        <p>
                                            {!! str_limit($blog->description ,40) !!}
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Popular Name</h5>
                            <ul class="tags">
                                <li><a href="#">Web design</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection

