@extends('layouts.master')
@section('title','authors')
@section('content')
    <div id="content">
        <div class="scroll">
            <div class="scrollContainer">
              <div class="panel" id="home">
	                <div class="content_section">
	                  <h2>Добре дошли в Библиотеката</h2>
	                  <img src="images/books1.jpg" alt="Image 01" class="image_wrapper image_fl" />
	                  <p><em>Известен факт е, че читателя обръща внимание на съдържанието, което чете, а не на оформлението му. Свойството на Lorem Ipsum е, че до голяма степен има нормално разпределение на буквите и се чете по-лесно, за разлика от нормален текст на английски език като "Това е съдържание, това е съдържание". Много системи за публикуване и редактори на Уеб страници използват</em></p>
	                  
	                </div>
              </div> 

              	@if(Session::has('message'))
				<div class="alert alert-info">
					<strong>Съобщение</strong> {{Session::get('message')}}
				</div>
				@endif
			<div class="row">
				<div class="col-md-12" id="author">
					<h2>Автори и книги</h2>
					<a class="btn btn-primary" href="{{route('authors.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> Добавяне на автор</a>
					<a class="btn btn-primary" href="{{route('book.index')}}"><i class="fa fa-plus" aria-hidden="true"></i> Добавяне на книга</a>
					<table class="table table-hover">
						<thead>
							<tr>
								<th><i class="fa fa-user" aria-hidden="true"></i> Име</th>
								<th><i class="fa fa-envelope" aria-hidden="true"></i> Дата на раждане</th>
								<th><i class="fa fa-sliders" aria-hidden="true"></i> Държава</th>
							</tr>
						</thead>
						<tbody>
								@foreach($authors as $author)
							<tr>
								<td>
									<a href="{{ route('authors.show', $author->id)}}">
											{{$author->author_name}}
									</a>
								
								</td>
								<td>{{$author->born_date}}</td>
								<td>{{$author->country}}</td>
								<td>
									<form action="{{route('authors.destroy',$author->id)}}" method="POST">
										{{csrf_field()}}
										{{method_field("DELETE")}}
										<a class="btn btn-primary" href="{{route('authors.edit',$author->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i> Редакриране</a>
										<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Изтриване</button>
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




