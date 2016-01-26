@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Drop Zone
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link href="{{ asset('assets/vendors/dropzone-master/dropzone.css') }}" rel="stylesheet" type="text/css" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>File Drop Zone</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>Gallery</li>
                    <li class="active">File Drop Zone</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            This plugins works only on Latest Chrome, Firefox, Safari, Opera & Internet Explorer 10.
                        </div>
                        <!-- First Basic Table strats here-->
                        <div class="panel panel-info" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="upload-alt" data-size="20" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    File Drop Zone
                                </h3>
                            </div>
                            <div class="panel-body" style="padding:0px !important;">
                                <div class="col-md-12" style="padding:30px;">
                                    <form action="target" class="dropzone" id="myDropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script type="text/javascript" src="{{ asset('assets/vendors/dropzone-master/dropzone.js') }}" ></script>
    <script>
    var FormDropzone = function() {
        return {
            //main function to initiate the module
            init: function() {

                Dropzone.options.myDropzone = {
                    init: function() {
                        this.on("addedfile", function(file) {
                            // Create the remove button
                            var removeButton = Dropzone.createElement("<button>Remove file</button>");

                            // Capture the Dropzone instance as closure.
                            var _this = this;

                            // Listen to the click event
                            removeButton.addEventListener("click", function(e) {
                                // Make sure the button click doesn't submit the form:
                                e.preventDefault();
                                e.stopPropagation();

                                // Remove the file preview.
                                _this.removeFile(file);
                                // If you want to the delete the file on the server as well,
                                // you can do the AJAX request here.
                            });

                            // Add the button to the file preview element.
                            file.previewElement.appendChild(removeButton);
                        });
                    }
                }
            }
        };
    }();
    jQuery(document).ready(function() {

        FormDropzone.init();
    });
    </script>
    
@stop
