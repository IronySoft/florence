@extends('front.master')
@section('title', 'Notice | Florence Nursing Center')
@section('body')
    <div id="colorlib-container">
        <div class="container">
            <div class="row">
                <div class="col-md-9 content">
                    @foreach($courses as $row)
                    <div class="row row-pb-lg">
                        <div class="col-md-12">
                            <div class="blog-entry">

                                <div class="desc">
                                    <p>
                                        {!! $row->description !!}
                                    </p>
                                    <p class="meta">
                                        <span class="cat"><a href="#">Events</a></span>
                                        <span class="date">20 March 2018</span>
                                        <span class="pos">By <a href="#">Rich</a></span>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row row-pb-lg">
                        <div class="col-md-12">
                            <h2 class="heading-2">23 Comments</h2>
                            <div class="review">
                                <div class="user-img" style="background-image: url({{asset('/')}}front/images/person1.jpg)"></div>
                                <div class="desc">
                                    <h4>
                                        <span class="text-left">Jacob Webb</span>
                                        <span class="text-right">24 March 2018</span>
                                    </h4>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                                        skyline of her hometown Bookmarksgrov</p>
                                    <p class="star">
                                        <span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="review">
                                <div class="user-img" style="background-image: url({{asset('/')}}front/images/person2.jpg)"></div>
                                <div class="desc">
                                    <h4>
                                        <span class="text-left">Jacob Webb</span>
                                        <span class="text-right">24 March 2018</span>
                                    </h4>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                                        skyline of her hometown Bookmarksgrov</p>
                                    <p class="star">
                                        <span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                    </p>
                                </div>
                            </div>
                            <div class="review">
                                <div class="user-img" style="background-image: url({{asset('/')}}front/images/person3.jpg)"></div>
                                <div class="desc">
                                    <h4>
                                        <span class="text-left">Jacob Webb</span>
                                        <span class="text-right">24 March 2018</span>
                                    </h4>
                                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                                        skyline of her hometown Bookmarksgrov</p>
                                    <p class="star">
                                        <span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="heading-2">Say something</h2>
                            <form action="#">
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <!-- <label for="fname">First Name</label> -->
                                        <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <label for="lname">Last Name</label> -->
                                        <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="email">Email</label> -->
                                        <input type="text" id="email" class="form-control" placeholder="Your email address">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="subject">Subject</label> -->
                                        <input type="text" id="subject" class="form-control"
                                               placeholder="Your subject of this message">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="message">Message</label> -->
                                        <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                                  placeholder="Say something about us"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar">
                        <div class="side">
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
                                <button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
                            </div>
                        </div>

                        <div class="side">
                            <h2 class="sidebar-heading">Course Name</h2>
                            <div class="f-blog">
                                <a href="blog.html" class="blog-img"
                                   style="background-image: url({{asset('/')}}front/images/blog-1.jpg);">
                                </a>
                                <div class="desc">
                                    <h3><a href="blog.html">Be a designer</a></h3>
                                    <p class="admin"><span>25 March 2018</span></p>
                                </div>
                            </div>
                            <div class="f-blog">
                                <a href="blog.html" class="blog-img"
                                   style="background-image: url({{asset('/')}}front/images/blog-2.jpg);">
                                </a>
                                <div class="desc">
                                    <h3><a href="blog.html">How to build website</a></h3>
                                    <p class="admin"><span>24 March 2018</span></p>
                                </div>
                            </div>
                            <div class="f-blog">
                                <a href="blog.html" class="blog-img"
                                   style="background-image: url({{asset('/')}}front/images/blog-3.jpg);">
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
                                <a href="#" class="instagram text-center"
                                   style="background-image: url({{asset('/')}}front/images/gallery-1.jpg);">
                                </a>
                                <a href="#" class="instagram text-center"
                                   style="background-image: url({{asset('/')}}front/images/gallery-2.jpg);">
                                </a>
                                <a href="#" class="instagram text-center"
                                   style="background-image: url({{asset('/')}}front/images/gallery-3.jpg);">
                                </a>
                                <a href="#" class="instagram text-center"
                                   style="background-image: url({{asset('/')}}front/images/gallery-4.jpg);">
                                </a>
                                <a href="#" class="instagram text-center"
                                   style="background-image: url({{asset('/')}}front/images/gallery-5.jpg);">
                                </a>
                                <a href="#" class="instagram text-center"
                                   style="background-image: url({{asset('/')}}front/images/gallery-6.jpg);">
                                </a>
                                <a href="#" class="instagram text-center"
                                   style="background-image: url({{asset('/')}}front/images/gallery-7.jpg);">
                                </a>
                                <a href="#" class="instagram text-center"
                                   style="background-image: url({{asset('/')}}front/images/gallery-8.jpg);">
                                </a>
                            </div>
                        </div>
                        <div class="side">
                            <div class="form-group">
                                <input type="text" class="form-control form-email text-center" id="email"
                                       placeholder="Enter your email">
                                <button type="submit" class="btn btn-primary btn-subscribe">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection