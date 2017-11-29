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
					<h2>Kниги в Библиотеката</h2>
					<table class="table table-hover">
						<thead>
							<tr>
								<th><i class="fa fa-user" aria-hidden="true"></i> Име на книгата</th>
								<th><i class="fa fa-envelope" aria-hidden="true"></i> Брой страници</th>
								<th><i class="fa fa-sliders" aria-hidden="true"></i> Дни</th>
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
								<td>{{round($book->total_pages/Auth::user()->speed,2)}}</td>
								<td>
									
									<form action="{{route('read.store')}}" method="POST" role="form" enctype="multipart/form-data">
										{{csrf_field()}}
										<input type="hidden" name="book_id" value="{{$book->id}}">
										<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
										<div class="form-group">
										<input type="hidden"  name="read_pages" value="0">
										</div>
										<button type="submit" class="btn btn-primary">добави</button>
									</form>

								</td>
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