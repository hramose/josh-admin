@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Blank Page
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
@stop


{{-- Page content --}}
@section('content')

<section class="content-header">
    <h1>Blank page</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Pages</li>
        <li class="active">Blank page</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white" style="width: 16px; height: 16px;"></i>
                        Admin User
                    </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                </div>
                <div class="panel-body">
                    <h4>This page is visible to only admin users</h4>
                    <strong>You can't even see this page in left menu, if you log in as some other user</strong>
                    <h3>Want to give a try?</h3>
                    <a href="{{ route('logout') }}">Click here to Logout</a> and login with email 'user@user.com' and password 'pass'</strong>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
