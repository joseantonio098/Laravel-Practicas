<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginasController extends Controller{

    public function inicio(){
        return view('welcome');
    }

    public function quienesSomos(){
        return view('quienesSomos');
    }

    public function foro(){
        return view('foro');
    }
}
