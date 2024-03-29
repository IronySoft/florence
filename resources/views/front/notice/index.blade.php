@extends('front.master')
@section('title', 'Notice | Florence Nursing Center')
@section('body')


    <div id="colorlib-container">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="row row-pb-md">
                        @foreach($notices as $row)
                            <div class="col-md-6">
                                <div class="blog-entry">
                                    <div class="blog-img">
                                        <a href="blog.html"><img src="{{asset('/')}}front/images/blog-13.jpg"
                                                                 class="img-responsive" alt="html5 bootstrap template"></a>
                                    </div>
                                    <div class="desc">
                                        <p class="meta">
                                            <span class="cat"><a href="#">Events</a></span>
                                            <span class="date">20 March 2018</span>
                                            <span class="pos">By <a href="#">Rich</a></span>
                                        </p>
                                        <h2><a href="blog.html">{{$row->id}}</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary </p>
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
        </div>
    </div>
@endsection