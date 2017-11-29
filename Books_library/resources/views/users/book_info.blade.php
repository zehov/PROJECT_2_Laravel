@extends('layouts.users')
@section('title','books_user')
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
								@foreach($errors->all() as $error)
								<p><strong>Грешка!</strong> {{$error}}</p>
								@endforeach
							</div>
							@endif
							<h2>Информация за книгата :{{$book->book_name}} </h2>
							<p>{{$book->book_info}}</p>
						<table >
								<thead>
									<tr>
										<th> Име на книгата</th>
										<th>Автор</th>
										<th>Станици</th>
										<th>Свали за четене</th>
									</tr>
								</thead>
								<tbody>
										<tr>
											<td>{{$book->book_name}}</td>
											<td>{{$author->author_name}}</td>
											<td>{{$book->total_pages}}</td>
											<td>
												<a href="">{{$book->book_link}}</a>
											</td>
										</tr>
										
								</tbody>
						</table>
								
						</div>
					</div>
					<!-- ================================================================= -->

					          
					          </div><!-- end of scroll -->
					        </div>
					    </div> <!-- end of content -->

@endsection