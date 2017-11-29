@extends('layouts.users')
@section('title','authors')
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
				<div class="col-md-12" id="author">
					<h2>Автори и книги</h2>
					<a class="btn btn-primary" href="{{route('user.show','count')}}"><i class="fa fa-plus" aria-hidden="true"></i>  по брой на книги </a>
					<a class="btn btn-primary" href="{{route('user.show','days')}}"><i class="fa fa-plus" aria-hidden="true"></i> брой дни </a>
					<table class="table table-hover">
						<thead>
							<tr>
								<th> Име</th>
								<th>Дата на раждане</th>
								<th> Държава</th>
								<th> Брой книги</th>
								<th>Брой дни</th>
							</tr>
						</thead>
						<tbody>
								@foreach($authors as $author)
							<tr>
								<td>
									<a href="{{route('show_author',$author->id)}}">
											{{$author->author_name}}
									</a>
								
								</td>
								<td>{{$author->born_date}}</td>
								<td>{{$author->country}}</td>
								<td>{{$author->books_count}}</td>
								<td>{{round($author->pages_count/Auth::user()->speed,2)}}</td>
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