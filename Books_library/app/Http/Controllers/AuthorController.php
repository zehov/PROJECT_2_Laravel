<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Authors;
use App\Books;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$arbiters = User::where('role', '=', 'arbiter')->get();
        $authors=Authors::all();
        return view('authors.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $author = Authors::create([
            'author_name'      => $request->author_name,
            'born_date'     => $request->born_date,
            'country'  => $request->country,
            'author_info'=>$request->author_info,
            
        ]);


         $author->save();
        return redirect()->route('authors.index')->with('message', 'Успешно добавихте автор ' . $author->name . '.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books=Books::where('author_id','=',$id)->get();
        $books_count=Books::where('author_id','=',$id)->get()->count();
        $author = Authors::findOrFail($id);

         return view('authors.books', ['author' => $author,'books'=>$books,'books_count'=>$books_count]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Authors::findOrFail($id);
        return view('authors.edit', ['author' => $author]);
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
         $author = Authors::findOrFail($id);
         $author->author_name = $request->author_name;
         $author->born_date = $request->born_date;
         $author->country = $request->country;
        $author->author_info= $request->author_info;



         $author->save();
        return redirect()->route('authors.index')->with('message', 'Успешно редактирахте автор ' . $author->author_name . '.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $author = Authors::findOrFail($id);
            $author->books()->delete();
            $author->delete();
          
        return redirect()->route('authors.index')->with('message', 'Успешно изтрихте автор ' . $author->author_name . '.');
    }
}
