<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cremeContoller extends Controller
{
   public function index(){

    return view('store.cremes');
   }
}
