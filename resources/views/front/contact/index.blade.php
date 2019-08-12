
@extends('front.master')
@section('body')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Get in touch</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">

        {{--<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Chawkbazar%2C%20Chittagong+(Florence%20Nursing%20Coaching%20Center)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">gps coordinates</a></iframe></div><br />--}}
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h1 class="text text-success">{{Session::get('message')}}</h1>
                    <h4>Get in touch with us by filling <strong>contact form below</strong></h4>

                    <form action="{{route('contact.store')}}" method="post" role="form" class="contactForm">

                        @csrf

                        <div class="row">
                            <div class="span4 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <span class="text-danger">{{$errors->has('name')? $errors->First('name'): ''}}</span>

                            </div>
                            <div class="span4 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <span class="text-danger">{{$errors->has('email')? $errors->First('email'): ''}}</span>

                            </div>
                            <div class="span4 form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <span class="text-danger">{{$errors->has('subject')? $errors->First('subject'): ''}}</span>

                            </div>
                            <div class="span12 margintop10 form-group">
                                <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <span class="text-danger">{{$errors->has('message')? $errors->First('message'): ''}}</span>
                                <p class="text-center">
                                    <button class="btn btn-large btn-theme margintop10" type="submit">Submit message</button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Chawkbazar%2C%20Chittagong+(Florence%20Nursing%20Coaching%20Center)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

    </section>


@endsection
