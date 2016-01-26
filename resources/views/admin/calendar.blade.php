@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Calendar
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
    <link href="{{ asset('assets/vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/fullcalendar/css/fullcalendar.print.css') }}" rel="stylesheet"  media='print' type="text/css">
    <link href="{{ asset('assets/css/pages/calendar_custom.css') }}" rel="stylesheet" type="text/css" />
    <!--page level styles ends-->
@stop

{{-- Page content --}}
@section('content')

                <section class="content-header">
                    <h1>Calendar</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('dashboard') }}">
                                <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>Calendar</li>
                    </ol>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="box">
                                <div class="box-title">
                                    <h3>Draggable Events</h3>
                                    <div class="pull-right box-toolbar">
                                        <a href="#" class="btn btn-link btn-xs" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id='external-events'>
                                        <div class='external-event palette-warning'>Team Out</div>
                                        <div class='external-event palette-primary'>Product Seminar</div>
                                        <div class='external-event palette-danger'>Client Meeting</div>
                                        <div class='external-event palette-info'>Repeating Event</div>
                                        <div class='external-event palette-success'>Anniversary Celebrations</div>
                                        <p class="well no-border no-radius">
                                            <input type='checkbox' id='drop-remove' style="opacity:1 !important" />
                                            <label for='drop-remove'>remove after drop</label>
                                        </p>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal">Create event</a>
                                </div>
                            </div>
                            <!-- /.box --> </div>
                        <div class="col-md-9">
                            <div class="box">
                                <div class="box-body">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                            <!-- /.box --> </div>
                        <!-- /.col --> </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">
                                        <i class="fa fa-plus"></i>
                                        Create Event
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group">
                                        <input type="text" id="new-event" class="form-control" placeholder="Event">
                                        <div class="input-group-btn">
                                            <button type="button" id="color-chooser-btn" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                Type
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" id="color-chooser">
                                                <li>
                                                    <a class="palette-primary" href="#">Primary</a>
                                                </li>
                                                <li>
                                                    <a class="palette-success" href="#">Success</a>
                                                </li>
                                                <li>
                                                    <a class="palette-info" href="#">Info</a>
                                                </li>
                                                <li>
                                                    <a class="palette-warning" href="#">warning</a>
                                                </li>
                                                <li>
                                                    <a class="palette-danger" href="#">Danger</a>
                                                </li>
                                                <li>
                                                    <a class="palette-default" href="#">Default</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- /btn-group --> </div>
                                    <!-- /input-group --> </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger pull-right"  data-dismiss="modal">
                                        Close
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <button type="button" class="btn btn-success pull-left" id="add-new-event" data-dismiss="modal">
                                        <i class="fa fa-plus"></i>
                                        Add
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
        
        <script src="{{ asset('assets/vendors/fullcalendar/moment.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('assets/vendors/fullcalendar/fullcalendar.min.js') }}"  type="text/javascript"></script>
        <script src="{{ asset('assets/js/pages/calendar.js') }}"  type="text/javascript"></script>
@stop