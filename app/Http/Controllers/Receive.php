<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Receive extends Controller
{
  public function index()
  {
      $dna_token = $_GET['code'];

      $client = new \GuzzleHttp\Client();
      $result = $client->get('https://api.23andme.com/3/account/', [
        'headers' => [
            'Authorization' => 'Bearer demo_oauth_token'
          ],
        'form_params' => [
          'client_id' => 'a2e401e2dc7aa172df1b466597edcb8b',
          'client_secret' => '3f7fd6d92dc8286b5704103870419be1',
          'grant_type' => 'authorization_code',
          'code' => $dna_token,
          'redirect_uri' => 'http://localhost:8000/receive/',
          'scope' => 'basic names email'
        ]
      ]);

    $contents = $result->getBody()->getContents();
    $contents = json_decode($contents);

    var_dump($contents);

    //return to DatabaseServiceProvider

      //return view('marketing');
  }
}
