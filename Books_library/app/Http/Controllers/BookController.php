<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Authors;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $books = Books::all();
        return view('books.index',compact('books','author'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.books');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $books_count=Books::where('author_id','=',$request->author_id)->get()->count();
        $pages_count=Books::where('author_id','=',$request->author_id)->get()->sum('total_pages');
        $author = Authors::findOrFail($request->author_id);
        $book = Books::create([
            'book_name'      => $request->book_name,
            'author_id'     =>$request->author_id,
            'total_pages'  => $request->total_pages,
            'book_info'=>$request->book_info,
            'book_link'=>$request->book_link,
            
        ]);

        $author->books_count=$books_count+1;
        $author->pages_count=$pages_count;
        $author->save();

         $book->save();
        return redirect()->route('authors.show',$request->author_id)->with('message', 'Успешно редактирахте книга ' . $book->book_name . '.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {       
         $book = Books::findOrFail($id);
         $author=Authors::findOrFail($book->author_id);
    

         return view('users.book_info', ['book' => $book,'author'=>$author]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Books::findOrFail($id);
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Books::findOrFail($id);
         $book->book_name = $request->book_name;
         $book->total_pages = $request->total_pages;
         $book->book_info = $request->book_info;
        $book->book_link= $request->book_link;



         $book->save();
        return redirect()->route('authors.index')->with('message', 'Успешно редактирахте книга ' . $book->book_name . '.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $book = Books::findOrFail($id);
           $book->delete();
        return redirect()->route('authors.index')->with('message', 'Успешно изтрихте книга ' . $book->book_name . '.');
    }
}
