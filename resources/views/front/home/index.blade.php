@extends('front.master')
@section('title', 'Home | Florence Nursing Center')
@section('body')

    <section id="content">
        @include('front.includes.slider.slider')
        <div class="container">
            <!-- Portfolio Projects -->
            <div class="row">
                <div class="span12">
                    <h4 class="heading">Some of recent <strong>works</strong></h4>
                    <div class="row">
                        <section id="projects">
                            <ul id="thumbs" class="portfolio">
                                @php($i=0)
                                @if($projects)
                                    @foreach($projects as $project)
                                        <li class="item-thumbs span3 design" data-id="id-{{$i++}}" data-type="web">
                                            <a class="hover-wrap fancybox" data-fancybox-group="gallery"
                                               title="{{$project->title}}" href="{{asset($project->large_image)}}">
                                                <span class="overlay-img"></span>
                                                <span class="overlay-img-thumb font-icon-plus"></span>
                                            </a>
                                            <img src="{{asset($project->image)}}" alt="{{$project->description}}">
                                        </li>

                                    @endforeach
                                @else
                                    <h1>Give Some Project/Work from admin site after Login</h1>
                                @endif


                            </ul>

                        </section>
                    </div>
                </div>
            </div>
            <!-- End Portfolio Projects -->
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
                    <h4>Our Students who got Chance in<strong> NURSING!</strong></h4>
                    <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
                        @foreach($students as $student)
                            <li>
                                <a href="#">
                                    <img src="{{asset($student->image)}}" class="client-logo" alt=""/>
                                </a>
                                <small  style="color: #9E001D">{{$student->name}} ({{$student->roll}})
                                </small>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="bottom">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="aligncenter">
                        <div id="twitter-wrapper">
                            <div id="twitter">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection