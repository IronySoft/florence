
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
                        <h1>Nursing Admission Coaching Center</h1>
                    </div>
                </div>
                <div class="span8">
                    <div class="navbar navbar-static-top">
                        <div class="navigation">
                            <b class="text text-bold">
                                <nav>
                                    <ul class="nav topnav">
                                        <li class="dropdown active">
                                            <a href="{{route('/')}}">Home <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('index.type2')}}">Homepage 2</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a href="#">Gallery <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('gallery.index')}}">Gallery 3 columns</a></li>
                                                <li><a href="portfolio-detail.html">Gallery details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Blog <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('view.blog.index')}}">Blog</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Admission<i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('admission.index')}}">Why Nursing Admission?</a></li>
                                                <li><a href="{{route('admission.create')}}">Online Admission</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Courses<i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('view.course.index')}}">Course 1</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route('view.testimonial.index')}}">Testimonial</a>
                                        </li>
                                        <li>
                                            <a href="{{route('view.about.index')}}">About Us</a>
                                        </li>
                                        <li id="contact" >
                                            <a href="{{route('contact.index')}}">Contact</a>
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
    $(window).scroll(function()
    {
        if ($(this).scrollTop() > 1)
        {
            $('#header').addClass("sticky_header");
        }
        else
        {
            $('#header').removeClass("sticky_header");
        }
    });


    $('#contact').click(function () {
        $('#contact').addClass("active");
    })
</script>

