@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Add New User
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
    <link rel="stylesheet" href="vendors/wizard/jquery-steps/css/wizard.css">
    <link rel="stylesheet" href="vendors/wizard/jquery-steps/css/jquery.steps.css">
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Add New User</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>Users</li>
                    <li class="active">Add New User</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                   <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                 Add New User
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--main content-->
                                <div class="row">
                    
                                <div class="col-md-12">
                                  
                                    <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                    <form id="wizard-validation" action="#" method="POST">
                                        <h1>User Profile</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group">
                                                <label for="userName">User Name *</label>
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
                                            <div class="">
                                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                                <label for="acceptTerms">I have read terms and conditions</label>
                                            </div>
                                            
                                            <p>(*) Mandatory</p>
                                        </section>
                                        <h1>Profile Details</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group">
                                                <label for="name">First Name *</label>
                                                <input id="name" name="name" placeholder="Enter your First name"type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label for="surname">Last Name *</label>
                                                <input id="surname" name="surname" type="text" placeholder=" Enter your Last name" class="form-control required">
                                            </div>
                                            
                                             <div class="form-group">
                                                <label for="email">Gender</label>
                                              <select class="form-control" title="Select an account type...">
                                                <option>Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                               
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="age">Age *</label>
                                                <input id="age" name="age" maxlength="3" type="text" class="form-control required number">
                                            </div>
                                            <p>(*) Mandatory</p>
                                        </section>
                                        
                                        <h1>Finish</h1>

                                        <section>
                                        <div class="form-group">
                                            <label>Home Number</label>
                                            <input type="text" placeholder="Home number" class="form-control">
                                        </div>
                                       <div class="form-group">
                                           <label >Personal Number</label>
                                            <input type="text" placeholder="Personal number" class="form-control">
                                         </div>
                                         <div class="form-group">
                                              <label>Alternate Number</label>
                                             <input type="text" placeholder="Alternate number" class="form-control">
                                          </div>
                                                    
                                            <h2 class="hidden">&nbsp;</h2>
                                            <span>Terms and Conditions</span>
                                            <div class="pos-rel p-l-30">
                                                <input id="acceptTerms1" name="acceptTerms" type="checkbox" class="pos-rel p-l-30 required">
                                                <label for="acceptTerms1"> I agree with the Terms and Conditions.</label>
                                            </div>
                                        </section>
                                    </form>
                                    <!-- END FORM WIZARD WITH VALIDATION -->
                                </div>
                                </div>
                                <!--main content end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--row end-->
            </section>
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.steps.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wizard/jquery-steps/js/jquery.validate.min.js') }}" ></script>
    <script src="{{ asset('assets/js/pages/form_wizard.js') }}" ></script>
@stop
