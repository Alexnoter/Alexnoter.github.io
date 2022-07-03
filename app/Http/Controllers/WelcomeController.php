<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /* este  metodo incoke se usa para los controladores de un unico metodo */
    public function __invoke()
    {
        return view('welcome');
    }
}
