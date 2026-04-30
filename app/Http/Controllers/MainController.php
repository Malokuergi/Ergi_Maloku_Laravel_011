<?php

namespace App\Http\Controllers;

use App\Models\_books;
use App\Models\Book;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view("main");
        
    }

    public function login()
    {
        return view("auth.login");
        
    }



       
}
