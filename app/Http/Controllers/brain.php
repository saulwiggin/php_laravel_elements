<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class brain extends Controller
{
  public function index()
  {
    return view('dashboard');
  }
}
