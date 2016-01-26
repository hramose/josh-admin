@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Carousel
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link href="{{ asset('assets/css/pages/carousel.css') }}" rel="stylesheet" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Carousel</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI Features</a>
                    </li>
                    <li class="active">Carousel</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <!--main content-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="tablet" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Carousel
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="box-body">
                                    <!--carousel starts-->
                                    <div class="row">
                                        <!-- The carousel -->
                                        <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
                                                <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
                                            </ol>

                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img data-src="holder.js/2280x360/#418bca:#fff" class='img-responsive' alt="image">
                                                    <div class="carousel-caption">
                                                        <h1 class="carousel-caption-header">Slide 1</h1>
                                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img data-src="holder.js/2280x360/#00bc8c:#fff" class='img-responsive' alt="image">
                                                    <div class="carousel-caption">
                                                        <h1 class="carousel-caption-header">Slide 2</h1>
                                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img data-src="holder.js/2280x360/#EF6F6C:#fff" class='img-responsive' alt="image">
                                                    <div class="carousel-caption">
                                                        <h1 class="carousel-caption-header">Slide 3</h1>
                                                        <p class="carousel-caption-text hidden-sm hidden-xs">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>

                                            <!-- Timer "progress bar" -->
                                            <hr class="transition-timer-carousel-progress-bar animate" />
                                        </div>
                                    </div>
                                    <!--carousel ends-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="shuffle" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Tabbed Slider Carousel
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img data-src="holder.js/2280x360/#F89A14:#fff" class='img-responsive' alt="image">
                                                <div class="carousel-caption">
                                                    <h3>Headline</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Item -->

                                            <div class="item">
                                                <img data-src="holder.js/2280x360/#00bc8c:#fff" class='img-responsive' alt="image">
                                                <div class="carousel-caption">
                                                    <h3>Headline</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam er
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Item -->

                                            <div class="item">
                                                <img data-src="holder.js/2280x360/#5bc0de:#fff" class='img-responsive' alt="image">
                                                <div class="carousel-caption">
                                                    <h3>Headline</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore tua.
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Item -->

                                            <div class="item">
                                                <img data-src="holder.js/2280x360/#00BC8C:#fff" class='img-responsive' alt="image">
                                                <div class="carousel-caption">
                                                    <h3>Headline</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- End Item -->
                                        </div>
                                        <!-- End Carousel Inner -->

                                        <ul class="nav nav-pills nav-justified">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active">
                                                <a href="#">About</a>
                                            </li>
                                            <li data-target="#myCarousel" data-slide-to="1">
                                                <a href="#">Projects</a>
                                            </li>
                                            <li data-target="#myCarousel" data-slide-to="2">
                                                <a href="#">Portfolio</a>
                                            </li>
                                            <li data-target="#myCarousel" data-slide-to="3">
                                                <a href="#">Services</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Carousel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--main content ends-->
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script src="{{ asset('assets/js/carousel.js') }}" ></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#myCarousel').carousel({
            interval: 4000
        });

        var clickEvent = false;
        $('#myCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');
        }).on('slid.bs.carousel', function(e) {
            if (!clickEvent) {
                var count = $('.nav').children().length - 1;
                var current = $('.nav li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if (count == id) {
                    $('.nav li').first().addClass('active');
                }
            }
            clickEvent = false;
        });
    });
    </script>
    
@stop