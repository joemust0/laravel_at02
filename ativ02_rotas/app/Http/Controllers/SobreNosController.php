<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SobreNosController extends Controller
{
    public function principal(){
        return view('site.sobrenos');
    }

    //Route::get('/', 'SobreNosController@sobrenos');

}
