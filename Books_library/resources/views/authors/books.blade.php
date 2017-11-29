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
							<h2>Информация за автора :{{$author->author_name}} </h2>
							<p>
								{{$author->author_info}}
							</p>
							<h2>{{$books_count}} Книги от автора :{{$author->author_name}}</h2>
						<table >
								<thead>
									<tr>
										<th> N</th>
										<th> Име на книгата</th>
										<th>Станици</th>
										<th>Информация</th>
									</tr>
								</thead>
								<tbody>
								@php
								$n=1;
								@endphp
									@foreach($books as $book)
										<tr>
											<td>{{$n}}</td>

											<td>
												<a href="#">
														{{$book->book_name}}
												</a>
											
											</td>
											<td>{{$book->total_pages}}</td>
											<td>{{$book->book_info}}</td>
											<td>
												<form action="{{route('book.destroy',$book->id)}}" method="POST">
													{{csrf_field()}}
													{{method_field("DELETE")}}
													<a class="btn btn-primary" href="{{route('book.edit',$book->id,$author->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i> Редакриране</a>
													<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Изтриване</button>
												</form>
											</td>
										</tr>
										@php
										$n=$n+1;
										@endphp
									@endforeach
								</tbody>
						</table>
							<h3>Добавяне на книга за автор {{$author->author_name}}</h3>
							<form action="{{route('book.store')}}" method="POST" role="form" enctype="multipart/form-data">
								<legend><i class="fa fa-user-plus" aria-hidden="true"></i> Нова книга</legend>
								{{csrf_field()}}
								<input type="hidden" name="author_id" value="{{$author->id}}">
								<div class="form-group">
									<label for="book_name">Име на книгата</label>
									<input type="text" class="form-control" id="book_name" name="book_name" value="{{old('book_name')}}">
								</div>
								<div class="form-group">
									<label for="born_date">Брой страници</label>
									<input type="number" class="form-control" id="total_pages" name="total_pages" value="{{old('total_pages')}}">
								</div>
								<div class="form-group">
									<label for="book_info">Информация за книгата</label>
									<textarea name="book_info"  class="form-control" id="book_info" name="book_info" >{{old('book_info')}}</textarea>
								</div
								<div class="form-group">
									<label for="book_link">File </label>
									<input type="text" class="form-control" id="book_link" name="book_link" value="{{old('book_link')}}">
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