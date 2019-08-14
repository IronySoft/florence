
<div>

    <header id="header" class="big_header">

        <div   class="container ">
            <!-- hidden top area toggle link -->

            <div id="header-hidden-link">
                <a href="#" class="toggle-link btn btn-theme btn-large e_shake" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
            </div>
            <!-- end toggle link -->
            <div class="row nomargin">
                <div class="span12">
                    <div class="headnav">

                    </div>
                    <!-- Signup Modal -->
                    <!-- end reset modal -->
                </div>
            </div>
            <div class="row " >
                <div class="span4">
                    <div class="logo">
                        <a href="{{route('/')}}"><img src="{{asset('/')}}front/img/logo.png" alt="" class="logo" /></a>
                        <h1><b>Nursing Admission Coaching Center</b></h1>
                    </div>
                </div>
                <div class="span8">
                    <div class="navbar navbar-static-top">
                        <div class="navigation">
                            <b class="text text-bold">
                                <nav>
                                    <ul class="nav topnav">

                                        <li ><a  href="{{route('/')}}"><b >Home</b></a></li>

                                        <li><a href="{{route('view.blog.index')}}"><b>Blog</b></a></li>

                                        <li><a href="{{route('gallery.index')}}"><b>Gallery</b></a></li>




                                        <li><a href="{{route('view.course.index')}}"><b>Course</b></a></li>
                                        <li class="dropdown">
                                            <a href="#"><b>Publication</b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('view.notice.index')}}">Guide & Question Book</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#"><b>Admission</b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('view.notice.index')}}">Notice Board</a></li>
                                                <li><a href="{{route('admission.index')}}">Why Nursing Admission?</a></li>
                                                <li><a href="{{route('admission.create')}}">Online Admission</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('view.testimonial.index')}}"><b>Testimonial</b></a>
                                        </li>

                                        <li>
                                            <a href="{{route('view.about.index')}}"><b>About-Us</b></a>
                                        </li>
                                        <li id="contact" >
                                            <a href="{{route('contact.index')}}"><b>Contact</b></a>
                                        </li>
                                    </ul>
                                </nav>
                            </b>

                        </div>
                        <!-- end navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<script type="text/javascript">


    // for(var i=1;i<=4;i++){
    //     $("#menu"+i).hover(function(){
    //         $(this).css("background-color", "#FDFE02");
    //     }, function(){
    //         $(this).css("background-color", "#FFFFFF");
    //     });
    //
    // }



    $(window).scroll(function()
    {
        if ($(this).scrollTop() > 1)
        {
            $('#header').addClass("sticky_header");
            $('#sarjis').css("display",'none');
        }
        else
        {
            $('#header').removeClass("sticky_header");
        }
    });
    //
    //
    // $('#contact').click(function () {
    //     $('#contact').addClass("active");
    // })
</script>

