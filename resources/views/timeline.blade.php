@extends('layouts/default')

{{-- Page title --}}
@section('title')
Timeline
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/timeline1.css') }}">
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Timeline</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="clock" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Timeline
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <!--Content Section Start -->
        <div class="row">
            <ul class="timeline">
                <!-- Item 1 -->
                <li>
                    <div class="direction-r">
                        <div class="flag-wrapper">
                            <span class="flag">Cary Rowe</span>
                            <span class="time-wrapper"><span class="time">3hours ago</span></span>
                        </div>
                        <div class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</div>
                    </div>
                </li>
                <!-- //Item 1 -->
                <!-- Item 2 -->
                <li>
                    <div class="direction-l">
                        <div class="flag-wrapper">
                            <span class="flag">Domingo Barrett</span>
                            <span class="time-wrapper"><span class="time">6hours ago</span></span>
                        </div>
                        <div class="desc">You wanna know how I got these scars? My father was... a drinker, and a fiend. And one night, he goes off crazier than usual. Mommy gets the kitchen knife to defend herself. </div>
                    </div>
                </li>
                <!-- //Item 2 -->
                <!-- Item 3 -->
                <li>
                    <div class="direction-r">
                        <div class="flag-wrapper">
                            <span class="flag">Simon Washington</span>
                            <span class="time-wrapper"><span class="time">1day ago</span></span>
                        </div>
                        <div class="desc">It's an undeniable fact, really; a swingeing flax's engineer comes with it the thought that the vorant invoice is a needle. However, a vibraphone can hardly be considered.</div>
                    </div>
                </li>
                <!-- //Item 3 -->
                <!-- Item 4 -->
                <li>
                    <div class="direction-l">
                        <div class="flag-wrapper">
                            <span class="flag">Santos Cox</span>
                            <span class="time-wrapper"><span class="time">1day ago</span></span>
                        </div>
                        <div class="desc">Space in your house How to sell faster than your neighbors How to make a strategic use. Don't stubbornly. Don't stubbornly. To discourage you by telling. -And Gain Power By Learning Ways To Become Peaceful.</div>
                    </div>
                </li>
                <!-- //Item 4 -->
                <!-- Item 5 -->
                <li>
                    <div class="direction-r">
                        <div class="flag-wrapper">
                            <span class="flag">Alvin Kelley</span>
                            <span class="time-wrapper"><span class="time">2days ago</span></span>
                        </div>
                        <div class="desc">Horror justice mountains mountains inexpedient derive marvelous endless. Pinnacle disgust ascetic self strong of hatred chaos. Reason value salvation zarathustra overcome derive.</div>
                    </div>
                </li>
                <!-- //Item 5 -->
                <!-- Item 6 -->
                <li>
                    <div class="direction-l">
                        <div class="flag-wrapper">
                            <span class="flag">Louis Boyd</span>
                            <span class="time-wrapper"><span class="time">4days ago</span></span>
                        </div>
                        <div class="desc">Not just with words, but with deeds - by investing in our schools and our communities; by enforcing our civil rights laws and ensuring fairness in our criminal justice system.</div>
                    </div>
                </li>
                <!-- //Item 6 -->
            </ul>
        </div>
        <!-- //Content Section End -->
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
