<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Read;
use App\Books;

class ReadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $books=Books::all();
         //$read=Read::all();
         $books = DB::table('books')
            ->join('reads', 'reads.book_id', '=', 'books.id')->where('reads.user_id','=',Auth::user()->id)
            ->select('books.*', 'reads.read_pages')
            ->get();
        return view('users.my_books',compact('books','read'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $read = Read::create([
            'user_id'      => $request->user_id,
            'book_id'     => $request->book_id,
            'read_pages'  => $request->read_pages,
             ]);


         $read->save();
        return redirect()->route('user.show',2)->with('message', 'Успешно добавихте книга');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
       
        //$read->read_pages=$request->read_pages;
        $read = Read::where('user_id' ,'=',$id)->where('book_id','=',$request->book_id)->update(['read_pages'=>$request->read_pages]);
       

         //$read->save();
        return redirect()->route('read.index')->with('message', 'Успешно отбелязахте страница ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
