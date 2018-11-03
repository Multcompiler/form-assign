<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    {{Html::style('vendors/bootstrap/dist/css/bootstrap.min.css')}}
    {{Html::style('vendors/font-awesome/css/font-awesome.min.css')}}
    {{Html::style('vendors/nprogress/nprogress.css')}}
    {{Html::style('vendors/iCheck/skins/flat/green.css')}}
    {{Html::style('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}
    {{Html::style('vendors/jqvmap/dist/jqvmap.min.css')}}
    {{Html::style('vendors/bootstrap-daterangepicker/daterangepicker.css')}}
    {{Html::style('build/css/custom.min.css')}}

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">


                <!-- sidebar menu -->
                @include('partials.side_bar')
                <!-- /sidebar menu -->

            </div>
        </div>

        <!-- top navigation -->
        @include('partials.top_nav')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

            @yield('main')

        </div>
        <!-- /page content -->

        <!-- footer content -->
        @include('partials.footer')
        <!-- /footer content -->
    </div>
</div>


{{Html::script('vendors/jquery/dist/jquery.min.js')}}
{{Html::script('vendors/bootstrap/dist/js/bootstrap.min.js')}}
{{Html::script('vendors/fastclick/lib/fastclick.js')}}
{{Html::script('vendors/nprogress/nprogress.js')}}
{{Html::script('vendors/Chart.js/dist/Chart.min.js')}}
{{Html::script('vendors/gauge.js/dist/gauge.min.js')}}
{{Html::script('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}
{{Html::script('vendors/iCheck/icheck.min.js')}}
{{Html::script('vendors/skycons/skycons.js')}}
{{Html::script('vendors/Flot/jquery.flot.js')}}
{{Html::script('vendors/Flot/jquery.flot.pie.js')}}
{{Html::script('vendors/Flot/jquery.flot.time.js')}}
{{Html::script('vendors/Flot/jquery.flot.stack.js')}}
{{Html::script('vendors/Flot/jquery.flot.resize.js')}}
{{Html::script('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}
{{Html::script('vendors/flot-spline/js/jquery.flot.spline.min.js')}}
{{Html::script('vendors/flot.curvedlines/curvedLines.js')}}
{{Html::script('vendors/DateJS/build/date.js')}}
{{Html::script('vendors/jqvmap/dist/jquery.vmap.js')}}
{{Html::script('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}
{{Html::script('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}
{{Html::script('vendors/moment/min/moment.min.js')}}
{{Html::script('vendors/bootstrap-daterangepicker/daterangepicker.js')}}
{{Html::script('build/js/custom.min.js')}}
</body>
</html>
