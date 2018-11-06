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
    {{Html::style('vendors/animate.css/animate.min.css')}}
    {{Html::style('build/css/custom.min.css')}}

    @yield('page_css')

</head>

<body class="login">
    @yield('main')
    @yield('page_script')
</body>
</html>
