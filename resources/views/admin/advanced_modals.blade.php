@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Advanced Modals | Josh Admin Temmplate
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link href="{{ asset('assets/vendors/modal/css/component.css') }}" rel="stylesheet" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Advanced Modals</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI features</a>
                    </li>
                    <li class="active">Advanced Modals</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="rocket" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    <strong>Advanced</strong>
                                    customized Modals
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body modal-panel">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>
                                            <strong>Fade and Slide</strong>
                                            effects
                                        </h3>
                                        <p>Simple modal with title and footer</p>
                                        <br>
                                        <button class="btn btn-effect btn-purple" data-modal="modal-1">Fade in &amp; Scale</button>
                                        <button class="btn btn-effect btn-purple" data-modal="modal-2">Slide in (right)</button>
                                        <button class="btn btn-effect btn-purple" data-modal="modal-3">Slide in (bottom)</button>
                                    </div>
                                    <div class="col-md-3">
                                        <h3>
                                            <strong>Flip and Rotate</strong>
                                            effects
                                        </h3>
                                        <p>
                                            You can customize the size of your modal. Just add the class
                                            <code>modal-lg</code>
                                            .
                                        </p>
                                        <button class="btn btn-effect btn-green1" data-modal="modal-8">3D Flip (horizontal)</button>
                                        <button class="btn btn-effect btn-green1" data-modal="modal-9">3D Flip (vertical)</button>
                                        <button class="btn btn-effect btn-green1" data-modal="modal-10">3D Sign</button>
                                        <button class="btn btn-effect btn-green1" data-modal="modal-14">3D Rotate Bottom</button>
                                        <button class="btn btn-effect btn-green1" data-modal="modal-15">3D Rotate In Left</button>
                                        <button class="btn btn-effect btn-green1" data-modal="modal-13">3D Slit</button>
                                    </div>
                                    <div class="col-md-3">
                                        <h3>
                                            <strong>Other</strong>
                                            effects
                                        </h3>
                                        <p>
                                            For fullwidth modal, add the class
                                            <code>modal-full</code>
                                            .
                                        </p>
                                        <br>
                                        <button class="btn btn-effect btn-orange" data-modal="modal-4">Newspaper</button>
                                        <button class="btn btn-effect btn-orange" data-modal="modal-5">Fall</button>
                                        <button class="btn btn-effect btn-orange" data-modal="modal-6">Side Fall</button>
                                        <button class="btn btn-effect btn-orange" data-modal="modal-7">Sticky Up</button>
                                        <button class="btn btn-effect btn-orange" data-modal="modal-11">Super Scaled</button>
                                    </div>
                                    <div class="col-md-3">
                                        <h3>
                                            <strong>Color</strong>
                                            variation
                                        </h3>
                                        <p>
                                            Like in a normal page, you can add class to make your modal responsive,
                                            <code>col-md-4</code>
                                            for example.
                                        </p>
                                        <button class="btn btn-effect btn-yellow" data-modal="modal-16">yellow</button>
                                        <button class="btn btn-effect btn-purple" data-modal="modal-17">purple</button>
                                        <button class="btn btn-effect btn-green" data-modal="modal-18">green</button>
                                        <button class="btn btn-effect btn-red" data-modal="modal-21">red</button>
                                        <button class="btn btn-effect btn-default" data-modal="modal-19">White</button>
                                        <button class="btn btn-effect btn-orange" data-modal="modal-20">orange</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--moddal dialog -->
                <div class="md-modal md-effect-1" id="modal-1">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-2" id="modal-2">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn  btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-3" id="modal-3">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-4" id="modal-4">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-5" id="modal-5">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-6" id="modal-6">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-7" id="modal-7">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-8" id="modal-8">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-9" id="modal-9">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-10" id="modal-10">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-11" id="modal-11">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-12" id="modal-12">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-13" id="modal-13">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-14" id="modal-14">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-15" id="modal-15">
                    <div class="md-content">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1" id="modal-16">
                    <div class="md-content md-content-yellow">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1" id="modal-17">
                    <div class="md-content md-content-purple">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1" id="modal-18">
                    <div class="md-content md-content-green">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1" id="modal-19">
                    <div class="md-content md-content-white">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1" id="modal-20">
                    <div class="md-content md-content-orange">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1" id="modal-21">
                    <div class="md-content md-content-red">
                        <h3>Modal Dialog</h3>
                        <div>
                            <p>
                                This is a modal window. You can do the following things with it:
                            </p>
                            <ul>
                                <li>
                                    <strong>Read:</strong>
                                    modal windows will probably tell you something important so don't forget to read what they say.
                                </li>
                                <li>
                                    <strong>Look:</strong>
                                    a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.
                                </li>
                                <li>
                                    <strong>Close:</strong>
                                    click on the button below to close the modal.
                                </li>
                            </ul>
                            <button class="btn btn-modal btn-default">Close me!</button>
                        </div>
                    </div>
                </div>
                <!--- end modals-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Extended Modals
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!-- BEGIN modal-->
                                <table class="table table-hover table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Responsive</td>
                                            <td>
                                                <a class="btn btn-success btn-large" data-toggle="modal" data-href="#responsive" href="#responsive">View Demo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Stackable</td>
                                            <td>
                                                <a class="btn btn-primary btn-large" data-toggle="modal" data-href="#stack1" href="#stack1">View Demo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ajax</td>
                                            <td>
                                                <a class="btn btn-warning btn-large" data-toggle="modal" data-href="#ajax-modal" href="#ajax-modal">View Demo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Static Background with Animation</td>
                                            <td>
                                                <a class="btn btn-danger btn-large" data-toggle="modal" data-href="#static" href="#static">View Demo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Full Width</td>
                                            <td>
                                                <a class="btn btn-info btn-large" data-toggle="modal" data-href="#full-width" href="#full-width">View Demo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Long Modals</td>
                                            <td>
                                                <a class="btn btn-default btn-large" data-toggle="modal" data-href="#long" href="#long">View Demo</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--- responsive model -->
                <div class="modal fade in" id="responsive" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Responsive</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Some More data</h4>
                                        <p>
                                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name1" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name2" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name3" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name4" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name5" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Some More data</h4>
                                        <p>
                                            <input id="name6" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name7" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name8" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name9" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name10" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                        <p>
                                            <input id="name41" name="name" type="text" placeholder="Your name" class="form-control">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END modal-->
                <!--- stack1 model -->
                <div class="modal fade bs-example-modal-sm in" id="stack1" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Stack One</h4>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                                <p>One fine body…</p>
                                <p>One fine body…</p>
                                <p>
                                    Name:
                                    <input id="name21" name="name" type="text" class="form-control">
                                </p>
                                <p>
                                    Password:
                                    <input id="name22" name="name" type="text" class="form-control">
                                </p>
                                <a class="btn btn-default" data-toggle="modal" href="#stack2">Launch modal</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn btn-primary">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- stack2 modal-->
                <div class="modal fade bs-example-modal-md in" id="stack2" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Stack two</h4>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                                <p>One fine body…</p>
                                <p>
                                    Name:
                                    <input id="name11" name="name" type="text" class="form-control">
                                </p>
                                <p>
                                    Password:
                                    <input id="name12" name="name" type="text" class="form-control">
                                </p>
                                <a class="btn btn-default" data-toggle="modal" href="#stack3">Launch modal</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn btn-primary">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END modal-->
                <!-- stack3 modal-->
                <div class="modal fade in" id="stack3" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Stack3</h4>
                            </div>
                            <div class="modal-body">
                                <p>One fine body…</p>
                                <p>
                                    Name:
                                    <input id="name13" name="name" type="text" class="form-control">
                                </p>
                                <p>
                                    Password:
                                    <input id="name14" name="name" type="text" class="form-control">
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn btn-primary">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ajax-modal modal-->
                <div class="modal fade in" id="ajax-modal" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">ajax-modal</h4>
                            </div>
                            <div class="modal-body">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab">Tab 1</a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab">Tab 2</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <p>This modal was loaded in via ajax</p>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <p>This is some other tab content</p>
                                    </div>
                                </div>
                                <button class="btn update">Update</button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn btn-primary">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- static modal-->
                <div class="modal fade in" id="static" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p>Would you like to continue with some arbitrary task?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                                <button type="button" data-dismiss="modal" class="btn btn-primary">Continue Task</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END modal-->
                <!-- fullwidth modal-->
                <div class="modal fade in" id="full-width" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Full Width</h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                    This modal will resize itself to the same dimensions as the container class.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin ipsum ac ante fermentum suscipit. In ac augue non purus accumsan lobortis id sed nibh. Nunc egestas hendrerit ipsum, et porttitor augue volutpat non. Aliquam erat volutpat. Vestibulum scelerisque lobortis pulvinar. Aenean hendrerit risus neque, eget tincidunt leo. Vestibulum est tortor, commodo nec cursus nec, vestibulum vel nibh. Morbi elit magna, ornare placerat euismod semper, dignissim vel odio. Phasellus elementum quam eu ipsum euismod pretium.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END modal-->
                <!-- long modal-->
                <div class="modal fade in" id="long" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">A Fairly Long Modal</h4>
                            </div>
                            <div class="modal-body">
                                <a class="btn btn-default" data-toggle="modal" href="#notlong" style="position: absolute; top: 50%; right: 12px">Not So Long Modal</a>
                                <img style="height: 800px" alt="image" src="http://i.imgur.com/KwPYo.jpg">
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END modal-->
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script src="{{ asset('assets/vendors/modal/js/classie.js') }}" ></script>
    <script src="{{ asset('assets/vendors/modal/js/modalEffects.js') }}" ></script>
    
@stop
