@extends('front.master')
@section('title', 'Notice | Florence Nursing Center')
@section('body')
    <section id="inner-headline">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            @foreach($notices as $notice)
            <div class="row">
                <div class="span8">

                        <article>
                            <div class="top-wrapper">
                                {{--<div class="post-heading">--}}
                                    {{--<h3><a href="#">{{$notice->title}}</a></h3>--}}
                                {{--</div>--}}
                                <!-- start flexslider -->
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <img src="{{asset($notice->image)}}" alt=""/>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </article>

                </div>
                <div class="span4">
                    <aside class="right-sidebar">
                        <div class="widget">
                            <h5 class="widgetheading">{{$notice->title}}</h5>
                            <ul class="folio-detail">
                                <li><label>Price :</label>{{$notice->price}} tk.</li>
                                <li><label>প্রপ্তিস্থান :</label> {!!$notice->location  !!}</li>
                               </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Text widget</h5>
                            <p>
                                {!! $notice->description !!}
                            </p>
                        </div>
                    </aside>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection