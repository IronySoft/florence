@extends('front.master')
@section('body')
    {{--<section id="inner-headline">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="span4">--}}
                    {{--<div class="inner-heading">--}}
                        {{--<h2>Post left sidebar</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="span8">--}}
                    {{--<ul class="breadcrumb">--}}
                        {{--<li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>--}}
                        {{--<li><a href="#">Blog</a><i class="icon-angle-right"></i></li>--}}
                        {{--<li class="active">Blog post left sidebar</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <aside class="left-sidebar">
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
                                    <img src="{{asset('/')}}front/img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" />
                                    <h6><a href="#">Maiorum ponderum eum</a></h6>
                                    <p>
                                        Mazim alienum appellantur eu cu ullum officiis pro pri
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('/')}}front/img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" />
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
                <div class="span8">
                    <article>
                        <div class="row">
                            <div class="span8">
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h3><a href="#">Example single post title here</a></h3>
                                    </div>
                                    <img src="{{asset('/')}}front/img/dummies/blog/img1.jpg" alt="" />
                                </div>
                                <p>
                                    Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius
                                    ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Dicam appetere ne qui, no has scripta appellantur. Mazim alienum appellantur eu cum, cu ullum officiis pro, pri at eius erat accusamus. Eos id
                                    hinc fierent indoctum, ad accusam consetetur voluptatibus sit. His at quod impedit. Eu zril quando perfecto mel, sed eu eros debet.
                                </p>
                                <blockquote>
                                    <i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, ei quod constituto qui. Summo labores expetendis ad quo, lorem luptatum et vis. No qui vidisse signiferumque...
                                </blockquote>
                                <p>
                                    Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed. Dicam appetere ne qui, no has scripta appellantur. Mazim alienum appellantur eu cum, cu ullum officiis pro, pri
                                    at eius erat accusamus.
                                </p>
                                <div class="bottom-article">
                                    <ul class="meta-post">
                                        <li><i class="icon-user"></i><a href="#"> Admin</a></li>
                                        <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                        <li><i class="icon-tags"></i><a href="#">Web design</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- author info -->
                    <div class="about-author">
                        <a href="#" class="thumbnail align-left"><img src="{{asset('/')}}front/img/avatar.png" alt="" /></a>
                        <h5><strong><a href="#">John doe</a></strong></h5>
                        <p>
                            Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper ad qui, est rebum nulla argumentum ei.
                        </p>
                    </div>
                    <div class="comment-area">
                        <h4>4 Comments</h4>
                        <div class="media">
                            <a href="#" class="thumbnail pull-left"><img src="{{asset('/')}}front/img/avatar.png" alt="" /></a>
                            <div class="media-body">
                                <div class="media-content">
                                    <h6><span>March 12, 2013</span> Karen medisson</h6>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <a href="#" class="align-right">Reply comment</a>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#" class="thumbnail pull-left"><img src="{{asset('/')}}front/img/avatar.png" alt="" /></a>
                            <div class="media-body">
                                <div class="media-content">
                                    <h6><span>March 12, 2013</span> Smith sanderson</h6>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <a href="#" class="align-right">Reply comment</a>
                                </div>
                                <div class="media">
                                    <a href="#" class="thumbnail pull-left"><img src="{{asset('/')}}front/img/avatar.png" alt="" /></a>
                                    <div class="media-body">
                                        <div class="media-content">
                                            <h6><span>March 12, 2013</span> Thomas guttenberg</h6>
                                            <p>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            </p>
                                            <a href="#" class="align-right">Reply comment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <a href="#" class="thumbnail pull-left"><img src="{{asset('/')}}front/img/avatar.png" alt="" /></a>
                            <div class="media-body">
                                <div class="media-content">
                                    <h6><span>March 12, 2013</span> Vicky lumora</h6>
                                    <p>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </p>
                                    <a href="#" class="align-right">Reply comment</a>
                                </div>
                            </div>
                        </div>
                        <h4>Leave your comment</h4>
                        <form id="commentform" action="#" method="post" name="comment-form">
                            <div class="row">
                                <div class="span4">
                                    <input type="text" placeholder="* Enter your full name" />
                                </div>
                                <div class="span4">
                                    <input type="text" placeholder="* Enter your email address" />
                                </div>
                                <div class="span4 margintop10">
                                    <input type="text" placeholder="Enter your website" />
                                </div>
                                <div class="span8 margintop10">
                                    <p>
                                        <textarea rows="12" class="input-block-level" placeholder="*Your comment here"></textarea>
                                    </p>
                                    <p>
                                        <button class="btn btn-theme margintop10" type="submit">Submit comment</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection