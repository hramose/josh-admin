@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Multiple File Upload
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link rel="stylesheet" href="{{ asset('assets/css/pages/blueimp-gallery.min.css') }}" />
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/jQuery-File-Upload/css/jquery.fileupload.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jQuery-File-Upload/css/jquery.fileupload-ui.css') }}" />
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/vendors/jQuery-File-Upload/css/jquery.fileupload-noscript.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/jQuery-File-Upload/css/jquery.fileupload-ui-noscript.css') }}" />
    </noscript>
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>Multiple File Uplaod</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="active">Gallery</li>
                    <li>Multiple File Upload</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Multiple File Uplaod
                                </h4>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <blockquote>
                                        <p>
                                            File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery.
                                            <br>Supports cross-domain, chunked and resumable file uploads and client-side image resizing.
                                            <br>Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.
                                        </p>
                                    </blockquote>
                                    <form id="fileupload" action="#" method="POST" enctype="multipart/form-data">
                                        <!-- Redirect browsers with JavaScript disabled to the origin page -->
                                        <noscript>
                                            <input type="hidden" name="redirect" value="">
                                        </noscript>
                                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                        <div class="row fileupload-buttonbar">
                                            <div class="col-lg-7">
                                                <!-- The fileinput-button span is used to style the file input field as button -->
                                                <span class="btn btn-success fileinput-button">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                    <span>Add files...</span>
                                                    <input type="file" name="files[]" multiple>
                                                </span>
                                                <button type="submit" class="btn btn-primary start">
                                                    <i class="glyphicon glyphicon-upload"></i>
                                                    <span>Start upload</span>
                                                </button>
                                                <button type="reset" class="btn btn-warning cancel">
                                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                                    <span>Cancel upload</span>
                                                </button>
                                                <button type="button" class="btn btn-danger delete">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                    <span>Delete</span>
                                                </button>
                                                <!-- The global file processing state -->
                                                <span class="fileupload-process"></span>

                                                <!-- The global progress state -->
                                                <div class="col-lg-5 fileupload-progress fade">
                                                    <!-- The global progress bar -->
                                                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                        <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                                    </div>
                                                    <!-- The extended global progress state -->
                                                    <div class="progress-extended">&nbsp;</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- The table listing the files available for upload/download -->
                                        <table role="presentation" class="table table-striped">
                                            <tbody class="files"></tbody>
                                        </table>
                                        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                                            <div class="slides"></div>
                                            <h3 class="title"></h3>
                                            <a class="prev">‹</a>
                                            <a class="next">›</a>
                                            <a class="close">×</a>
                                            <a class="play-pause"></a>
                                            <ol class="indicator"></ol>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="gears" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Demo Notes
                                </h3>
                            </div>
                            <div class="panel-body">
                                <ul>
                                    <li>
                                        The maximum file size for uploads in this demo is
                                        <strong>5 MB</strong>
                                        (default file size is unlimited).
                                    </li>
                                    <li>
                                        Only image files (
                                        <strong>JPG, GIF, PNG</strong>
                                        ) are allowed in this demo (by default there is no file type restriction).
                                    </li>
                                    <li>
                                        Uploaded files will be deleted automatically after
                                        <strong>5 minutes</strong>
                                        (demo setting).
                                    </li>
                                    <li>
                                        You can
                                        <strong>drag &amp; drop</strong>
                                        files from your desktop on this webpage 
                                    </li>                                    
                                    <li>
                                        Built with Twitter's
                                        <a href="http://twitter.github.com/bootstrap/">Bootstrap</a>
                                        CSS framework and Icons from
                                        <a href="http://glyphicons.com/">Glyphicons</a>.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/vendor/jquery.ui.widget.js') }}" ></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/tmpl.min.js') }}" ></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/load-image.min.js') }}" ></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/canvas-to-blob.min.js') }}" ></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/jquery.blueimp-gallery.min.js') }}" ></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/jquery.iframe-transport.js') }}" ></script>
    <!-- The basic File Upload plugin -->
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/jquery.fileupload.js') }}" ></script>
    <!-- The File Upload processing plugin -->
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/jquery.fileupload-process.js') }}" ></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/jquery.fileupload-image.js') }}" ></script>
    <!-- The File Upload audio preview plugin -->
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/jquery.fileupload-audio.js') }}" ></script>
    <!-- The File Upload video preview plugin -->
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/jquery.fileupload-video.js') }}" ></script>
    <!-- The File Upload validation plugin -->
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/jquery.fileupload-validate.js') }}" ></script>
    <!-- The File Upload user interface plugin -->
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/jquery.fileupload-ui.js') }}" ></script>
    <script src="{{ asset('assets/vendors/jQuery-File-Upload/js/main.js') }}" ></script>
     <!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
    <!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script> 
    
@stop
