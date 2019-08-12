@extends('front.master')
@section('body')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Pricing boxes</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="#">Pages</a><i class="icon-angle-right"></i></li>
                        <li class="active">Pricing boxes</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h4>Available <strong>Course Name</strong></h4>
                </div>
                @foreach($courses as $course)

                    <div class="span4">
                        @if(count($course->contents)>1)
                            <div class="pricing-box-alt special">
                                @else
                                    <div class="pricing-box-alt">
                                        @endif
                                        <div class="pricing-heading">
                                            <h3>{{$course->first_name}} <strong>{{$course->last_name}}</strong></h3>
                                        </div>
                                        <div class="pricing-terms">
                                            <h6>Taka {{$course->fee * $course->month_number}} / Months
                                                ({{$course->month_number}}
                                                )</h6>
                                        </div>
                                        <div class="pricing-content">
                                            <ul>
                                                @if($course->contents)
                                                    @foreach($course->contents as $row)
                                                        <li><i class="icon-ok"></i> {{$row->name}}</li>
                                                    @endforeach
                                                @endif

                                                @if(count($course->contents)<1)
                                                    <li><i class="icon-circle-arrow-down"></i> No contents are available
                                                        for
                                                        this course
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>

                                        @if(count($course->contents)>1)
                                            <div class="pricing-action">
                                                <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i>
                                                    Enroll
                                                    Now</a>
                                            </div>
                                        @else
                                            <div  class="pricing-action">
                                                <a disabled href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i>
                                                    Un-Available</a>
                                            </div>
                                        @endif

                                    </div>
                            </div>
                            @endforeach

                            <div class="span4">
                                <div class="pricing-box-alt special">
                                    <div class="pricing-heading">
                                        <h3>Good <strong>Choice</strong></h3>
                                    </div>
                                    <div class="pricing-terms">
                                        <h6>&#36;25.00 / Month</h6>
                                    </div>
                                    <div class="pricing-content">
                                        <ul>
                                            <li><i class="icon-ok"></i> 100 applications</li>
                                            <li><i class="icon-ok"></i> 24x7 support available</li>
                                            <li><i class="icon-ok"></i> No hidden fees</li>
                                            <li><i class="icon-ok"></i> Free 30-days trial</li>
                                            <li><i class="icon-ok"></i> Stop anytime easily</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-action">
                                        <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register
                                            now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="pricing-box-alt">
                                    <div class="pricing-heading">
                                        <h3>Just <strong>Happy</strong></h3>
                                    </div>
                                    <div class="pricing-terms">
                                        <h6>&#36;35.00 / Month</h6>
                                    </div>
                                    <div class="pricing-content">
                                        <ul>
                                            <li><i class="icon-ok"></i> 100 applications</li>
                                            <li><i class="icon-ok"></i> 24x7 support available</li>
                                            <li><i class="icon-ok"></i> No hidden fees</li>
                                            <li><i class="icon-ok"></i> Free 30-days trial</li>
                                            <li><i class="icon-ok"></i> Stop anytime easily</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-action">
                                        <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register
                                            now</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- divider -->
                    <div class="row">
                        <div class="span12">
                            <div class="solidline">
                            </div>
                        </div>
                    </div>
                    <!-- end divider -->
                    <div class="row">
                        <div class="span12">
                            <h4>Example on <strong>4 columns</strong></h4>
                        </div>
                        <div class="span3">
                            <div class="pricing-box-alt">
                                <div class="pricing-heading">
                                    <h3>Very <strong>Basic</strong></h3>
                                </div>
                                <div class="pricing-terms">
                                    <h6>&#36;15.00 / Month</h6>
                                </div>
                                <div class="pricing-content">
                                    <ul>
                                        <li><i class="icon-ok"></i> 100 applications</li>
                                        <li><i class="icon-ok"></i> 24x7 support available</li>
                                        <li><i class="icon-ok"></i> No hidden fees</li>
                                        <li><i class="icon-ok"></i> Free 30-days trial</li>
                                        <li><i class="icon-ok"></i> Stop anytime easily</li>
                                    </ul>
                                </div>
                                <div class="pricing-action">
                                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="pricing-box-alt">
                                <div class="pricing-heading">
                                    <h3>Simple <strong>Choice</strong></h3>
                                </div>
                                <div class="pricing-terms">
                                    <h6>&#36;20.00 / Month</h6>
                                </div>
                                <div class="pricing-content">
                                    <ul>
                                        <li><i class="icon-ok"></i> 100 applications</li>
                                        <li><i class="icon-ok"></i> 24x7 support available</li>
                                        <li><i class="icon-ok"></i> No hidden fees</li>
                                        <li><i class="icon-ok"></i> Free 30-days trial</li>
                                        <li><i class="icon-ok"></i> Stop anytime easily</li>
                                    </ul>
                                </div>
                                <div class="pricing-action">
                                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="pricing-box-alt special">
                                <div class="pricing-heading">
                                    <h3>Special <strong>Choice</strong></h3>
                                </div>
                                <div class="pricing-terms">
                                    <h6>&#36;15.00 / Month</h6>
                                </div>
                                <div class="pricing-content">
                                    <ul>
                                        <li><i class="icon-ok"></i> 100 applications</li>
                                        <li><i class="icon-ok"></i> 24x7 support available</li>
                                        <li><i class="icon-ok"></i> No hidden fees</li>
                                        <li><i class="icon-ok"></i> Free 30-days trial</li>
                                        <li><i class="icon-ok"></i> Stop anytime easily</li>
                                    </ul>
                                </div>
                                <div class="pricing-action">
                                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                                </div>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="pricing-box-alt">
                                <div class="pricing-heading">
                                    <h3>Just <strong>Happy</strong></h3>
                                </div>
                                <div class="pricing-terms">
                                    <h6>&#36;15.00 / Month</h6>
                                </div>
                                <div class="pricing-content">
                                    <ul>
                                        <li><i class="icon-ok"></i> 100 applications</li>
                                        <li><i class="icon-ok"></i> 24x7 support available</li>
                                        <li><i class="icon-ok"></i> No hidden fees</li>
                                        <li><i class="icon-ok"></i> Free 30-days trial</li>
                                        <li><i class="icon-ok"></i> Stop anytime easily</li>
                                    </ul>
                                </div>
                                <div class="pricing-action">
                                    <a href="#" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Register now</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </section>


@endsection