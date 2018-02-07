<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    //var_dump($contents);

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
    $id = $accounts->data[0]->id;
    $first_name = $accounts->data[0]->first_name;
    $last_name = $accounts->data[0]->last_name;
    $email = $accounts->data[0]->email;

    //$first_name = $accounts->data[0]->id;
    var_dump($accounts);


    // get profiles
    $client = new \GuzzleHttp\Client();
    $result = $client->post('https://api.23andme.com/3/profile?account_id='.$id, [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $profile = $result->getBody()->getContents();
    $profile = json_decode($profile);

    $profile_id = $profile->data[0]->id;
    //var_dump($profile);

    // get marker for gene rs10195681
    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs1801131/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $B9 = $result->getBody()->getContents();
    $B9 = json_decode($B9);
    //var_dump($B9);


    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs429358/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $vitaminB6 = $result->getBody()->getContents();
    $vitaminB6 = json_decode($vitaminB6);

    //var_dump($vitaminB6);

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs12794714/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $vitaminD = $result->getBody()->getContents();
    $vitaminD = json_decode($vitaminD);

    //var_dump($vitaminD);

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs7501331/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $vitaminA = $result->getBody()->getContents();
    $vitaminA = json_decode($vitaminA);

    //var_dump($vitaminA);

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs602662/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $vitaminB12 = $result->getBody()->getContents();
    $vitaminB12 = json_decode($vitaminB12);

    //var_dump($vitaminB12);

    // $client = new \GuzzleHttp\Client();
    // $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs267606683/', [
    //   'headers' => [
    //       'Authorization' => 'Bearer ' . $access_token
    //     ]
    // ]);
    //
    // $riboflavin = $result->getBody()->getContents();
    // $riboflavin = json_decode($riboflavin);
    //
    // //var_dump($riboflavin);

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs4988235/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $folic_acid = $result->getBody()->getContents();
    $folic_acid = json_decode($folic_acid);

    //var_dump($folic_acid);

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs855791/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $iron = $result->getBody()->getContents();
    $iron = json_decode($iron);

    //var_dump($iron);

    //get reports
    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/report/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $report = $result->getBody()->getContents();
    $report = json_decode($report);

    //get variants
    $B9 = $result->getBody()->getContents();
    $B9 = json_decode($B9);
    var_dump($B9);


    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/variant/?gene_name=rs429358', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $vitaminB6variant = $result->getBody()->getContents();
    $vitaminB6variant = json_decode($vitaminB6variant);

    //var_dump($vitaminB6variant);

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/variant/?gene_name=rs12794714', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $vitaminD = $result->getBody()->getContents();
    $vitaminD = json_decode($vitaminD);

    //var_dump($vitaminD);

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/variant/?gene_name=rs7501331', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $vitaminA = $result->getBody()->getContents();
    $vitaminA = json_decode($vitaminA);

    //var_dump($vitaminA);

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/variant/?gene_name=rs602662', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $vitaminB12 = $result->getBody()->getContents();
    $vitaminB12 = json_decode($vitaminB12);

    //var_dump($vitaminB12);

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/variant/?gene_name=rs4988235/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $folic_acid = $result->getBody()->getContents();
    $folic_acid = json_decode($folic_acid);

    //var_dump($folic_acid);

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/variant/?gene_name=rs855791/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $iron = $result->getBody()->getContents();
    $iron = json_decode($iron);

    //var_dump($iron);


    //return to DatabaseServiceProvider
  $servername = "nell.ctewbdzoj1q8.eu-west-2.rds.amazonaws.com";
  $username = "drsaulwiggin";
  $password = "Mbcx5sw40!";
  $dbname = "my_elements";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO account (first_name, last_name, email)
    VALUES ('".$first_name."', '".$last_name."', '".$email."')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    //return
  }
}
