@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Form Elements
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <!-- daterange picker -->
    <link href="{{ asset('assets/vendors/daterangepicker/css/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!--select css-->
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}" />
    <!--card css-->
    <link href="{{ asset('assets/vendors/card/css/card.css') }}" rel="stylesheet" type="text/css">
    <!--clock face css-->
    <link href="{{ asset('assets/vendors/iCheck/skins/all.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/pages/formelements.css') }}" rel="stylesheet" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>
                    Advanced Form Elements
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Forms</a>
                    </li>
                    <li class="active">
                        Form Elements
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <!--main content-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="magic" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Input masks
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="box-body">
                                    <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>
                                            Date masks:
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div>
                                        <!-- /.input group --> </div>
                                    <!-- /.form group -->
                                    <!-- Date mm/dd/yyyy -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                                        </div>
                                        <!-- /.input group --> </div>
                                    <!-- /.form group -->
                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>
                                            US phone mask:
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                        </div>
                                        <!-- /.input group --> </div>
                                    <!-- /.form group -->
                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>
                                            Intl US phone mask:
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask/>
                                        </div>
                                        <!-- /.input group --> </div>
                                    <!-- /.form group -->
                                    <!-- IP mask -->
                                    <div class="form-group">
                                        <label>IP mask:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-laptop"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask/>
                                        </div>
                                        <!-- /.input group --> </div>
                                    <!-- /.form group --> </div>
                            </div>
                        </div>
                        <!--select2 starts-->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Select2
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="default" class="control-label">
                                        Default textbox
                                    </label>
                                    <input id="default" type="text" class="form-control" placeholder="Placeholder text" />
                                </div>
                                <div class="form-group">
                                    <label for="e1" class="control-label">
                                        Select2 single select
                                    </label>
                                    <select id="e1" class="form-control select2">
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">
                                                North Dakota
                                            </option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">
                                                Mississippi
                                            </option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">
                                                South Dakota
                                            </option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">
                                                Connecticut
                                            </option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">
                                                Massachusetts
                                            </option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">
                                                New Hampshire
                                            </option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">
                                                North Carolina
                                            </option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">
                                                Pennsylvania
                                            </option>
                                            <option value="RI">
                                                Rhode Island
                                            </option>
                                            <option value="SC">
                                                South Carolina
                                            </option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">
                                                West Virginia
                                            </option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="multiple" class="control-label">
                                        Select2 multi select
                                    </label>
                                    <select id="multiple" class="form-control select2-multiple" multiple>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">
                                                North Dakota
                                            </option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                        <optgroup label="Central Time Zone">
                                            <option value="AL">Alabama</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">
                                                Mississippi
                                            </option>
                                            <option value="MO">Missouri</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="SD">
                                                South Dakota
                                            </option>
                                            <option value="TX">Texas</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="WI">Wisconsin</option>
                                        </optgroup>
                                        <optgroup label="Eastern Time Zone">
                                            <option value="CT">
                                                Connecticut
                                            </option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="IN">Indiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">
                                                Massachusetts
                                            </option>
                                            <option value="MI">Michigan</option>
                                            <option value="NH">
                                                New Hampshire
                                            </option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">
                                                North Carolina
                                            </option>
                                            <option value="OH">Ohio</option>
                                            <option value="PA">
                                                Pennsylvania
                                            </option>
                                            <option value="RI">
                                                Rhode Island
                                            </option>
                                            <option value="SC">
                                                South Carolina
                                            </option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WV">
                                                West Virginia
                                            </option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="select2-single-append" class="control-label">
                                        Select2 append Checkbox
                                    </label>
                                    <div class="input-group select2-bootstrap-prepend">
                                        <span class="input-group-addon">
                                            <input type="checkbox" class="chk" checked></span>
                                        <select id="select2-single-append" class="form-control select2-allow-clear">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">
                                                    North Dakota
                                                </option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">
                                                    Mississippi
                                                </option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">
                                                    South Dakota
                                                </option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">
                                                    Connecticut
                                                </option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">
                                                    Massachusetts
                                                </option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">
                                                    New Hampshire
                                                </option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">
                                                    North Carolina
                                                </option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">
                                                    Pennsylvania
                                                </option>
                                                <option value="RI">
                                                    Rhode Island
                                                </option>
                                                <option value="SC">
                                                    South Carolina
                                                </option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">
                                                    West Virginia
                                                </option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="single-append-radio" class="control-label">
                                        Select2 multi append Radiobutton
                                    </label>
                                    <div class="input-group select2-bootstrap-prepend">
                                        <span class="input-group-addon">
                                            <input type="radio" class="chk"></span>
                                        <select id="single-append-radio" class="form-control select2-allow-clear" multiple>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">
                                                    North Dakota
                                                </option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">
                                                    Mississippi
                                                </option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">
                                                    South Dakota
                                                </option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">
                                                    Connecticut
                                                </option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">
                                                    Massachusetts
                                                </option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">
                                                    New Hampshire
                                                </option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">
                                                    North Carolina
                                                </option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">
                                                    Pennsylvania
                                                </option>
                                                <option value="RI">
                                                    Rhode Island
                                                </option>
                                                <option value="SC">
                                                    South Carolina
                                                </option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">
                                                    West Virginia
                                                </option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="single-append-text" class="control-label">
                                        Select2 append
                                    </label>
                                    <div class="input-group select2-bootstrap-append">
                                        <select id="single-append-text" class="form-control select2-allow-clear">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">
                                                    North Dakota
                                                </option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">
                                                    Mississippi
                                                </option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">
                                                    South Dakota
                                                </option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">
                                                    Connecticut
                                                </option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">
                                                    Massachusetts
                                                </option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">
                                                    New Hampshire
                                                </option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">
                                                    North Carolina
                                                </option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">
                                                    Pennsylvania
                                                </option>
                                                <option value="RI">
                                                    Rhode Island
                                                </option>
                                                <option value="SC">
                                                    South Carolina
                                                </option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">
                                                    West Virginia
                                                </option>
                                            </optgroup>
                                        </select>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" data-select2-open="single-append-text">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="single-prepend-text" class="control-label">
                                        Select2 prepend
                                    </label>
                                    <div class="input-group select2-bootstrap-prepend">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>
                                        <select id="single-prepend-text" class="form-control select2">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="multi-append" class="control-label">
                                        Select2 multi append
                                    </label>
                                    <div class="input-group select2-bootstrap-append">
                                        <select id="multi-append" class="form-control select2">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                        </select>
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="button" data-select2-open="multi-append">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                            <button class="btn btn-default" type="button" data-select2-open="multi-prepend">State</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                Action
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">Action</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Another action
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Something else here
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        Separated link
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="multi-prepend" class="control-label">
                                        Select2 multi prepend
                                    </label>
                                    <div class="input-group select2-bootstrap-prepend">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="button" data-select2-open="multi-prepend">State</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                Action
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">Action</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Another action
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Something else here
                                                    </a>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#">
                                                        Separated link
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <select id="multi-prepend" class="form-control select2">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">
                                                    North Dakota
                                                </option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">
                                                    Mississippi
                                                </option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">
                                                    South Dakota
                                                </option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">
                                                    Connecticut
                                                </option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">
                                                    Massachusetts
                                                </option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">
                                                    New Hampshire
                                                </option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">
                                                    North Carolina
                                                </option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">
                                                    Pennsylvania
                                                </option>
                                                <option value="RI">
                                                    Rhode Island
                                                </option>
                                                <option value="SC">
                                                    South Carolina
                                                </option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">
                                                    West Virginia
                                                </option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select2-disabled-inputs-single" class="control-label">
                                        Select2 Checkbox
                                    </label>
                                    <div class="input-group select2-bootstrap-prepend">
                                        <span class="input-group-addon">
                                            <input type="checkbox" class="chk1" checked></span>
                                        <select id="select2-disabled-inputs-single" class="form-control select2">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">
                                                    North Dakota
                                                </option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">
                                                    Mississippi
                                                </option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">
                                                    South Dakota
                                                </option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">
                                                    Connecticut
                                                </option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">
                                                    Massachusetts
                                                </option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">
                                                    New Hampshire
                                                </option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">
                                                    North Carolina
                                                </option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">
                                                    Pennsylvania
                                                </option>
                                                <option value="RI">
                                                    Rhode Island
                                                </option>
                                                <option value="SC">
                                                    South Carolina
                                                </option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">
                                                    West Virginia
                                                </option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <h4>&nbsp;</h4>
                                <div class="form-group">
                                    <label for="source" class="control-label">
                                        Select your state
                                    </label>
                                    <p class="display-no">
                                        <select name="source" id="source" class="wd">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">
                                                    North Dakota
                                                </option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">
                                                    Mississippi
                                                </option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">
                                                    South Dakota
                                                </option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">
                                                    Connecticut
                                                </option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">
                                                    Massachusetts
                                                </option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">
                                                    New Hampshire
                                                </option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">
                                                    North Carolina
                                                </option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">
                                                    Pennsylvania
                                                </option>
                                                <option value="RI">
                                                    Rhode Island
                                                </option>
                                                <option value="SC">
                                                    South Carolina
                                                </option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">
                                                    West Virginia
                                                </option>
                                            </optgroup>
                                        </select>
                                    </p>
                                    <p>
                                        <select id="e4" class="populate form-control select2"></select>
                                        <br/>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label class="control-label ">
                                        Country List
                                    </label>
                                    <select name="" id="select2_sample4" class="form-control select2">
                                        <option value="AF">
                                            Afghanistan
                                        </option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">
                                            American Samoa
                                        </option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">
                                            Bosnia and Herzegowina
                                        </option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">
                                            Bouvet Island
                                        </option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">
                                            British Indian Ocean Territory
                                        </option>
                                        <option value="BN">
                                            Brunei Darussalam
                                        </option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">
                                            Burkina Faso
                                        </option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">
                                            Cayman Islands
                                        </option>
                                        <option value="CF">
                                            Central African Republic
                                        </option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">
                                            Christmas Island
                                        </option>
                                        <option value="CC">
                                            Cocos (Keeling) Islands
                                        </option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">
                                            Congo, the Democratic Republic of the
                                        </option>
                                        <option value="CK">
                                            Cook Islands
                                        </option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">
                                            Cote d'Ivoire
                                        </option>
                                        <option value="HR">
                                            Croatia (Hrvatska)
                                        </option>
                                        <option value="CU">Cuba</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">
                                            Czech Republic
                                        </option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">
                                            Dominican Republic
                                        </option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">
                                            El Salvador
                                        </option>
                                        <option value="GQ">
                                            Equatorial Guinea
                                        </option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">
                                            Falkland Islands (Malvinas)
                                        </option>
                                        <option value="FO">
                                            Faroe Islands
                                        </option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">
                                            French Guiana
                                        </option>
                                        <option value="PF">
                                            French Polynesia
                                        </option>
                                        <option value="TF">
                                            French Southern Territories
                                        </option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">
                                            Guinea-Bissau
                                        </option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">
                                            Heard and Mc Donald Islands
                                        </option>
                                        <option value="VA">
                                            Holy See (Vatican City State)
                                        </option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">
                                            Iran (Islamic Republic of)
                                        </option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">
                                            Korea, Democratic People's Republic of
                                        </option>
                                        <option value="KR">
                                            Korea, Republic of
                                        </option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">
                                            Lao People's Democratic Republic
                                        </option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">
                                            Libyan Arab Jamahiriya
                                        </option>
                                        <option value="LI">
                                            Liechtenstein
                                        </option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macau</option>
                                        <option value="MK">
                                            Macedonia, The Former Yugoslav Republic of
                                        </option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">
                                            Marshall Islands
                                        </option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">
                                            Micronesia, Federated States of
                                        </option>
                                        <option value="MD">
                                            Moldova, Republic of
                                        </option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">
                                            Netherlands
                                        </option>
                                        <option value="AN">
                                            Netherlands Antilles
                                        </option>
                                        <option value="NC">
                                            New Caledonia
                                        </option>
                                        <option value="NZ">
                                            New Zealand
                                        </option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">
                                            Norfolk Island
                                        </option>
                                        <option value="MP">
                                            Northern Mariana Islands
                                        </option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">
                                            Papua New Guinea
                                        </option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">
                                            Philippines
                                        </option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">
                                            Puerto Rico
                                        </option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">
                                            Russian Federation
                                        </option>
                                        <option value="RW">Rwanda</option>
                                        <option value="KN">
                                            Saint Kitts and Nevis
                                        </option>
                                        <option value="LC">
                                            Saint LUCIA
                                        </option>
                                        <option value="VC">
                                            Saint Vincent and the Grenadines
                                        </option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">
                                            Sao Tome and Principe
                                        </option>
                                        <option value="SA">
                                            Saudi Arabia
                                        </option>
                                        <option value="SN">Senegal</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">
                                            Sierra Leone
                                        </option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">
                                            Slovakia (Slovak Republic)
                                        </option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">
                                            Solomon Islands
                                        </option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">
                                            South Africa
                                        </option>
                                        <option value="GS">
                                            South Georgia and the South Sandwich Islands
                                        </option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SH">St. Helena</option>
                                        <option value="PM">
                                            St. Pierre and Miquelon
                                        </option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">
                                            Svalbard and Jan Mayen Islands
                                        </option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">
                                            Switzerland
                                        </option>
                                        <option value="SY">
                                            Syrian Arab Republic
                                        </option>
                                        <option value="TW">
                                            Taiwan, Province of China
                                        </option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">
                                            Tanzania, United Republic of
                                        </option>
                                        <option value="TH">Thailand</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">
                                            Trinidad and Tobago
                                        </option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">
                                            Turkmenistan
                                        </option>
                                        <option value="TC">
                                            Turks and Caicos Islands
                                        </option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">
                                            United Arab Emirates
                                        </option>
                                        <option value="GB">
                                            United Kingdom
                                        </option>
                                        <option value="US">
                                            United States
                                        </option>
                                        <option value="UM">
                                            United States Minor Outlying Islands
                                        </option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">
                                            Virgin Islands (British)
                                        </option>
                                        <option value="VI">
                                            Virgin Islands (U.S.)
                                        </option>
                                        <option value="WF">
                                            Wallis and Futuna Islands
                                        </option>
                                        <option value="EH">
                                            Western Sahara
                                        </option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </div>
                                <!--ends--> </div>
                        </div>
                        <!--select2 ends-->

                        <!-- credit card section -->
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="credit-card" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Credit Card
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="box-body">
                                    <div class="card-wrapper"></div>
                                    <br />
                                    <div id="card">
                                        <form class="form-horizontal">

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Card Number</label>
                                                <div class="col-md-9">
                                                    <input name="number" required type="text" placeholder="" class="form-control" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Name on Card</label>
                                                <div class="col-md-9">
                                                    <input name="name" type="text" class="form-control" maxlength="40" required />
                                                </div>
                                            </div>

                                            <div  class="form-group">
                                                <label class="col-md-3 control-label">CVV</label>
                                                <div class="col-md-9">
                                                    <input name="cvc" required type="text" placeholder="" class="form-control" />
                                                </div>
                                            </div>

                                            <div  class="form-group">
                                                <label class="col-md-3 control-label">Expiry Date</label>
                                                <div class="col-md-9">
                                                    <input name="expiry" placeholder="" class="form-control" />
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- credit card section ends -->
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Date Range picker
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="box-body">
                                    <!-- Date range -->
                                    <div class="form-group">
                                        <label>
                                            Date range:
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservation" />
                                        </div>
                                        <!-- /.input group --> </div>
                                    <!-- /.form group -->
                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>
                                            Date and time range:
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservationtime" />
                                        </div>
                                        <!-- /.input group --> </div>
                                    <!-- /.form group -->
                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>
                                            Date range button:
                                        </label>
                                        <div class="input-group">
                                            <button class="btn btn-default pull-right" id="daterange-btn">
                                                <i class="fa fa-calendar"></i>
                                                Date range picker
                                                <i class="fa fa-caret-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.form group -->
                                    <!-- time picker --> </div>
                            </div>
                        </div>
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="tag" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    iCheck - Checkbox &amp; Radio Inputs
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="box-body">
                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="flat-red" checked/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="flat-red" />
                                        </label>
                                        <label>
                                            <input type="checkbox" class="flat-red" disabled/>
                                        </label>
                                        &nbsp;Flat red skin checkbox
                                    </div>
                                    <!-- radio -->
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="r3" class="flat-green" checked/>
                                        </label>
                                        <label>
                                            <input type="radio" name="r3" class="flat-green" />
                                        </label>
                                        <label>
                                            <input type="radio" name="r3" class="flat-green" disabled/>
                                        </label>
                                        &nbsp; Flat green skin radio
                                    </div>
                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="minimal" checked/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="minimal" />
                                        </label>
                                        <label>
                                            <input type="checkbox" class="minimal" disabled/>
                                        </label>
                                        &nbsp;Minimal skin checkbox
                                    </div>
                                    <!-- radio -->
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="r1" class="minimal" checked/>
                                        </label>
                                        <label>
                                            <input type="radio" name="r1" class="minimal" />
                                        </label>
                                        <label>
                                            <input type="radio" name="r1" class="minimal" disabled/>
                                        </label>
                                        &nbsp;Minimal skin radio
                                    </div>
                                    <!-- Minimal red style -->
                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="minimal-red" checked/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="minimal-red" />
                                        </label>
                                        <label>
                                            <input type="checkbox" class="minimal-red" disabled/>
                                        </label>
                                        &nbsp;Minimal red skin checkbox
                                    </div>
                                    <!-- radio -->
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" name="r2" class="minimal-red" checked/>
                                        </label>
                                        <label>
                                            <input type="radio" name="r2" class="minimal-red" />
                                        </label>
                                        <label>
                                            <input type="radio" name="r2" class="minimal-red" disabled/>
                                        </label>
                                        &nbsp;Minimal red skin radio
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="gear" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Bootstrap Input MaxLength
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">

                                <!--max length starts-->
                                <div class="form-group">
                                    <label for="default" class="control-label">
                                        Default MaxLength
                                    </label>
                                    <input maxlength="25" name="defaultconfig" id="defaultconfig" type="text" class="form-control" placeholder="Placeholder text"></div>
                                <div class="form-group">
                                    <label for="default" class="control-label">
                                        Threshold value
                                    </label>
                                    <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                                </div>
                                <div class="form-group">
                                    <label for="default" class="control-label">Options</label>
                                    <input type="text" class="form-control" maxlength="25" name="moreoptions" id="moreoptions" />
                                </div>
                                <div class="form-group">
                                    <label for="default" class="control-label">
                                        All the options
                                    </label>
                                    <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                                </div>
                                <div class="form-group">
                                    <label for="default" class="control-label">Text Area</label>
                                    <textarea id="textarea" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="default" class="control-label">Position</label>
                                    <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />
                                </div>
                                <!--min length ends--> </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="lab" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Auto Grow
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>
                                        Auto Grow Basic
                                    </label>
                                    <div class="input-group">
                                        <textarea placeholder="Write something here..." class="form-control" data-autogrow rows="3" cols="80"></textarea>
                                    </div>
                                    <!-- /.input group --> </div>
                                <div class="form-group">
                                    <label>
                                        Heavy padding
                                    </label>
                                    <div class="input-group">
                                        <textarea  placeholder="Write something here..." class="auto2 form-control pd-45" data-autogrow rows="3" cols="80"></textarea>
                                    </div>
                                    <!-- /.input group --> </div>
                                <div class="form-group">
                                    <label>
                                        No Scrollbar
                                    </label>
                                    <div class="input-group">
                                        <textarea placeholder="Write something here..." class="span3 form-control scroll pd" data-autogrow rows="3" cols="80"></textarea>
                                    </div>
                                    <!-- /.input group --> </div>
                                <div class="form-group">
                                    <label>
                                        Initially hidden
                                    </label>
                                    <div class="input-group">
                                        <div class="span4">
                                            <textarea  placeholder="Write something here..." class="span3 form-control display-no" data-autogrow rows="3" cols="80"></textarea>
                                            <a onclick="$(this).closest('.span4').find('textarea').toggle(); $(this).text(this.text=='Show'?'Hide':'Show');return false;" href="#">Show</a>
                                        </div>
                                    </div>
                                    <!-- /.input group --> 
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
    
    <!-- InputMask -->
    <script src="{{ asset('assets/vendors/daterangepicker/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/input-mask/jquery.inputmask.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/input-mask/jquery.inputmask.date.extensions.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/input-mask/jquery.inputmask.extensions.js') }}"  type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('assets/vendors/daterangepicker/daterangepicker.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/select2/select2.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/iCheck/icheck.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/iCheck/demo/js/custom.min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/autogrow/js/jQuery-autogrow.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/maxlength/bootstrap-maxlength.min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/card/js/card.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/formelements.js') }}"  type="text/javascript"></script>
    
@stop