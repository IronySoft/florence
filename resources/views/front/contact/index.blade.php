@extends('front.master')
@section('title', 'Contact | Florence Nursing Center')
@section('body')
    <div id="colorlib-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Chawkbazar%2C%20Chittagong+(Florence%20Nursing%20Coaching%20Center)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed"
                            width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>


                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-12">
                            <h2 class="heading-2">Get In Touch</h2>
                            <form action="#">
                                <div class="row form-group">
                                    <div class="col-md-6">
                                        <label class="text text-info" for="fname">First Name</label>
                                        <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lname">Last Name</label>
                                        <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" class="form-control"
                                               placeholder="Your email address">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="subject">Subject</label>
                                        <input type="text" id="subject" class="form-control"
                                               placeholder="Your subject of this message">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                                  placeholder="Say something about us"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>



                @php($i=1)
                    @foreach($branches as $row)
                            <div class="col-md-6">
                                <div class="blog-entry">
                                    <div class="blog-img">
                                        <a href="blog.html">

                                            <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Chawkbazar%2C%20Chittagong+(Florence%20Nursing%20Coaching%20Center)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed"
                                                    width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

                                        </a>
                                    </div>
                                    <h1 class="text text-success ">Branch- {{$i++}} Contact Information</h1>
                                    <h3>Phone: {{$row->phone1}}, {{$row->phone1}}</h3>
                                    <h4>Email: {{$row->email}}</h4>
                                    <p class="text text-warning">{!! $row->address !!}</p>

                                </div>
                            </div>

                    @endforeach


                </div>



            </div>
        </div>




@endsection
