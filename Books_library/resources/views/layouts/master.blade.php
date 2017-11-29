<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title')</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="{{asset('css/tooplate_style.css')}}" rel="stylesheet" type="text/css" />
<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">  -->
<link rel="stylesheet" href="{{asset('css/coda-slider.css')}}" type="text/css" charset="utf-8" />

<<!-- script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script> -->

</head>
<body>
    
<div id="slider">
    <div id="tooplate_wrapper">
        <div id="tooplate_sidebar">
            <div id="header">
                <h1><a href="#"><img src="{{asset('images')}}/tooplate_logo.png" title="Notebook Template - tooplate.com" alt="Notebook libray" /></a></h1>
            </div>    
             @include('includes.menu_admin')
        </div> <!-- end of sidebar -->  
              @yield('content')
     @include('includes.footer')


</body>
</html>