<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\results;


class reports extends Controller
{
  public function index()
  {
    return view('nutrition_report');

  }
  public function txtupload()
  {
//    $results = $results->$username;

   return view('nutrition_report');

  }
}
