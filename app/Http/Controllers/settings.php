<?php

namespace App\Http\Controllers;
use App\account;
use App\delivery;
use App\payment;

class settings extends Controller
{
  public function index()
  {
    $account = account::find(1);
    $delivery = account::find(1);
    $payment = account::find(1);

    View::make('settings')->withModel($account)->withModel($delivery)->withModel($payment);

    // return view('settings');
  }

  public function postaccount()
  {
    //place data into database

    //return view('settings');
  }

  public function user(Request $request)
  {
    var_dump($request);

    $account = new account;

    $account->name = $request->name;

    $account->save();

    //return view('settings');

  }
}
