<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContatoController extends Controller
{
    public function principal(){
       return view('site.contato');
    }

    //Route::get('/', 'ContatoController@contato');

}