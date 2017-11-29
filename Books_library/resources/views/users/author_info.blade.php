@extends('layouts.users')
@section('title','authors_user')
@section('content')
					<div id="content">
					          <div class="scroll">
					            <div class="scrollContainer">
					              

					              @if(Session::has('message'))
					<div class="alert alert-info">
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