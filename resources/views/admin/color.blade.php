@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Color Picker
@parent
@stop

{{-- page level styles --}}
@section('header_styles')    
    
<link href="{{ asset('assets/vendors/jquery-colorpickersliders/jquery-colorpickersliders/jquery.colorpickersliders.css') }}" rel="stylesheet" type="text/css" media="all" />
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <!--section starts-->
                <h1>Color picker slider</h1>
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
                    <li class="active">Color picker slider</li>
                </ol>
            </section>
            <!--section ends-->
            <section class="content">
                <!--main content-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="camera-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Color Picker Slider
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!-- Color Picker -->
                                <div class="form-group">
                                    <span class="demo1"></span>
                                    <p>
                                        Update color from code:
                                        <a class="btn btn-default updatecolor" data-updatecolor="hsl(0,100%,50%)">hsl(0,100%,50%)</a>
                                        <a class="btn btn-default updatecolor" data-updatecolor="rgba(0,255,0,0.5)">rgba(0,255,0,0.5)</a>
                                        <a class="btn btn-default updatecolor" data-updatecolor="blue">blue</a>
                                        <a class="btn btn-default updatecolor" data-updatecolor="#ffff00">#ffff00</a>
                                        <a class="btn btn-default updatecolor" data-updatecolor="transparent">transparent</a>
                                    </p>
                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="gear" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    HSL Color Picker
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!-- Color Picker -->
                                <div class="form-group">
                                    <span class="hsl-demo"></span>
                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="spinner-seven" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    RGB Color Picker
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!-- Color Picker -->
                                <div class="form-group">
                                    <span class="rgb-demo"></span>
                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>
                        <!--ends-->
                    </div>
                    <!--col-md-6 ends-->
                    <div class="col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="share" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    CIE Lch Color Picker
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body" style="padding-top:30px; padding-bottom-30px;">
                                <!-- Color Picker -->
                                <div class="form-group">
                                    <span class="cielch-demo"></span>
                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>
                        <!--ends-->
                        <!--col-md-6-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="biohazard" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Color picker onchange()
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!-- Color Picker -->
                                <div class="form-group">
                                    <input type="text" class="onchange-example" data-color-format="hex" value="GreenYellow">
                                    <span class="onchange-example" style="padding:3px;border:1px solid #ccc;">this span is updated on change</span>
                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>
                        <!--col-md-6-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="location" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Color picker in a popup &amp; Popup on any element
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body" style="padding-top:30px; padding-bottom-30px;">
                                <!-- Color Picker -->
                                <div class="form-group">
                                    <label>Color picker popup</label>
                                    <input type="text" class="a-popup" data-color-format="hex" value="GreenYellow">
                                    <small>
                                        Hint: you can type in any CSS color (even named ones, like yellow).
                                    </small>
                                </div>
                                <div class="form-group">
                                    <input id="color" type="text" class="demo-popup" value="#56B29A" data-color-format="hex">
                                    <button type="button" class="demo-popup">button</button>
                                    <span class="demo-popup">span</span>
                                    <a class="demo-popup">link</a>
                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>

                        <!--ends-->
                    </div>
                    <!--col-md-6 ends-->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="leaf" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    Color picker onchange()
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!-- Color Picker -->
                                <div class="form-group">
                                    <input type="text" class="full-demo-input" data-color-format="hsl">
                                    <input type="text" class="full-demo-input" data-color-format="hex">
                                    <input type="text" class="full-demo full-demo-input" data-color-format="rgb">
                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>
                        <!--ends-->
                    </div>
                </div>
                <!--main content ends-->
            </section>
            <!-- content -->
        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')
    
    <!--color picker slider-->
    <script src="{{ asset('assets/vendors/jquery-colorpickersliders/libraries/tinycolor.js') }}" ></script>
    <script src="{{ asset('assets/vendors/jquery-colorpickersliders/jquery-colorpickersliders/jquery.colorpickersliders.js') }}" ></script>
    <script>
    $(".demo1").ColorPickerSliders({
        flat: true,
        color: 'orange',
        order: {
            cie: 1,
            hsl: 2,
            opacity: 3,
            preview: 4
        },
        labels: {
            cielightness: 'Human perceived lightness',
            ciechroma: 'CIE Chroma',
            ciehue: 'CIE Hue'
        }
    });
    $('.updatecolor').on('click', function(e) {
        $(".demo1").trigger('colorpickersliders.updateColor', $(this).data("updatecolor"));
    });
    $(".a-popup").ColorPickerSliders({
        order: {
            hsl: 1
        }
    });
    $(".hsl-demo").ColorPickerSliders({
        flat: true,
        previewformat: 'hsl',
        order: {
            hsl: 1,
            preview: 2
        }
    });
    $(".rgb-demo").ColorPickerSliders({
        flat: true,
        swatches: ["rgb(174, 156, 227)", "rgb(29, 179, 229)", "rgb(54, 185, 163)", "rgb(144, 176, 105)", "rgb(224, 148, 110)", "rgb(233, 137, 168)"],
        order: {
            rgb: 1,
            opacity: 2,
            preview: 3
        },
        labels: {
            rgbred: 'Red',
            rgbgreen: 'Green',
            rgbblue: 'Blue'
        }
    });
    $(".cielch-demo").ColorPickerSliders({
        flat: true,
        customswatches: "different-swatches-groupname",
        swatches: ["rgb(174, 156, 227)", "rgb(29, 179, 229)", "rgb(54, 185, 163)", "rgb(144, 176, 105)", "rgb(224, 148, 110)", "rgb(233, 137, 168)"],
        order: {
            cie: 1,
            preview: 2
        }
    });
    $('.demo-popup').ColorPickerSliders({
        previewontriggerelement: true,
        flat: false,
        color: '#cf966f',
        customswatches: false,
        swatches: ['red', 'green', 'blue'],
        order: {
            rgb: 1,
            preview: 2
        }
    });
    $("input.onchange-example").ColorPickerSliders({
        order: {
            hsl: 1
        },
        onchange: function(container, color) {
            var span = $("span.onchange-example");

            span.css("background-color", color.tiny.toRgbString());

            if (color.cielch.l < 60) {
                span.css("color", "white");
            } else {
                span.css("color", "black");
            }
        }
    });
    $(".full-demo").ColorPickerSliders({
        flat: true,
        invalidcolorsopacity: 0,
        connectedinput: '.full-demo-input'
    });
    </script>
    
@stop
