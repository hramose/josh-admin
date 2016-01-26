@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Invoice
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Invoice</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="active">Extra</li>
                    <li class="active">Invoice</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content paddingleft_right15">
                <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="credit-card" data-size="20" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                                Invoice for purchase #33221
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12  col-sm-3 col-md-3 col-lg-3 pull-left">
                                    <div class="panel panel-primary height">
                                        <div class="panel-heading">Billing Details</div>
                                        <div class="panel-body"> <b>David Peere:</b>
                                            <br>
                                            1111 Army Navy Drive
                                            <br>
                                            Arlington
                                            <br>
                                            VA
                                            <br>
                                            <strong>22 203</strong>
                                            <br></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <div class="panel panel-success height">
                                        <div class="panel-heading">Payment Info</div>
                                        <div class="panel-body" style="padding:15px 0px 55px 22px;">
                                            <strong>Card Type:</strong>
                                            Visa
                                            <br>
                                            <strong>Card Number:</strong>
                                            ** 332
                                            <br>
                                            <strong>Exp Date:</strong>
                                            09/2020
                                            <br></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <div class="panel panel-info height">
                                        <div class="panel-heading hidden-sm">Order Preferences</div>
                                        <div class="panel-heading hidden-lg hidden-md hidden-xs">Order Pre</div>
                                        <div class="panel-body" style="padding:15px 0px 36px 22px;">
                                            <strong>Gift:</strong>
                                            No
                                            <br>
                                            <strong>Express Delivery:</strong>
                                            Yes
                                            <br>
                                            <strong>Insurance:</strong>
                                            No
                                            <br>
                                            <strong>Coupon:</strong>
                                            No
                                            <br></div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pull-right">
                                    <div class="panel panel-warning height">
                                        <div class="panel-heading">Shipping Address</div>
                                        <div class="panel-body">
                                            <strong>David Peere:</strong>
                                            <br>
                                            1111 Army Navy Drive
                                            <br>
                                            Arlington
                                            <br>
                                            VA
                                            <br>
                                            <strong>22 203</strong>
                                            <br></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <strong>Order summary</strong>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <td>
                                                            <strong>Item Name</strong>
                                                        </td>
                                                        <td class="text-center">
                                                            <strong>Item Price</strong>
                                                        </td>
                                                        <td class="text-center">
                                                            <strong>Item Quantity</strong>
                                                        </td>
                                                        <td class="text-right">
                                                            <strong>Total</strong>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Samsung Galaxy S5</td>
                                                        <td class="text-center">$900</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">$900</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Samsung Galaxy S5 Extra Battery</td>
                                                        <td class="text-center">$30</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-right">$30</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Screen protector</td>
                                                        <td class="text-center">$7</td>
                                                        <td class="text-center">4</td>
                                                        <td class="text-right">$28</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="highrow"></td>
                                                        <td class="highrow"></td>
                                                        <td class="highrow text-center">
                                                            <strong>Sub Total</strong>
                                                        </td>
                                                        <td class="highrow text-right">$958</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-center">
                                                            <strong>Shipping</strong>
                                                        </td>
                                                        <td class="emptyrow text-right">$20</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="emptyrow">
                                                            <i class="livicon" data-name="barcode" data-size="60" data-loop="true"></i>
                                                        </td>
                                                        <td class="emptyrow"></td>
                                                        <td class="emptyrow text-center">
                                                            <strong>Total</strong>
                                                        </td>
                                                        <td class="emptyrow text-right">$978</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pull-right" style="margin:10px 20px;">
                                <button type="button" class="btn btn-responsive button-alignment btn-info" data-toggle="button">
                                    <a style="color:#fff;" onclick="javascript:window.print();">
                                        Print
                                        <i class="livicon" data-name="printer" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    </a>
                                </button>
                                <button type="button" class="btn btn-responsive button-alignment btn-success" data-toggle="button">
                                    <a style="color:#fff;">
                                        Submit Your Invoice
                                        <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- content --> 
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
   
 
</body>

    </html>