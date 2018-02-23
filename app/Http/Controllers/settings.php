<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\account;
use App\delivery;
use App\payment;

class settings extends Controller
{
  public function index()
  {
    $account = account::find(1);
    $delivery = delivery::find(1);
    $payment = payment::find(1);

    var_dump($delivery);
     return view('settings')->with(compact('account'))
     ->with(compact('delivery'))
     ->with(compact('payment'));
  }

  public function postaccount(Request $request)
  {
    $account = delivery::find(1);

    $account->Address_1 = $request->address1;
    $account->Address_2 = $request->address2;
    $account->City = $request->city;
    $account->postcode = $request->postcode;

    $account->save();
  }

  public function user(Request $request)
  {
    $account = account::find(1);

    $account->username = $request->username;

    $account->save();

  }

  public function delivery(Request $request)
  {
    $delivery = delivery::find(1);

    $delivery->username = $request->username;

    $account->save();

  }
}
