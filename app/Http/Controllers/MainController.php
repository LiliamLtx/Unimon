<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('home');
    }

    public function services(){
        return view('servicos');
    }

    public function pesquisar( Request $request){
       
    }
}
