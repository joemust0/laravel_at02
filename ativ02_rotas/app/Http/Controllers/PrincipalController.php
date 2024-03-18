<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PrincipalController extends Controller
{
    public function principal(){
        return view('site.principal');
    }
    //Route::get('/', 'PrincipalController@principal');

}
