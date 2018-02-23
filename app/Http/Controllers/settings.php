<?php

namespace App\Http\Controllers;
use App\account;
use App\devliery;
use App\payment;

class settings extends Controller
{
  public function index()
  {

    return view('settings');
  }
  public function postaccount()
  {
    //place data into database

    //return view('settings');
  }
  public function user(Request $request)
  {

    $flight = new account;

    $flight->name = $request->name;

    $flight->save();
  }
}
