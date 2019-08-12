@extends('front.master')
@section('body')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Testimonials</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">Pages</a><i class="icon-angle-right"></i></li>
                        <li class="active">Testimonials</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row marginbot30">
                <div class="span12">
                    <h4 class="heading"><strong>Client</strong> Testimonials চেনা পথের বহুদূরে...<span></span></h4>
                    <div class="row">

                        @foreach($testimonials as $testimonial)
                            <div class="span6">
                                <div class="wrapper">
                                    <div class="testimonial">
                                        <p class="text">
                                            <i class="icon-quote-left icon-48"></i>
                                            {{$testimonial->speech}}
                                        </p>
                                        <div class="author">
                                            <img src="{{asset($testimonial->image)}}"
                                                 class="img-circle bordered" alt=""/>
                                            <p class="name">
                                                {{$testimonial->author_name}}
                                            </p>
                                            <span class="info">{{$testimonial->designation}} <a
                                                        href="#">visit site</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection