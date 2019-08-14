@extends('front.master')
@section('body')

    <section id="content">

        {{--<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Chawkbazar%2C%20Chittagong+(Florence%20Nursing%20Coaching%20Center)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">gps coordinates</a></iframe></div><br />--}}

        <section class="callaction">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="big-cta">
                            <div class="cta-text">
                                <h3 >We have <b>{{count($branches)}}</b> Branches in <span class="highlight"><strong>Chattogram & Dhaka</strong></span>
                                </h3>
                            </div>
                            <div class="cta floatright">
                                <a class="btn btn-large btn-theme btn-rounded" href="#">Visit our Branch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="row">
                        @php($i=1)
                        @foreach($branches as $branch)
                            <div id="address{{$i++}}" class="span6">
                                <div class="box aligncenter">
                                    <div class="aligncenter icon">
                                        <br/>
                                        <h6 class=" btn-theme"><b>{{$branch->title}}</b></h6>
                                    </div>
                                    <div class="text">

                                        <p>
                                            <b>
                                                {{$branch->address}} <br/>
                                                <i>{{$branch->phone1}},
                                                    {{$branch->phone2}}
                                                </i>
                                            </b>

                                        </p>
                                        <a href="#">Email: {{$branch->email}}</a> <br/> <br/>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Chawkbazar%2C%20Chittagong+(Florence%20Nursing%20Coaching%20Center)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed"
                width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

        <div class="container">
            <div class="row">


                <div class="span12">
                    <h1 class="text text-success">{{Session::get('message')}}</h1>
                    <h4 class="text text-danger">Get in touch with us by filling <strong>contact form below</strong>
                    </h4>

                    <form action="{{route('contact.store')}}" method="post" role="form" class="contactForm">

                        @csrf

                        <div class="row">
                            <div class="span4 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                <span class="text-danger">{{$errors->has('name')? $errors->First('name'): ''}}</span>

                            </div>
                            <div class="span4 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" data-rule="email"
                                       data-msg="Please enter a valid email"/>
                                <span class="text-danger">{{$errors->has('email')? $errors->First('email'): ''}}</span>

                            </div>
                            <div class="span4 form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject" data-rule="minlen:4"
                                       data-msg="Please enter at least 8 chars of subject"/>
                                <span class="text-danger">{{$errors->has('subject')? $errors->First('subject'): ''}}</span>

                            </div>
                            <div class="span12 margintop10 form-group">
                                <textarea class="form-control" name="message" rows="12" data-rule="required"
                                          data-msg="Please write something for us" placeholder="Message"></textarea>
                                <span class="text-danger">{{$errors->has('message')? $errors->First('message'): ''}}</span>
                                <p class="text-center">
                                    <button class="btn btn-large btn-theme margintop10" type="submit">Submit message
                                    </button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section>

<script>

    for(var i=1;i<=4;i++){
        $("#address"+i).hover(function(){
            $(this).css("background-color", "#FDFE02");
        }, function(){
            $(this).css("background-color", "#FFFFFF");
        });

    }

</script>

@endsection
