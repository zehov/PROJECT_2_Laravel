@extends('layouts.master')
@section('title','books_all_admin')
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
							<h2>Kниги в Библиотеката </h2>
						<table >
								<thead>
									<tr>
										<th> N</th>
										<th> Име на книгата</th>
										<th>Станици</th>
										<th>Автор</th>
										<th>Описание</th>
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
												<a href="{{route('book.edit',$book->id)}}">
														{{$book->book_name}}
												</a>
											</td>
											<td>{{$book->total_pages}}</td>
											<td>{{$book->author->author_name}}</td>
											<td>{{$book->book_info}}</td>
										</tr>
										@php
										$n=$n+1;
										@endphp
									@endforeach
								</tbody>
						</table>
					</div>
				</div>          
			</div><!-- end of scroll -->
		</div>
	</div> <!-- end of content -->
@endsection