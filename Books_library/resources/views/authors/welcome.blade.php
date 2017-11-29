<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 
    Template 2018 Notebook
    http://www.tooplate.com/view/2018-notebook
-->
<title>Library_book</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
    
<div id="slider">
    <div id="tooplate_wrapper">
        <div id="tooplate_sidebar">
            <div id="header">
                <h1><a href="#"><img src="images/tooplate_logo.png" title="Notebook Template - tooplate.com" alt="Notebook free html template" /></a></h1>
            </div>    
            <div id="menu">
            <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged as
                     @if(Auth::guest())
                Guest
              
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                @else
                {{Auth::user()->name}}
             <h3>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Изход</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    </a>
              </h3>
                @endif
             </div>
                <ul class="navigation">
                    <li><a href="{{route('home')}}" class="selected menu_01">Home1</a></li>
                    <li><a href="#aboutus" class="menu_02">About Us</a></li>
                    <li><a href="#services" class="menu_03">Services</a></li>
                    <li><a href="#gallery" class="menu_04">Gallery</a></li>
                    <li><a href="#contactus" class="menu_05">Contact</a></li>
                </ul>
            </div>
        </div> <!-- end of sidebar -->  
    
        <div id="content">
          <div class="scroll">
            <div class="scrollContainer">
              <div class="panel" id="home">
                <div class="content_section">
                  <h2>Welcome to LIBRARY</h2>
                  <img src="images/books1.jpg" alt="Image 01" class="image_wrapper image_fl" />
                  <p><em>Nullam at erat ipsum, quis tincidunt mauris. Nunc sit amet sapien eget eros iaculis hendrerit quis a enim. Vestibulum at leo ante, vel auctor velit.</em></p>
                  <p>Notebook is designed by <a rel="nofollow" href="http://www.tooplate.com">Free HTML Templates</a>. Credits go to <a rel="nofollow" href="http://www.photovaco.com">Free Photos</a> for photos, <a rel="nofollow" href="http://jwloh.deviantart.com/art/Aquaticus-Social-91014249">jwloh</a> for Aquaticus social icons, and <a rel="nofollow" href="http://www.icojoy.com">icojoy.com</a> for icons used in this template. Morbi rutrum euismod elit, nec adipiscing ante sodales sed. Cras accumsan congue turpis a luctus.</p>
                </div>
                
              
<!-- ..................... -->
              </div>
            </div>
          </div><!-- end of scroll -->
        </div>
    </div> <!-- end of content -->
</div>

<div id="footer">
    
    <div id="social_box">
        <a href="#"><img src="images/facebook.png" alt="facebook" /></a>
        <a href="#"><img src="images/flickr.png" alt="flickr" /></a>
        <a href="#"><img src="images/myspace.png" alt="myspace" /></a>
        <a href="#"><img src="images/twitter.png" alt="twitter" /></a>
        <a href="#"><img src="images/youtube.png" alt="youtube" /></a>
    </div>
    
    <div id="footer_left">
        
        Copyright © 2017 <a href="#">DANY ZEHOV</a><br />
        Designed by <a href="#">Vratsa Software </a><br />
       
    </div>
    
    <div class="cleaner"></div>
</div>
</body>
</html>