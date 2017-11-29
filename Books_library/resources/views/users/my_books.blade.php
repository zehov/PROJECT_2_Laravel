@extends('layouts.users')
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
				<div class="col-md-12" id="author">
					<h2>Книги за четене</h2>
					<table class="table table-hover">
						<thead>
							<tr>
								<th><i class="fa fa-user" aria-hidden="true"></i> Име на книгата</th>
								<th><i class="fa fa-envelope" aria-hidden="true"></i> Брой страници</th>
								<th><i class="fa fa-sliders" aria-hidden="true"></i> До къде?</th>
								<th><i class="fa fa-sliders" aria-hidden="true"></i> Остават</th>
							</tr>
						</thead>
						<tbody>
								@foreach($books as $book)
							<tr>
								<td>
									<a href="{{ route('book.show', $book->id)}}">
											{{$book->book_name}}
									</a>
								
								</td>
								<td>{{$book->total_pages}}</td>
								<td>
									<form action="{{route('read.update',Auth::user()->id)}}" method="POST" role="form" enctype="multipart/form-data">
										{{csrf_field()}}
										{{method_field('PUT')}}
										<input type="hidden" name="book_id" value="{{$book->id}}">
										<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
										<div class="form-group">
										<label for="read_pages">Страница</label>
										<input type="number"  class="form-control" id="read_pages" name="read_pages" value="{{$book->read_pages}}">
										</div>
										<button type="submit" class="btn btn-primary">Промени</button>
									</form>
								</td>
								<td>{{$book->total_pages-$book->read_pages}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			</div>
          </div><!-- end of scroll -->
    </div> <!-- end of content -->

@endsection