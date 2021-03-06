<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Authors;
use App\Books;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $books=Books::all();
       $authors=Authors::all();
        return view('welcome',compact('books','authors'));
    }
}
