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

    //var_dump($delivery);
     return view('settings')->with(compact('account'))->with(compact('delivery'))->with(compact('payment'));
  }

  public function postaccount(Request $request)
  {
    $delivery = delivery::find(1);

    $delivery->Address_1 = $request->address1;
    $delivery->Address_2 = $request->address2;
    $delivery->City = $request->city;
    $delivery->postcode = $request->postcode;

    $delivery->save();
  }

  public function user(Request $request)
  {
    $account = account::find(1);

    $account->username = $request->username;

    $account->save();

  }

  public function creditsave(Request $request)
  {
    $creditcard = payment::find(1);

    $creditcard->card_number = $request->card_number;
    $creditcard->csv = $request->csv;
    $creditcard->expiry_date = $request->expiry_date;

    $creditcard->save();

  }
}
