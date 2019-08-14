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
        <br/>
        @foreach($text as $row)
            <p>
                <marquee><h3 class="mydanger">{{$row->text}}</h3></marquee>
            </p>
        @endforeach
        <header id="myHiro">
            <div  class="container ">
                <div class="row">
                    <div >
                        <div class="span12 ">
                            @php($i=1)
                            @foreach($sliders as $slider)
                                <div class=" nivo-caption" id="caption-{{$i++}}">
                                    <div>
                                        <h2 >{{$slider->first_title}} <strong>{{$slider->last_title}}</strong></h2>
                                        <p  class="myHider2">

                                            {!!$slider->description!!}

                                        </p>
                                        <a href="#" class="myHider3 btn btn-theme">Read More</a>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                    </div>

                </div>
            </div>
        </header>

    </div>
    <!-- end slider -->
</section>

<script type="text/javascript">




    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('#header').addClass("sticky_header");
        } else {
            $('#header').removeClass("sticky_header");
        }
    });


    $('#contact').click(function () {
        $('#contact').addClass("active");
    })
</script>

