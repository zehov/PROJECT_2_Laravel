<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Authors;
use App\Books;
use App\User;
use App\Read;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('users.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($check)
    {
       

        switch ($check) {
            case '1':
            $authors=DB::table('authors')->orderBy('author_name','asc')->get();
                return view('users.authors',compact('authors'));
            case '2':
             // $books=Books::all();
             $books = Books::whereDoesntHave('read', function($query){
                $query->where('user_id', '=', Auth::user()->id);
                 })->get();
                return view('users.books',compact('books'));
            case 'count':
             $authors=DB::table('authors')->orderBy('books_count','desc')->get();
                return view('users.authors',compact('authors'));
            case 'days':
            
             $authors=DB::table('authors')->orderBy('pages_count','asc')->get();
                return view('users.authors',compact('authors'));
            case '3':
                $books = DB::table('books')
            ->join('reads', 'reads.book_id', '=', 'books.id')->where('reads.user_id','=',Auth::user()->id)
            ->select('books.*', 'reads.read_pages')
            ->get();
                return view('users.my_books',compact('books'));

        }

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
         $user = User::findOrFail($id);
         $user->speed = $request->speed;

          $user->save();
        return redirect()->route('user.index')->with('message', 'Успешно променихте скороста на четене ' . $user->speed . '.');
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
public function show_author($id)
    {
        $books=Books::where('author_id','=',$id)->get();
        $books_count=Books::where('author_id','=',$id)->get()->count();
        $author = Authors::findOrFail($id);

         return view('users.author_info', ['author' => $author,'books'=>$books,'books_count'=>$books_count]);
    }

}


