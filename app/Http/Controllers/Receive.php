<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Receive extends Controller
{
  public function index()
  {
      $request = $_GET['code'];
      var_dump($request);

      
      //return view('marketing');
  }
}
