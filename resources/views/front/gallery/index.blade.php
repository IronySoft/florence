

@extends('front.master')
@section('title', 'Gallery | Florence Nursing Center')
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
                <div class="span12">
                    <ul class="portfolio-categ filter">
                        <li class="all active"><a href="#">All</a></li>

                        @foreach($projects as $project)
                            <li class="{{$project->title}}"><a href="#" title="">{{$project->title}}</a></li>
                        @endforeach
                    </ul>
                    <div class="clearfix">
                    </div>
                    <div class="row">
                        <section id="projects">
                            <ul id="thumbs" class="portfolio">
                                @php($i=0)
                                @foreach($projects as $project)
                                <li class="item-thumbs span4 design" data-id="id-{{$i++}}" data-type="{{$project->title}}">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{$project->title}}" href="{{asset($project->large_image)}}">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{asset($project->image)}}" alt="{{$project->description}}">
                                </li>
                                @endforeach
                                <!-- End Item Project -->
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span4 design" data-id="id-1" data-type="icon">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="{{asset('/')}}front/img/works/full/image-02-full.jpg">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{asset('/')}}front/img/works/thumbs/image-02.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span4 photography" data-id="id-2" data-type="graphic">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="{{asset('/')}}front/img/works/full/image-03-full.jpg">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{asset('/')}}front/img/works/thumbs/image-03.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span4 design" data-id="id-0" data-type="web">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="{{asset('/')}}front/img/works/full/image-04-full.jpg">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{asset('/')}}front/img/works/thumbs/image-04.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span4 photography" data-id="id-4" data-type="graphic">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="{{asset('/')}}front/img/works/full/image-05-full.jpg">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{asset('/')}}front/img/works/thumbs/image-05.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span4 photography" data-id="id-5" data-type="icon">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="{{asset('/')}}front/img/works/full/image-06-full.jpg">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{asset('/')}}front/img/works/thumbs/image-06.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span4 design" data-id="id-0" data-type="web">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="{{asset('/')}}front/img/works/full/image-07-full.jpg">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{asset('/')}}front/img/works/thumbs/image-07.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span4 design" data-id="id-0" data-type="web">
                                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="{{asset('/')}}front/img/works/full/image-08-full.jpg">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    <!-- Thumb Image and Description -->
                                    <img src="{{asset('/')}}front/img/works/thumbs/image-08.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </li>
                                <!-- End Item Project -->
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection