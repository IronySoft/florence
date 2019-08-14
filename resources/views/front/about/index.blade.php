@extends('front.master')
@section('title', 'About | Florence Nursing Center')
@section('body')
    <section id="inner-headline">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <h2>Welcome to <strong style="color: #FD0000">Florence</strong></h2>
                    @foreach($abouts as $row)
                        <p>
                            {!! $row->description !!}
                        </p>
                    @endforeach

                </div>
                <div class="span6">
                    <!-- start flexslider -->
                    <div class="flexslider">
                        <ul class="slides">

                            @foreach($abouts as $row)
                                <li>
                                    <img src="{{asset($row->image)}}" alt=""/>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end flexslider -->
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
                    <h4>Talented peoples behind <b style="color: #FD0000">Florence</b></h4>
                </div>
                @foreach($florenceTeams as $row)
                    <div class="span3">
                        <img src="{{asset($row->image)}}" alt="" class="img-polaroid"/>
                        <div class="roles">
                            <p class="lead">
                                <strong>{{$row->name}}</strong>
                            </p>
                            <p>
                                {{$row->designation}}
                            </p>
                        </div>
                    </div>
                @endforeach

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
                <div class="span6">
                    <h4>More about us</h4>
                    <div class="accordion" id="accordion2">
                        @php($i=1)
                        @foreach($goals as $goal)
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                       href="#collapseOne">
                                        {{$i++}}. {{$goal->title}} </a>
                                </div>
                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p>
                                            {{$goal->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapseTwo">
                                    2. Work process </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Nihil suscipit posidonium eos id. An cetero fierent insolens mel, ex sit rebum
                                        falli erroribus. Ius in nemore dolorum officiis. Et vel harum dicant, vix eius
                                        persius an. Ex eam malis postea, erat nihil consulatu nam ea. Ex quem dolores
                                        euripidis eum,
                                        tempor aperiam voluptaria has ad. Ea est persecuti dissentiet voluptatibus, at
                                        illum malorum minimum usu eum aeterno tritani.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapseThree">
                                    3. Quality assurance </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Vel purto oportere principes ne, ut mel graeco omnesque. Habeo justo congue mei
                                        cu, eu est molestie sensibus, oratio tibique ad mei. Admodum consetetur cu eam,
                                        nec cu doming prompta inciderint, ne vim ceteros mnesarchum scriptorem. Ex eam
                                        malis postea,
                                        erat nihil consulatu nam ea. Ex quem dolores euripidis eum, tempor aperiam
                                        voluptaria has ad. Et vel harum dicant vix.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapseFour">
                                    4. What we can deliver </a>
                            </div>
                            <div id="collapseFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Diam alienum oporteat ad vis, latine intellegebat cu his. Ei eros dicam commodo
                                        duo, an assum meliore eam. In sed albucius dissentiet. Sit laudem graece malorum
                                        ne, at eam omnesque expetenda pertinacia, tale meliore vim ea. Dolore legere
                                        deleniti ius
                                        at, mea nibh discere perfecto ex. Mea ea iuvaret eripuit, eos no vivendo
                                        intellegat definiebas, patrioque eloquentiam eos et.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                   href="#collapseFour">
                                    4. What we can deliver </a>
                            </div>
                            <div id="collapseFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <p>
                                        Diam alienum oporteat ad vis, latine intellegebat cu his. Ei eros dicam commodo
                                        duo, an assum meliore eam. In sed albucius dissentiet. Sit laudem graece malorum
                                        ne, at eam omnesque expetenda pertinacia, tale meliore vim ea. Dolore legere
                                        deleniti ius
                                        at, mea nibh discere perfecto ex. Mea ea iuvaret eripuit, eos no vivendo
                                        intellegat definiebas, patrioque eloquentiam eos et.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <h4>Our expertise</h4>
                    <label>Web design:</label>
                    <div class="progress progress-info progress-striped active">
                        <div class="bar" style="width: 90%">
                        </div>
                    </div>
                    <label>Wordpress :</label>
                    <div class="progress progress-success progress-striped active">
                        <div class="bar" style="width: 60%">
                        </div>
                    </div>
                    <label>Photoshop :</label>
                    <div class="progress progress-warning progress-striped active">
                        <div class="bar" style="width: 80%">
                        </div>
                    </div>
                    <label>Ilustrator :</label>
                    <div class="progress progress-danger progress-striped active">
                        <div class="bar" style="width: 40%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection