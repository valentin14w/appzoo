<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AskaryController extends Controller
{
    public function pricipal(){
        return view('home');
    }
    public function suma(){
        return view('suma');
    }

    public function multiplicacion(){
        return view('multiplicacion');
    }
    public function exponente(){
        return view('exponente');
    }
    public function salir(){
        return view('salir');

    }
    
}
