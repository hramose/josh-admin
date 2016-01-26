@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Advanced Buttons
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <link rel="stylesheet" href="{{ asset('assets/vendors/Buttons-master/css/buttons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/advbuttons.css') }}" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Advanced Buttons</h1>
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
                    <li class="active">Advanced Buttons</li>
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
                                    <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Flat Buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="flatbuttons">
                                    <div class="text-left">
                                        Radiused Buttons
                                        <br />
                                        <ul>
                                            <li>
                                                <a href="#" class="button button-rounded button-flat">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-rounded button-flat-primary">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-rounded button-flat-action">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-rounded button-flat-highlight">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-rounded button-flat-caution">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-rounded button-flat-royal">button</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-left">
                                        Rounded Buttons
                                        <br />
                                        <ul>
                                            <li>
                                                <a href="#" class="button button-pill button-flat">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-pill button-flat-primary">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-pill button-flat-action">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-pill button-flat-highlight">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-pill button-flat-caution">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-pill button-flat-royal">button</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-left">
                                        Rectangle Box
                                        <br />
                                        <ul>
                                            <li>
                                                <a href="#" class="button button-flat">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-flat-primary">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-flat-action">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-flat-highlight">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-flat-caution">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-flat-royal">button</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-left">
                                        Cirlce Buttons
                                        <br />
                                        <ul>
                                            <li>
                                                <a href="#" class="button button-circle button-flat">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-circle button-flat-primary">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-circle button-flat-action">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-circle button-flat-highlight">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-circle button-flat-caution">button</a>
                                            </li>
                                            <li>
                                                <a href="#" class="button button-circle button-flat-royal">button</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Border Buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="flatbuttons">
                                    <ul>
                                        <li>
                                            <a href="#" class="button button-border">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-border-primary button-rounded">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-border-action button-pill">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-border-highlight button-circle">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-border-caution">
                                                <i class="fa fa-camera"></i>
                                                button
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-border-royal">button</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="signal" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Glow Buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="flatbuttons_small">
                                    <ul>
                                        <li>
                                            <a href="#" class="button glow button-rounded button-flat">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button glow button-rounded button-flat-primary">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button glow button-rounded button-flat-action">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button glow button-rounded button-flat-highlight">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button glow button-rounded button-flat-caution">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button glow button-rounded button-flat-royal">button</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="share" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Rounded Buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="flatbuttons_small">
                                    <ul>
                                        <li>
                                            <a href="#" class="button button-rounded">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-rounded button-primary">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-rounded button-action">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-rounded button-highlight">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-rounded button-caution">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-rounded button-royal">button</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="location" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Pill Buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="flatbuttons_small">
                                    <ul>
                                        <li>
                                            <a href="#" class="button button-pill">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-pill button-primary">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-pill button-action">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-pill button-highlight">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-pill button-caution">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-pill button-royal">button</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="pacman" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Square Buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="flatbuttons_small">
                                    <ul>
                                        <li>
                                            <a href="#" class="button">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-primary">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-action">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-highlight">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-caution">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-royal">button</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    3-D Buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="flatbuttons">
                                    <ul>
                                        <li>
                                            <a href="#" class="button button-3d">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-3d-primary button-rounded">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-3d-action button-pill">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-3d-highlight button-circle">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-3d-caution">
                                                <i class="fa fa-camera"></i>
                                                button
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-3d-royal">button</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Button Wrapper
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="flatbuttons">
                                    <ul>
                                        <li>
                                            <span class="button-wrap">
                                                <a href="#" class="button button-circle">button</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="button-wrap">
                                                <a href="#" class="button button-circle button-primary">button</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="button-wrap">
                                                <a href="#" class="button button-pill ">button</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="button-wrap">
                                                <a href="#" class="button button-pill button-primary">button</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="more" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Button size
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="flatbuttons_size">
                                    <ul>
                                        <li>
                                            <a href="#" class="button button-rounded button-flat-primary button-jumbo">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-rounded button-flat-primary button-large">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-rounded button-flat-primary">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-rounded button-flat-primary button-small">button</a>
                                        </li>
                                        <li>
                                            <a href="#" class="button button-rounded button-flat-primary button-tiny">button</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="signal" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Dropdown Buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="dorpdown-buttons">
                                    <ul>
                                        <li>
                                            <div class="button-dropdown" data-buttons="dropdown">
                                                <a href="#" class="button button-rounded">
                                                    button
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Option 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Option 2</a>
                                                    </li>
                                                    <li class="button-dropdown-divider">
                                                        <a href="#">Option 3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="button-dropdown" data-buttons="dropdown">
                                                <a href="#" class="button button-rounded button-flat-primary">
                                                    button
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="button-dropdown-menu-below">
                                                    <li>
                                                        <a href="#">Option 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Option 2</a>
                                                    </li>
                                                    <li class="button-dropdown-divider">
                                                        <a href="#">Option 3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="button-dropdown" data-buttons="dropdown">
                                                <a href="#" class="button button-rounded button-flat-action">
                                                    button
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="button-dropdown-menu-above">
                                                    <li>
                                                        <a href="#">Option 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Option 2</a>
                                                    </li>
                                                    <li class="button-dropdown-divider">
                                                        <a href="#">Option 3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="button-dropdown" data-buttons="dropdown">
                                                <a href="#" class="button button-highlight button-rounded">
                                                    button
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Option 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Option 2</a>
                                                    </li>
                                                    <li class="button-dropdown-divider">
                                                        <a href="#">Option 3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="button-dropdown" data-buttons="dropdown">
                                                <a href="#" class="button button-caution button-pill">
                                                    button
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Option 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Option 2</a>
                                                    </li>
                                                    <li class="button-dropdown-divider">
                                                        <a href="#">Option 3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="button-dropdown" data-buttons="dropdown">
                                                <a href="#" class="button button-royal button-rounded">
                                                    <i class="fa fa-envelope"></i>
                                                    button
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Option 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Option 2</a>
                                                    </li>
                                                    <li class="button-dropdown-divider">
                                                        <a href="#">Option 3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="help" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Block Buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="flatbuttons_small1">
                                    <a href="#" class="button button-block button-rounded button-large">button</a>
                                    <br/>
                                    <a href="#" class="button button-block button-rounded button-primary button-large">button</a>
                                    <br/>
                                    <a href="#" class="button button-block button-rounded button-action button-large">button</a>
                                    <br/>
                                    <a href="#" class="button button-block button-rounded button-highlight button-large">button</a>
                                    <br/>
                                    <a href="#" class="button button-block button-rounded button-caution button-large">button</a>
                                    <br/>
                                    <a href="#" class="button button-block button-rounded button-royal button-large">button</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel  panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="legal" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Social Dashboard
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-xs-12 col-sm-12">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item visitor">
                                                <p class="pull-right">
                                                    <i class="fa fa-eye f"></i>
                                                </p>
                                                <h4 class="list-group-item-heading count">1000</h4>
                                                <p class="list-group-item-text">Profile Views</p>
                                            </a>
                                            <a href="#" class="list-group-item facebook-like">
                                                <p class="pull-right">
                                                    <i class="fa fa-facebook-square f"></i>
                                                </p>
                                                <h4 class="list-group-item-heading count">1000</h4>
                                                <p class="list-group-item-text">Facebook Likes</p>
                                            </a>
                                            <a href="#" class="list-group-item google-plus">
                                                <p class="pull-right">
                                                    <i class="fa fa-google-plus-square f"></i>
                                                </p>
                                                <h4 class="list-group-item-heading count">1000</h4>
                                                <p class="list-group-item-text">Google+</p>
                                            </a>
                                            <a href="#" class="list-group-item twitter">
                                                <p class="pull-right">
                                                    <i class="fa fa-twitter-square f"></i>
                                                </p>
                                                <h4 class="list-group-item-heading count">1000</h4>
                                                <p class="list-group-item-text ">Twitter Followers</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xs-12 col-sm-12">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item tumblr">
                                                <p class="pull-right">
                                                    <i class="fa fa-tumblr-square f"></i>
                                                </p>
                                                <h4 class="list-group-item-heading count">1000</h4>
                                                <p class="list-group-item-text">Tumblr</p>
                                            </a>
                                            <a href="#" class="list-group-item linkedin">
                                                <p class="pull-right">
                                                    <i class="fa fa-linkedin-square f"></i>
                                                </p>
                                                <h4 class="list-group-item-heading count">1000</h4>
                                                <p class="list-group-item-text ">Linkedin</p>
                                            </a>
                                            <a href="#" class="list-group-item youtube">
                                                <p class="pull-right">
                                                    <i class="fa fa-youtube-play f"></i>
                                                </p>
                                                <h4 class="list-group-item-heading count">1000</h4>
                                                <p class="list-group-item-text ">Youtub Play</p>
                                            </a>
                                            <a href="#" class="list-group-item vimeo">
                                                <p class="pull-right">
                                                    <i class="fa fa-vimeo-square f"></i>
                                                </p>
                                                <h4 class="list-group-item-heading count">1000</h4>
                                                <p class="list-group-item-text">Vimeo</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="magic" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Button Group
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="buttongroup">
                                    <ul>
                                        <li>
                                            <div class="button-group">
                                                <button type="button" class="button">Option 1</button>
                                                <button type="button" class="button">Option 2</button>
                                                <button type="button" class="button">Option 3</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="button-group">
                                                <button type="button" class="button button-primary">Option 1</button>
                                                <button type="button" class="button button-primary">Option 2</button>
                                                <button type="button" class="button button-primary">Option 3</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="button-group">
                                                <button type="button" class="button button-pill button-action">Option 1</button>
                                                <button type="button" class="button button-pill button-action">Option 2</button>
                                                <button type="button" class="button button-pill button-action">Option 3</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="button-group">
                                                <button type="button" class="button button-flat-primary">Option 1</button>
                                                <button type="button" class="button button-flat-primary">Option 2</button>
                                                <button type="button" class="button button-flat-primary">Option 3</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Quick Shortcuts
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6 col-md-6">
                                        <a href="#" class="btn btn-danger btn-sm btn-responsive" role="button">
                                            <span class="glyphicon glyphicon-list-alt"></span>
                                            <br/>
                                            Apps
                                        </a>
                                        <a href="#" class="btn btn-warning btn-sm btn-responsive" role="button">
                                            <span class="glyphicon glyphicon-bookmark"></span>
                                            <br/>
                                            Bookmarks
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm btn-responsive" role="button">
                                            <span class="glyphicon glyphicon-signal"></span>
                                            <br/>
                                            Reports
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm btn-responsive" role="button">
                                            <span class="glyphicon glyphicon-comment"></span>
                                            <br/>
                                            Comments
                                        </a>
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <a href="#" class="btn btn-success btn-sm btn-responsive" role="button">
                                            <span class="glyphicon glyphicon-user"></span>
                                            <br/>
                                            Users
                                        </a>
                                        <a href="#" class="btn btn-info btn-sm btn-responsive" role="button">
                                            <span class="glyphicon glyphicon-file"></span>
                                            <br/>
                                            Notes
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm btn-responsive" role="button">
                                            <span class="glyphicon glyphicon-picture"></span>
                                            <br/>
                                            Photos
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm btn-responsive" role="button">
                                            <span class="glyphicon glyphicon-tag"></span>
                                            <br/>
                                            Tags
                                        </a>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-success btn-lg btn-block" role="button">
                                    <span class="glyphicon glyphicon-globe"></span>
                                    Website
                                </a>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Group buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="ui-group-buttons">
                                            <a href="#" class="btn btn-success" role="button">
                                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                            </a>
                                            <div class="or"></div>
                                            <a href="#" class="btn btn-danger" role="button">
                                                <span class="glyphicon glyphicon-thumbs-down"></span>
                                            </a>
                                        </div>
                                        <div class="ui-group-buttons">
                                            <a href="#" class="btn btn-success" role="button">
                                                <span class="glyphicon glyphicon-floppy-disk"></span>
                                            </a>
                                            <div class="or"></div>
                                            <a href="#" class="btn btn-danger" role="button">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                        <br />
                                        <br />
                                        <div class="ui-group-buttons">
                                            <a href="#" class="btn btn-success" role="button">
                                                <span class="glyphicon glyphicon-ok"></span>
                                                Sign Up
                                            </a>
                                            <div class="or"></div>
                                            <a href="#" class="btn btn-default" role="button">
                                                <span class="glyphicon glyphicon-remove"></span>
                                                Reset
                                            </a>
                                        </div>
                                        <br />
                                        <br />
                                        <div class="ui-group-buttons">
                                            <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                            <div class="or or-lg"></div>
                                            <button type="button" class="btn btn-success btn-lg">Large button</button>
                                        </div>
                                        <br />
                                        <br />
                                        <div class="ui-group-buttons">
                                            <button type="button" class="btn btn-primary">Default</button>
                                            <div class="or"></div>
                                            <button type="button" class="button btn btn-success">Success</button>
                                        </div>
                                        <br />
                                        <br />
                                        <div class="ui-group-buttons">
                                            <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                            <div class="or or-sm"></div>
                                            <button type="button" class="btn btn-success btn-sm">Small button</button>
                                        </div>
                                        <br />
                                        <br />
                                        <div class="ui-group-buttons">
                                            <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
                                            <div class="or or-xs"></div>
                                            <button type="button" class="btn btn-success btn-xs">Extra small button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="cloud-snow" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Buttons With Labels
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <h2>Cool Buttons With Labels</h2>
                                    <div class="col-lg-3 col-md-4 col-xs-6 col-sm-6">
                                        <button type="button" class="btn btn-labeled btn-success">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-ok"></i>
                                            </span>
                                            Success
                                        </button>
                                        <br />
                                        <button type="button" class="btn btn-labeled btn-warning">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-bookmark"></i>
                                            </span>
                                            Bookmark
                                        </button>
                                        <br />
                                        <button type="button" class="btn btn-labeled btn-default">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-chevron-left"></i>
                                            </span>
                                            Left
                                        </button>
                                        <br />
                                        <button type="button" class="btn btn-labeled btn-success">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-thumbs-up"></i>
                                            </span>
                                            Up
                                        </button>
                                        <br />
                                        <button type="button" class="btn btn-labeled btn-info">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-refresh"></i>
                                            </span>
                                            Refresh
                                        </button>
                                        <br />
                                        <a class="btn btn-success btn-labeled" role="button">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-info-sign"></i>
                                            </span>
                                            Info Web
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-xs-6 col-sm-6">
                                        <button type="button" class="btn btn-labeled btn-danger">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-remove"></i>
                                            </span>
                                            Cancel
                                        </button>
                                        <br />
                                        <button type="button" class="btn btn-labeled btn-primary">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-camera"></i>
                                            </span>
                                            Camera
                                        </button>
                                        <br />
                                        <button type="button" class="btn btn-labeled btn-default">
                                            Right
                                            <span class="btn-label" style="position: inherit;">
                                                <i class="glyphicon glyphicon-chevron-right"></i>
                                            </span>
                                        </button>
                                        <br />
                                        <button type="button" class="btn btn-labeled btn-danger">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-thumbs-down"></i>
                                            </span>
                                            Down
                                        </button>
                                        <br />
                                        <button type="button" class="btn btn-labeled btn-danger">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-trash"></i>
                                            </span>
                                            Trash
                                        </button>
                                        <br />
                                        <a class="btn btn-success btn-labeled" role="button">
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-info-sign"></i>
                                            </span>
                                            Info Web
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="paddingleft_right15">
                    <div class="row">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Social Buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <!--start-->
                                    <div class="col-sm-4 social-buttons">
                                        <h3>The Buttons</h3>
                                        <a class="btn btn-block btn-social btn-bitbucket">
                                            <i class="fa fa-bitbucket"></i>
                                            Sign in with Bitbucket
                                        </a>
                                        <a class="btn btn-block btn-social btn-dropbox">
                                            <i class="fa fa-dropbox"></i>
                                            Sign in with Dropbox
                                        </a>
                                        <a class="btn btn-block btn-social btn-facebook">
                                            <i class="fa fa-facebook"></i>
                                            Sign in with Facebook
                                        </a>
                                        <a class="btn btn-block btn-social btn-flickr">
                                            <i class="fa fa-flickr"></i>
                                            Sign in with Flickr
                                        </a>
                                        <a class="btn btn-block btn-social btn-github">
                                            <i class="fa fa-github"></i>
                                            Sign in with GitHub
                                        </a>
                                        <a class="btn btn-block btn-social btn-google-plus">
                                            <i class="fa fa-google-plus"></i>
                                            Sign in with Google
                                        </a>
                                        <a class="btn btn-block btn-social btn-instagram">
                                            <i class="fa fa-instagram"></i>
                                            Sign in with Instagram
                                        </a>
                                        <a class="btn btn-block btn-social btn-linkedin">
                                            <i class="fa fa-linkedin"></i>
                                            Sign in with LinkedIn
                                        </a>
                                        <a class="btn btn-block btn-social btn-pinterest">
                                            <i class="fa fa-pinterest"></i>
                                            Sign in with Pinterest
                                        </a>
                                        <a class="btn btn-block btn-social btn-tumblr">
                                            <i class="fa fa-tumblr"></i>
                                            Sign in with Tumblr
                                        </a>
                                        <a class="btn btn-block btn-social btn-twitter">
                                            <i class="fa fa-twitter"></i>
                                            Sign in with Twitter
                                        </a>
                                        <a class="btn btn-block btn-social btn-vk">
                                            <i class="fa fa-vk"></i>
                                            Sign in with VK
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <h3>Available Classes</h3>
                                        <ul class="social-class list-unstyled">
                                            <li data-code="bitbucket" data-name="Bitbucket">
                                                <code>btn-bitbucket</code>
                                                <span class="social-hex">#205081</span>
                                            </li>
                                            <li data-code="dropbox" data-name="Dropbox">
                                                <code>btn-dropbox</code>
                                                <span class="social-hex">#1087DD</span>
                                            </li>
                                            <li data-code="facebook" data-name="Facebook">
                                                <code>btn-facebook</code>
                                                <span class="social-hex">#418BC1</span>
                                            </li>
                                            <li data-code="flickr" data-name="Flickr">
                                                <code>btn-flickr</code>
                                                <span class="social-hex">#2BA9E1</span>
                                            </li>
                                            <li data-code="github" data-name="GitHub">
                                                <code>btn-github</code>
                                                <span class="social-hex">#444444</span>
                                            </li>
                                            <li data-code="google-plus" data-name="Google">
                                                <code>btn-google-plus</code>
                                                <span class="social-hex">#517FA4</span>
                                            </li>
                                            <li data-code="instagram" data-name="Instagram">
                                                <code>btn-instagram</code>
                                                <span class="social-hex">#EF6F61</span>
                                            </li>
                                            <li data-code="linkedin" data-name="LinkedIn">
                                                <code>btn-linkedin</code>
                                                <span class="social-hex">#007BB6</span>
                                            </li>
                                            <li data-code="pinterest" data-name="Pinterest">
                                                <code>btn-pinterest</code>
                                                <span class="social-hex">#4875B4</span>
                                            </li>
                                            <li data-code="tumblr" data-name="Tumblr">
                                                <code>btn-tumblr</code>
                                                <span class="social-hex">#CB2027</span>
                                            </li>
                                            <li data-code="twitter" data-name="Twitter">
                                                <code>btn-twitter</code>
                                                <span class="social-hex">#2C4762</span>
                                            </li>
                                            <li data-code="vk" data-name="VK">
                                                <code>btn-vk</code>
                                                <span class="social-hex">#587EA3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="social-sizes">
                                            <h3>Different Sizes</h3>
                                            <a class="btn btn-block btn-social btn-lg btn-google-plus">
                                                <i class="fa fa-google-plus"></i>
                                                Sign in with Google
                                            </a>
                                            <a class="btn btn-block btn-social btn-google-plus">
                                                <i class="fa fa-google-plus"></i>
                                                Sign in with Google
                                            </a>
                                            <a class="btn btn-block btn-social btn-sm btn-google-plus">
                                                <i class="fa fa-google-plus"></i>
                                                Sign in with Google
                                            </a>
                                            <a class="btn btn-block btn-social btn-xs btn-google-plus">
                                                <i class="fa fa-google-plus"></i>
                                                Sign in with Google
                                            </a>
                                            <hr>
                                            <div class="text-center">
                                                <a class="btn btn-social-icon btn-lg btn-google-plus">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                                <a class="btn btn-social-icon btn-google-plus">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                                <a class="btn btn-social-icon btn-sm btn-google-plus">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                                <a class="btn btn-social-icon btn-xs btn-google-plus">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end--> </div>
                        </div>
                    </div>
                </div>
                <!--main content ends--> </section>
            <!-- content --> 
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script type="text/javascript" src="{{ asset('assets/vendors/Buttons-master/js/vendor/scrollto.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/Buttons-master/js/main.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/Buttons-master/js/buttons.js') }}" ></script>
    <!--social dashboard-->
    <script type="text/javascript">
    $({
        someValue: 0
    }).animate({
        someValue: Math.floor(Math.random() * 3000)
    }, {
        duration: 3000,
        easing: 'swing', // can be anything
        step: function() { // called on every step
            // Update the element's text with rounded-up value:
            $('.count').text(commaSeparateNumber(Math.round(this.someValue)));
        }
    });

    function commaSeparateNumber(val) {
        while (/(\d+)(\d{3})/.test(val.toString())) {
            val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
        }
        return val;
    }
    </script>
    <!--social buttons-->
    <script type="text/javascript">
    $(function() {
        var all_classes = "";
        var timer = undefined;
        $.each($('li', '.social-class'), function(index, element) {
            all_classes += " btn-" + $(element).data("code");
        });
        $('li', '.social-class').mouseenter(function() {
            var icon_name = $(this).data("code");
            if ($(this).data("icon")) {
                icon_name = $(this).data("icon");
            }
            var icon = "<i class='fa fa-" + icon_name + "'></i>";
            $('.btn-social', '.social-sizes').html(icon + "Sign in with " + $(this).data("name"));
            $('.btn-social-icon', '.social-sizes').html(icon);
            $('.btn', '.social-sizes').removeClass(all_classes);
            $('.btn', '.social-sizes').addClass("btn-" + $(this).data('code'));
        });
        $($('li', '.social-class')[Math.floor($('li', '.social-class').length * Math.random())]).mouseenter();
    });
    </script>
    
@stop