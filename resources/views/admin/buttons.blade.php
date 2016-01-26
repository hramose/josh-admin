@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Buttons
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
	<link rel="stylesheet" href="{{ asset('assets/css/pages/buttons.css') }}" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Buttons</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">UI Features</a>
                    </li>
                    <li class="active">Buttons</li>
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
                                    <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Basic Buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <button type="button" class="btn btn-responsive button-alignment btn-Primary" style="margin-bottom:7px;" data-toggle="button">Button 1</button>
                                <button type="button" class="btn btn-responsive button-alignment btn-success" style="margin-bottom:7px;" data-toggle="button">Button 2</button>
                                <button type="button" class="btn btn-responsive button-alignment btn-info" style="margin-bottom:7px;" data-toggle="button">Button 3</button>
                                <button type="button" class="btn btn-responsive button-alignment btn-warning" style="margin-bottom:7px;" data-toggle="button">Button 4</button>
                                <button type="button" class="btn btn-responsive button-alignment btn-danger" style="margin-bottom:7px;" data-toggle="button">Button 5</button>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Custom buttons
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="tags">
                                    <a href="#" class="success">CSS</a>
                                    <a href="#" class="primary">Java Script</a>
                                    <a href="#" class="info">jQuery</a>
                                    <a href="#" class="danger">HTML5</a>
                                    <a href="#" class="warning">CSS3</a>
                                    <a href="#" class="success">WORDPRESS</a>
                                    <a href="#" class="danger">ORACLE</a>
                                    <a href="#" class="info">ASP.Net</a>
                                    <a href="#" class="primary">C#</a>
                                    <a href="#" class="warning">JOOMLA</a>
                                    <a href="#" class="primary">JAVA</a>
                                    <a href="#" class="success">Bootstrap</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="eye-open" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Button Size
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="btn-group btn-group-lg">
                                    <button type="button" class="btn btn-default" style="margin-bottom:7px;">Button 1</button>
                                    <button type="button" class="btn btn-default" style="margin-bottom:7px;">Button 2</button>
                                    <button type="button" class="btn btn-default" style="margin-bottom:7px;">Button 3</button>
                                </div>
                                <br/>
                                <br/>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default" style="margin-bottom:7px;">Button 1</button>
                                    <button type="button" class="btn btn-default" style="margin-bottom:7px;">Button 2</button>
                                    <button type="button" class="btn btn-default" style="margin-bottom:7px;">Button 3</button>
                                </div>
                                <br/>
                                <br/>
                                <div class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-default">Button 1</button>
                                    <button type="button" class="btn btn-default">Button 2</button>
                                    <button type="button" class="btn btn-default">Button 3</button>
                                </div>
                                <br/>
                                <br/>
                                <div class="btn-group btn-group-xs">
                                    <button type="button" class="btn btn-default">Button 1</button>
                                    <button type="button" class="btn btn-default">Button 2</button>
                                    <button type="button" class="btn btn-default">Button 3</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="sky-dish" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    WELLS
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="well">Look, I'm in a well!</div>
                                    <div class="well well-sm">Look, I'm in a small well!</div>
                                    <div class="well well-lg">Look, I'm in a large well!</div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Breadcrumbs
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="bs-example">
                                    <ol class="breadcrumb">
                                        <li class="next">
                                            <a href="#">
                                                <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                                                Home
                                            </a>
                                        </li>
                                        <li class="next">
                                            <a href="#">UI Features</a>
                                        </li>
                                        <li>Pickers</li>
                                    </ol>
                                    <ul class="breadcrumb">
                                        <li class="next1">
                                            <a href="#">
                                                <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                                                Dashboard
                                            </a>
                                        </li>
                                        <li>Tables</li>
                                    </ul>
                                    <ul class="breadcrumb" style="margin-bottom: 5px;">
                                        <li class="next2">
                                            <a href="#">
                                                <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                                                Dashboard
                                            </a>
                                        </li>
                                        <li class="next2">
                                            <a href="#">Tables</a>
                                        </li>
                                        <li>Data Tables</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="legal" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Panels
                            </h3>
                            <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Panel primary</h3>
                                </div>
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. AtLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Panel success</h3>
                                </div>
                                <div class="panel-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </div>
                            </div>
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Panel warning</h3>
                                </div>
                                <div class="panel-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </div>
                            </div>
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Panel danger</h3>
                                </div>
                                <div class="panel-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Panel info</h3>
                                </div>
                                <div class="panel-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="piggybank" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Panel with Tabs
                            </h3>
                            <div class=" kal pull-right">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab">Tab 1</a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab">Tab 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">                                       
                            <div class="tab-content" id="slim1">
                                <div class="tab-pane text-justify active" id="tab1">
                                    <h4> This is Tab1</h4>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. AtLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. AtLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. AtLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                </div>
                                <div class="tab-pane text-justify" id="tab2">
                                    <h4> This is Tab2</h4>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                </div>
                            </div>                                        
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="sandglass" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Icon picker
                            </h3>
                            <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div id="wraper1">
                                <div class="row">
                                    <form method="post">
                                        <input type="text" name="someName" class="icon-picker" placeholder="Click on icon and then search........ " />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="trophy" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                Poll
                            </h3>
                            <span class="pull-right clickable">
                                <i class="glyphicon glyphicon-chevron-up"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="glyphicon glyphicon-hand-right"></span>
                                        Who will win this year Football?
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Brazil</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Netherlands</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">France</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Germany</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Others</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="panel-footer text-center">
                                    <button type="button" class="btn btn-primary btn-block btn-sm">Vote</button>
                                    <a href="#" class="small">View Result</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <!--icon picker-->
    <script type="text/javascript">
    // add this function to initialize
    $(function() {
        $(".icon-picker").iconPicker();
    });
    (function($) {

        $.fn.iconPicker = function(options) {

            var mouseOver = false;
            var $popup = null;
            var icons = new Array("adjust", "align-center", "align-justify", "align-left", "align-right", "arrow-down", "arrow-left", "arrow-right", "arrow-up", "asterisk", "backward", "ban-circle", "barcode", "bell", "bold", "book", "bookmark", "briefcase", "bullhorn", "calendar", "camera", "certificate", "check", "chevron-down", "chevron-left", "chevron-right", "chevron-up", "circle-arrow-down", "circle-arrow-left", "circle-arrow-right", "circle-arrow-up", "cloud", "cloud-download", "cloud-upload", "cog", "collapse-down", "collapse-up", "comment", "compressed", "copyright-mark", "credit-card", "cutlery", "dashboard", "download", "download-alt", "earphone", "edit", "eject", "envelope", "euro", "exclamation-sign", "expand", "export", "eye-close", "eye-open", "facetime-video", "fast-backward", "fast-forward", "file", "film", "filter", "fire", "flag", "flash", "floppy-disk", "floppy-open", "floppy-remove", "floppy-save", "floppy-saved", "folder-close", "folder-open", "font", "forward", "fullscreen", "gbp", "gift", "glass", "globe", "hand-down", "hand-left", "hand-right", "hand-up", "hd-video", "hdd", "header", "headphones", "heart", "heart-empty", "home", "import", "inbox", "indent-left", "indent-right", "info-sign", "italic", "leaf", "link", "list", "list-alt", "lock", "log-in", "log-out", "magnet", "map-marker", "minus", "minus-sign", "move", "music", "new-window", "off", "ok", "ok-circle", "ok-sign", "open", "paperclip", "pause", "pencil", "phone", "phone-alt", "picture", "plane", "play", "play-circle", "plus", "plus-sign", "print", "pushpin", "qrcode", "question-sign", "random", "record", "refresh", "registration-mark", "remove", "remove-circle", "remove-sign", "repeat", "resize-full", "resize-horizontal", "resize-small", "resize-vertical", "retweet", "road", "save", "saved", "screenshot", "sd-video", "search", "send", "share", "share-alt", "shopping-cart", "signal", "sort", "sort-by-alphabet", "sort-by-alphabet-alt", "sort-by-attributes", "sort-by-attributes-alt", "sort-by-order", "sort-by-order-alt", "sound-5-1", "sound-6-1", "sound-7-1", "sound-dolby", "sound-stereo", "star", "star-empty", "stats", "step-backward", "step-forward", "stop", "subtitles", "tag", "tags", "tasks", "text-height", "text-width", "th", "th-large", "th-list", "thumbs-down", "thumbs-up", "time", "tint", "tower", "transfer", "trash", "tree-conifer", "tree-deciduous", "unchecked", "upload", "usd", "user", "volume-down", "volume-off", "volume-up", "warning-sign", "wrench", "zoom-in", "zoom-out");
            var settings = $.extend({

            }, options);
            return this.each(function() {
                element = this;
                if (!settings.buttonOnly && $(this).data("iconPicker") == undefined) {
                    $this = $(this).addClass("form-control");
                    $wraper = $("<div/>", {
                        class: "input-group"
                    });
                    $this.wrap($wraper);

                    $button = $("<span class=\"input-group-addon pointer\"><i class=\"glyphicon  glyphicon-picture\"></i></span>");
                    $this.after($button);
                    (function(ele) {
                        $button.click(function() {
                            createUI(ele);
                            showList(ele, icons);
                        });
                    })($this);

                    $(this).data("iconPicker", {
                        attached: true
                    });
                }

                function createUI($element) {
                    $popup = $('<div/>', {
                        css: {
                            'top': $element.offset().top + $element.outerHeight() + 6,
                            'left': $element.offset().left
                        },
                        class: 'icon-popup'
                    })

                    $popup.html('<div class="ip-control"> \
                                              <ul> \
                                                <li><a href="javascript:;" class="btn" data-dir="-1"><span class="glyphicon  glyphicon-fast-backward"></span></a></li> \
                                                <li><input type="text" class="ip-search glyphicon  glyphicon-search" placeholder="Search" /></li> \
                                                <li><a href="javascript:;"  class="btn" data-dir="1"><span class="glyphicon  glyphicon-fast-forward"></span></a></li> \
                                              </ul> \
                                          </div> \
                                         <div class="icon-list"></div> \
                                         ').appendTo("body");


                    $popup.addClass('dropdown-menu').show();
                    $popup.mouseenter(function() {
                        mouseOver = true;
                    }).mouseleave(function() {
                        mouseOver = false;
                    });

                    var lastVal = "",
                        start_index = 0,
                        per_page = 30,
                        end_index = start_index + per_page;
                    $(".ip-control .btn", $popup).click(function(e) {
                        e.stopPropagation();
                        var dir = $(this).attr("data-dir");
                        start_index = start_index + per_page * dir;
                        start_index = start_index < 0 ? 0 : start_index;
                        if (start_index + per_page <= 210) {
                            $.each($(".icon-list>ul li"), function(i) {
                                if (i >= start_index && i < start_index + per_page) {
                                    $(this).show();
                                } else {
                                    $(this).hide();
                                }
                            });
                        } else {
                            start_index = 180;
                        }
                    });

                    $('.ip-control .ip-search', $popup).on("keyup", function(e) {
                        if (lastVal != $(this).val()) {
                            lastVal = $(this).val();
                            if (lastVal == "") {
                                showList(icons);
                            } else {
                                showList($element, $(icons)
                                    .map(function(i, v) {
                                        if (v.toLowerCase().indexOf(lastVal.toLowerCase()) != -1) {
                                            return v
                                        }
                                    }).get());
                            }

                        }
                    });
                    $(document).mouseup(function(e) {
                        if (!$popup.is(e.target) && $popup.has(e.target).length === 0) {
                            removeInstance();
                        }
                    });

                }

                function removeInstance() {
                    $(".icon-popup").remove();
                }

                function showList($element, arrLis) {
                    $ul = $("<ul>");

                    for (var i in arrLis) {
                        $ul.append("<li><a href=\"#\" title=" + arrLis[i] + "><span class=\"glyphicon  glyphicon-" + arrLis[i] + "\"></span></a></li>");
                    };

                    $(".icon-list", $popup).html($ul);
                    $(".icon-list li a", $popup).click(function(e) {
                        e.preventDefault();
                        var title = $(this).attr("title");
                        $element.val("glyphicon glyphicon-" + title);
                        removeInstance();
                    });
                }

            });
        }

    }(jQuery));
    </script>
    <script type="text/javascript">
    $('#slim1').slimscroll({
        height: '100px',
        size: '3px',
        color: '#D84A38',

        opacity: 1

    });
    </script>
    
@stop
