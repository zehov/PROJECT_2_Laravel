@extends('layouts.users')
@section('title','welcome')
@section('content')
    <div id="content">
        <div class="scroll">
            <div class="scrollContainer">
              <div class="panel" id="home">
	                <div class="content_section">
	                  <img src="images/books1.jpg" alt="Image 01" class="image_wrapper image_fl" />
	                  <p><em>Nullam at erat ipsum, quis tincidunt mauris. Nunc sit amet sapien eget eros iaculis hendrerit quis a enim. Vestibulum at leo ante, vel auctor velit.</em></p>
	                  <p>Notebook is designed by <a rel="nofollow" href="http://www.tooplate.com">Free HTML Templates</a>. Credits go to <a rel="nofollow" href="http://www.photovaco.com">Free Photos</a> for photos, <a rel="nofollow" href="http://jwloh.deviantart.com/art/Aquaticus-Social-91014249">jwloh</a> for Aquaticus social icons, and <a rel="nofollow" href="http://www.icojoy.com">icojoy.com</a> for icons used in this template. Morbi rutrum euismod elit, nec adipiscing ante sodales sed. Cras accumsan congue turpis a luctus.</p>
	                </div>
              </div> 

              	@if(Session::has('message'))
				<div class="alert alert-info">
					<strong>Съобщение</strong> {{Session::get('message')}}
				</div>
				@endif
			<div class="row">
				<div class="col-md-12" id="author">
				@if(Auth::guest())
                Гост , моля регистирай се за ползваш всички функции на приложението!         
                @else
                <h2>Здравей {{Auth::user()->name}}!</h2>
                <h3>Добре дошъл в БИБЛИОТЕКАТА</h3> 
                <p>Вашата скорост на четене е :{{Auth::user()->speed}} страници на ден.</p>
			
					<form action="{{route('user.update',Auth::user()->id )}}" method="POST" role="form" enctype="multipart/form-data">
						{{csrf_field()}}
						{{method_field('PUT')}}
						<div class="form-group">
						<label for="speed">Скорост на четене</label>
						<input type="number"  class="form-control" id="speed" name="speed" value='{{Auth::user()->speed}}'>
						</div>
						<button type="submit" class="btn btn-primary">Промени</button>
					</form>
				@endif	
				</div>
			</div>
			</div>
          </div><!-- end of scroll -->
    </div> <!-- end of content -->

@endsection




