<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dispatch extends Controller
{
  public function index()
  {
    return view('confirm_dispatch');

  }
}
