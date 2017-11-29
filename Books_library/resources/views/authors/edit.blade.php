@extends('layouts.master')
@section('title','authors')
@section('content')
<div id="content">
    <div class="scroll">
         <div class="scrollContainer">
              @if(Session::has('message'))
				<div class="alert alert-info">
					<strong>Съобщение</strong> {{Session::get('message')}}
				</div>
			@endif

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
					<h2>Редактиране на автор {{$author->author_name}}</h2>
					<form action="{{route('authors.update', $author->id)}}" method="POST" role="form" enctype="multipart/form-data">
						{{csrf_field()}}
						{{method_field('PUT')}}
						<div class="form-group">
							<label for="author_name">Име</label>
							<input type="text" class="form-control" id="author_name" name="author_name" value="{{$author->author_name}}">
						</div>
						<div class="form-group">
							<label for="born_date">Дата на раждане</label>
							<input type="text" class="form-control" id="born_date" name="born_date" value="{{$author->born_date}}">
						</div>
						<div class="form-group">
							<label for="country">Държава</label>
							<input type="country" class="form-control" id="country" name="country" value="{{$author->country}}">
						</div>
						<div class="form-group">
							<label for="auctor_info">Биография</label>
							<textarea name="author_info"  class="form-control" id="author_info" name="author_info" >{{$author->author_info}}</textarea>
						</div>
						<button type="submit" class="btn btn-primary">Редактирай</button>
					</form>
				</div>
			</div>
 		</div>
   </div><!-- end of scroll -->
</div> <!-- end of content --> 
@endsection