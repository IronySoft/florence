<section id="featured">
    <!-- start slider -->
    <!-- Slider -->
    <div id="nivo-slider">
        <div class="nivo-slider">
            <!-- Slide #1 image -->
            @php($i=1)
            @foreach($sliders as $slider)
                <img src="{{asset($slider->image)}}" alt="" title="#caption-{{$i++}}"/>
            @endforeach

        </div>
        @foreach($text as $row)
            <p>
                <marquee><h1 class="mydanger">{{$row->text}}</h1></marquee>
            </p>
        @endforeach
        <div class="container ">
            <div class="row">
                <div class="span12 ">
                    @php($i=1)
                    @foreach($sliders as $slider)
                        <div class="nivo-caption" id="caption-{{$i++}}">
                            <div>
                                <h2>{{$slider->first_title}} <strong>{{$slider->last_title}}</strong></h2>
                                <p>
                                    {{$slider->description}}
                                </p>
                                <a href="#" class="btn btn-theme">Read More</a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <!-- end slider -->
</section>
