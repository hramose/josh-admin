@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Form Wizard
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <link href="{{ asset('assets/vendors/wizard/jquery-steps/css/wizard.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/vendors/wizard/jquery-steps/css/jquery.steps.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" type="text/css" rel="stylesheet">
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Form Wizards</h1>
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
                    <li class="active">Form Wizards</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Advanced  Form Wizard
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--main content-->
                                <div class="row">

                                    <div class="col-md-12">
                                        <h3>Advanced Form Wizard</h3>

                                        <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                        <form id="wizard-validation" action="#">
                                            <h1 class="hidden-xs">User Profile</h1>
                                            <section>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group">
                                                    <label for="userName">User name *</label>
                                                    <input id="userName" name="userName" type="text" placeholder="Enter your name" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password *</label>
                                                    <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label for="confirm">Confirm Password *</label>
                                                    <input id="confirm" name="confirm" type="password" placeholder="Confirm your password " class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email *</label>
                                                    <input id="email" name="email" placeholder="Enter your Email" type="text" class="form-control required email">
                                                </div>
                                                <p>(*) Mandatory</p>
                                            </section>
                                            <h1 class="hidden-xs">Profile Details</h1>
                                            <section>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <div class="form-group">
                                                    <label for="name">First name *</label>
                                                    <input id="name" name="name" placeholder="Enter your First name" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label for="surname">Last name *</label>
                                                    <input id="surname" name="surname" type="text" placeholder=" Enter your Last name" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Gender</label>
                                                    <select class="form-control" title="Select an account type...">
                                                        <option>Select</option>
                                                        <option>MALE</option>
                                                        <option>FEMALE</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input id="address" name="address" type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="age">Age *</label>
                                                    <input id="age" name="age" type="text"  maxlength="3" class="form-control required number">
                                                </div>
                                                <p>(*) Mandatory</p>
                                            </section>
                                            <h1>Finish</h1>
                                            <section>
                                                <div class="form-group">
                                                    <label>Home number</label>
                                                    <input type="text" class="form-control" id="phone" data-mask="(999) 999-9999" name="phone" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Personal number</label>
                                                    <input type="text" class="form-control" id="phone" data-mask="(999) 999-9999" name="phone" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alternate number</label>
                                                    <input type="text" class="form-control" id="phone" data-mask="(999) 999-9999" name="phone" placeholder="">
                                                </div>
                                                <h2 class="hidden">&nbsp;</h2>
                                                <span>Terms and Conditions</span>
                                                <div class="pos-rel p-l-30">
                                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="pos-rel p-l-30 required">
                                                    <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                                </div>
                                            </section>
                                        </form>
                                        <!-- END FORM WIZARD WITH VALIDATION --> </div>
                                </div>
                                <!--main content end--> </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="help" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Form Wizard With Content
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--main content-->
                                <div class="row">
                                    <div id="form-wizard">
                                        <h3>Keyboard</h3>
                                        <section>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas arcu sem, hendrerit a tempor quis,
                                                sagittis accumsan tellus. In hac habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus.
                                                Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                                        </section>
                                        <h3>Effects</h3>
                                        <section>
                                            <p> Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque.
                                                In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum
                                                dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur.
                                                In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam.
                                                Donec non pulvinar urna. Aliquam id velit lacus.</p>
                                        </section>
                                        <h3>Pager</h3>
                                        <section>
                                            <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo,
                                                pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                                                Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris
                                                venenatis.</p>
                                        </section>
                                    </div>
                                </div>
                                <!--main content end--> </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content --> 
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script src="{{ asset('assets/vendors/daterangepicker/moment.min.js') }}" ></script>
    <script src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.steps.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.validate.min.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/form_wizard.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/blank.js') }}"  type="text/javascript"></script>
    
@stop