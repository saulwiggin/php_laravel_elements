<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class info extends Controller
{
  public function index()
  {
    phpinfo();

  }
}
