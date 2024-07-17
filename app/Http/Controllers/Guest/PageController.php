<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //restituisce la home page
    public function home(){
        return view('guest.home');
    }

    //restituisce la pagina dei film
    public function movies(){
        return view ('guest.movies');


    }
}
