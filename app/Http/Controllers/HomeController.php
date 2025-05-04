<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
si tengo un solo metodo en el controller se usa __invoke
*/
class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }
}
