@extends('layouts.master')
@section('title','books_admin')
@section('content')
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
							<h2>Информация за атора и неговите книги proba</h2>
							<form action="{{route('book.store')}}" method="POST" role="form" enctype="multipart/form-data">
								<legend><i class="fa fa-user-plus" aria-hidden="true"></i> Нова книга</legend>
								{{csrf_field()}}
								<div class="form-group">
									<label for="book_name">Име на книгата</label>
									<input type="text" class="form-control" id="book_name" name="book_name" value="{{old('book_name')}}">
								</div>
								<div class="form-group">
									<label for="author_name">Автор на книгата</label>
									<input type="number" class="form-control" id="author_id" name="author_id" value="{{old('author_id')}}">
								</div>
								<div class="form-group">
									<label for="born_date">Брой страници</label>
									<input type="number" class="form-control" id="total_pages" name="total_pages" value="{{old('total_pages')}}">
								</div>
								<button type="submit" class="btn btn-primary">Добави</button>
							</form>
						</div>
					</div>
					<!-- ================================================================= -->

					          
					          </div><!-- end of scroll -->
					        </div>
					    </div> <!-- end of content -->

@endsection