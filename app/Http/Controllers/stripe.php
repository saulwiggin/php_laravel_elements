<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stripe extends Controller
{
  public function medium()
  {

    // test keys - live keys required in production
    $stripe = array(
      "secret_key"      => "sk_test_nWLzJ1Qbg5bNNLZDW6wAQPMa",
      "publishable_key" => "pk_test_3nUr5h2yoTpdKcphemA1wcMv"
    );

    \Stripe\Stripe::setApiKey($stripe['secret_key']);


      $token  = $_POST['stripeToken'];
      $email  = $_POST['stripeEmail'];

      $customer = \Stripe\Customer::create(array(
          'email' => $email,
          'source'  => $token
      ));

      $charge = \Stripe\Charge::create(array(
          'customer' => $customer->id,
          'amount'   => 2500,
          'currency' => 'gbp'
      ));

      echo '<h1>Successfully charged £25.00!</h1>';

    }

    public function full()
    {
      // test keys - live keys required in production
      $stripe = array(
        "secret_key"      => "sk_test_nWLzJ1Qbg5bNNLZDW6wAQPMa",
        "publishable_key" => "pk_test_3nUr5h2yoTpdKcphemA1wcMv"
      );

      \Stripe\Stripe::setApiKey($stripe['secret_key']);


        $token  = $_POST['stripeToken'];
        $email  = $_POST['stripeEmail'];

        $customer = \Stripe\Customer::create(array(
            'email' => $email,
            'source'  => $token
        ));

        $charge = \Stripe\Charge::create(array(
            'customer' => $customer->id,
            'amount'   => 5000,
            'currency' => 'gbp'
        ));

        echo '<h1>Successfully charged £50.00!</h1>';

    }
}
