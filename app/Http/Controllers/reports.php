<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\results;
use Illuminate\Support\Facades\Auth;


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
  public function showreport()
  {
    $username = Auth::user()->name;
    //    $results = $results->$username;

    // get last genome uploaded $reports
    $results = results::get()
               ->where('username', $username);

    return view('nutrition_report')->with('compact',$results);

  }
}
