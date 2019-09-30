<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PicturesController extends Controller
{
    public function index(){
        return view('pictures.index');
    }
    public function bank(){
        return view('pictures.show');
    }
}
