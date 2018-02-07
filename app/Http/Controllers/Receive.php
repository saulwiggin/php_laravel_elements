<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Receive extends Controller
{
  public function index()
  {
      $dna_token = $_GET['code'];

      // get access code
      $client = new \GuzzleHttp\Client();
      $result = $client->post('https://api.23andme.com/token/', [
        'headers' => [
            'Authorization' => 'Bearer demo_oauth_token'
          ],
        'form_params' => [
          'client_id' => 'a2e401e2dc7aa172df1b466597edcb8b',
          'client_secret' => '3f7fd6d92dc8286b5704103870419be1',
          'grant_type' => 'authorization_code',
          'code' => $dna_token,
          'redirect_uri' => 'http://localhost:8000/receive',
          'scope' => 'basic names email'
        ]
      ]);

    $contents = $result->getBody()->getContents();
    $contents = json_decode($contents);

    $access_token = $contents->access_token;

    //This session is valid for 10 minutes
    //access_code = $contents["access_token"];

    // get user genome information
    $client = new \GuzzleHttp\Client();
    $result = $client->post('https://api.23andme.com/3/account', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $accounts = $result->getBody()->getContents();
    $accounts = json_decode($accounts);
    var_dump($accounts);
    $id = $accounts->data['id'];


    // get profiles
    $client = new \GuzzleHttp\Client();
    $result = $client->post('https://api.23andme.com/3/profile?account_id='.$id, [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $profile = $result->getBody()->getContents();
    $profile = json_decode($profile);
    $profile_id = $profile->id;

    //var_dump($profile);

    // get marker
    $client = new \GuzzleHttp\Client();
    $result = $client->post('https://api.23andme.com/3/profile/'.$profile_id.'/marker', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $marker = $result->getBody()->getContents();
    $marker = json_decode($marker);

    //var_dump($marker);

    //return to DatabaseServiceProvider

      //return view('marketing');
  }
}
