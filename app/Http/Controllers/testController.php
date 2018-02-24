<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
      return view('testpage');
    }

    public function postfunction(request $request)
    {
     $var=$request->sample;
     return view('testpage',['variable'=>$var]);
    }
}
