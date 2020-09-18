

<!DOCTYPE html>
<html lang="tr">

<!-- Mirrored from maxnews.vikitheme.com/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Sep 2020 15:51:38 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageInfo["title"] }}</title>
    <meta name='description' content='{{ $pageInfo["description"] }}' />
    <meta name='keywords' content='{{ $pageInfo["keywords"] }}'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('public_assets/dist/assets/') }}/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('public_assets/dist/assets/') }}/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('public_assets/css/') }}/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('public_assets/css/') }}/bootstrap-theme.min.css">
    <link rel="stylesheet" id="themify-icons-css" href="{{ asset('public_assets/css/') }}/themify-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('public_assets/css/') }}/style.css">
    <link rel="stylesheet" href="{{ asset('public_assets/css/') }}/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('public_assets/css/') }}/fonts.css">
    <link rel="stylesheet" href="{{ asset('public_assets/css/') }}/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public_assets/css/') }}/custom.css">
    <link rel="shortcut icon" href="{{ asset('public_assets/logo/favicon/')}}/favicon-32x32.png">
</head>
<body onload="startTime()" class="visitor_scrollbar">
<!--Load Page-->
<div class="load-page">
    <div class="sk-cube-grid">

        <div class="sk-cube sk-cube1"></div>
        <div class="sk-cube sk-cube2"></div>
        <div class="sk-cube sk-cube3"></div>
        <div class="sk-cube sk-cube4"></div>
        <div class="sk-cube sk-cube5"></div>
        <div class="sk-cube sk-cube6"></div>
        <div class="sk-cube sk-cube7"></div>
        <div class="sk-cube sk-cube8"></div>
        <div class="sk-cube sk-cube9"></div>
    </div>
</div>

<!-- Mobile nav -->
@include('visitor.includes.menu_mobile')
<!-- End mobile menu -->


<div id="wrapper-container" class="site-wrapper-container">
    <header>
        <div class="vk-header-default">
            <div class="container-fluid">
                <div class="row">
                    @include('visitor.includes.header_top')

                    @include('visitor.includes.menu_desktop')
                </div>
            </div>
        </div>
    </header>

    <div id="main-content" class="site-main-content">
        <div id="home-main-content" class="site-home-main-content">

            {{-- @include('visitor.includes.slider') --}}

            <div id="vk-home-default-body">
              <div class="container">
                  <div class="row">
