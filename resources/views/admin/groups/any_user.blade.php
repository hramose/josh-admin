@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Admin or User
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
        <li>Groups</li>
        <li class="active">Any user</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            @if($userAccess === 'admin')
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
                        <h4>You have logged in as admin user</h4>
                        <strong>Want to see what it displays for other users?
                        <a href="{{ route('logout') }}">Click here to Logout</a> and login with email 'user@user.com' and password 'pass'</strong>
                    </div>
                </div>
            @else
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white" style="width: 16px; height: 16px;"></i>
                            Other User
                        </h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>You are not logged in as admin user but as other user</h4>
                        <strong>Want to see what it displays for admin users?
                            <a href="{{ route('logout') }}">Click here to Logout</a> and login with email 'admin@admin.com' and password 'admin'</strong>
                    </div>
                </div>
            @endif

        </div>
    </div>
</section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop
