@extends('layouts.master')
@section('title','books_admin')
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
                            <h2>Редактиране на  книга</h2>
                            <form action="{{route('book.update',$book->id)}}" method="POST" role="form" enctype="multipart/form-data">
                             {{csrf_field()}}
                            {{method_field('PUT')}}
                                <div class="form-group">
                                    <label for="book_name">Име на книгата</label>
                                    <input type="text" class="form-control" id="book_name" name="book_name" value="{{$book->book_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="born_date">Брой страници</label>
                                    <input type="number" class="form-control" id="total_pages" name="total_pages" value="{{$book->total_pages}}">
                                </div>
                                <div class="form-group">
                                    <label for="book_info">Информация за книгата</label>
                                    <textarea name="book_info"  class="form-control" id="book_info" name="book_info" >{{$book->book_info}}</textarea>
                                </div
                                <div class="form-group">
                                    <label for="book_link">File </label>
                                    <input type="text" class="form-control" id="book_link" name="book_link" value="{{$book->book_link}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Добави</button>
                            </form>
                        </div>
                    </div>    
            </div>
        </div><!-- end of scroll -->
    </div> <!-- end of content -->

@endsection