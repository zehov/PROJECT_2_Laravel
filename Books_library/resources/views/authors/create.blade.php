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
<link href="{{asset('css/tooplate_style.css')}}" rel="stylesheet" type="text/css" />
<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">  -->
<link rel="stylesheet" href="{{asset('css/coda-slider.css')}}" type="text/css" charset="utf-8" />

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
                <h1><a href="#"><img src="../images/tooplate_logo.png" title="Notebook Template - tooplate.com" alt="Notebook free html template" /></a></h1>
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
                    <li><a href="#home" class="selected menu_01">Home</a></li>
                    <li><a href="#aboutus" class="menu_02">About Us</a></li>
                    <li><a href="#author" class="menu_03">Authors</a></li>
                    <li><a href="#gallery" class="menu_04">Gallery</a></li>
                    <li><a href="#contactus" class="menu_05">Contact</a></li>
                </ul>
            </div>
        </div> <!-- end of sidebar -->  
    
        <div id="content">
          <div class="scroll">
            <div class="scrollContainer">
              

              @if(Session::has('message'))
<div class="alert alert-info">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>Съобщение</strong> {{Session::get('message')}}
</div>
@endif
<!-- ============================================================= -->
<div class="row">
	<div class="col-md-8">
		@if($errors->any())
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			@foreach($errors->all() as $error)
			<p><strong>Грешка!</strong> {{$error}}</p>
			@endforeach
		</div>
		@endif
		<h2>Добавяне на aвтор</h2>
		<form action="{{route('authors.store')}}" method="POST" role="form" enctype="multipart/form-data">
			<legend><i class="fa fa-user-plus" aria-hidden="true"></i> Нов Автор</legend>
			{{csrf_field()}}
			<div class="form-group">
				<label for="author_name">Име</label>
				<input type="text" class="form-control" id="author_name" name="author_name" value="{{old('author_name')}}">
			</div>
			<div class="form-group">
				<label for="born_date">Дата на раждане</label>
				<input type="text" class="form-control" id="born_date" name="born_date" value="{{old('born_date')}}">
			</div>
			<div class="form-group">
				<label for="country">Държава</label>
				<input type="country" class="form-control" id="country" name="country" value="{{old('country')}}">
			</div>
			<div class="form-group">
				<label for="auctor_info">Биография</label>
				<textarea name="author_info"  class="form-control" id="author_info" name="author_info" >{{old('author_info')}}</textarea>
			</div>

			<button type="submit" class="btn btn-primary">Добави</button>
		</form>
	</div>
</div>
<!-- ================================================================= -->

          
          </div><!-- end of scroll -->
        </div>
    </div> <!-- end of content -->
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
        <a href="#"><img src="../images/facebook.png" alt="facebook" /></a>
        <a href="#"><img src="../images/flickr.png" alt="flickr" /></a>
        <a href="#"><img src="../images/myspace.png" alt="myspace" /></a>
        <a href="#"><img src="../images/twitter.png" alt="twitter" /></a>
        <a href="#"><img src="../images/youtube.png" alt="youtube" /></a>
    </div>
    
    <div id="footer_left">
        
        Copyright © 2017 <a href="#">DANY ZEHOV</a><br />
        Designed by <a href="#">Vratsa Software </a><br />
       
    </div>
    
    <div class="cleaner"></div>
</div>
</body>
</html>
