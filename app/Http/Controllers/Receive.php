<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;


class Receive extends Controller
{
  public function index()
  {
      $dna_token = $_GET['code'];

      $servername = "twentythreeandmedata.ctewbdzoj1q8.eu-west-2.rds.amazonaws.com";
      $username = "drsaulwiggin";
      $password = "Mbcx5sw40!";
      $dbname = "innodb";

      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
          //die("Connection failed: " . mysqli_connect_error());
          return view('success');
      }

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
          'redirect_uri' => 'http://www.nellnaturalelements.com/receive',
          'scope' => 'basic names email genomes report:all'
        ]
      ]);

    $contents = $result->getBody()->getContents();
    $contents = json_decode($contents);

    $access_token = $contents->access_token;

    // get accounts genome information
    $client = new \GuzzleHttp\Client();
    $result = $client->post('https://api.23andme.com/3/account', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
          //'Authorization' => 'Bearer demo_oauth_token'
        ]
    ]);

    $accounts = $result->getBody()->getContents();
    $accounts = json_decode($accounts);
    $id = $accounts->data[0]->id;
    $first_name = $accounts->data[0]->first_name;
    $last_name = $accounts->data[0]->last_name;
    $email = $accounts->data[0]->email;

    $sql = "INSERT INTO account (first_name, last_name, email)
    VALUES ('".$first_name."', '".$last_name."', '".$email."')";

    if (mysqli_query($conn, $sql)) {
      //  echo "New record created successfully";
    } else {
      //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // get profiles
    $client = new \GuzzleHttp\Client();
    $result = $client->post('https://api.23andme.com/3/profile?account_id='.$id, [
      'headers' => [
        'Authorization' => 'Bearer ' . $access_token
      //  'Authorization' => 'Bearer demo_oauth_token'
        ]
    ]);

    $profile = $result->getBody()->getContents();
    $profile = json_decode($profile);

    $profile_id = $profile->data[0]->id;
  //  $profile_id = 'demo_profile_id';
    $first_name = $profile->data[0]->first_name;
    $last_name = $profile->data[0]->last_name;
    $is_genotyped = $profile->data[0]->is_genotyped;

    //var_dump($profile);

    $sql = "INSERT INTO profile (first_name, last_name, is_genotyped)
    VALUES ('".$first_name."', '".$last_name."', '".$is_genotyped."')";

    if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
    } else {
      //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs429358/', [
      'headers' => [
           'Authorization' => 'Bearer ' . $access_token
          //'Authorization' => 'Bearer demo_oauth_token'
        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // vitamin D

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs12794714/', [
      'headers' => [
           'Authorization' => 'Bearer ' . $access_token
          //'Authorization' => 'Bearer demo_oauth_token'
        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    //Vitamin A - Carotene

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs7501331/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        //  'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // Vitamin B12

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs602662/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        //  'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs4988235/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        //  'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];

    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // Iron

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs855791/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // folic acid

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs1801133/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // vitamin K

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs8050894/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // Omega 3 fish oils

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs174537/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // Lactose Intolerance

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs182549/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // Calcium

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs7776725/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // Restless Sleep

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs3923809/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // saturated_fat_and_weight

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs5082/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    //$gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // GLUTIN INTOLERANCE

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs2187668/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // FAST TWITCH MUSCLE PERFORMANCE

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs1815739/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // VISION

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs11200638/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

  //  $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // ALCOHOL CONSUMPTION

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs1229984/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // ALCOHOL BLUSH

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs671/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

    // COFFEE CONSUMPTION

    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs2472297/', [
      'headers' => [
         'Authorization' => 'Bearer ' . $access_token
        //'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

  //  $gene_names = $api['gene_names'][0];
    $accession_id = $api['accession_id'];
    $start = $api['start'];
    $end = $api['end'];
    $is_genotyped = $api['is_genotyped'];
    $is_assayed = $api['is_assayed'];
    $is_no_call = $api['is_no_call'];


    $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "Marker record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $variants = $api['variants'];
    //loop through multiple variants;
    foreach($variants as $key => $value){
      $start = $variants[$key]['start'];
      $allele = $variants[$key]['allele'];
      $dosage = $variants[$key]['dosage'];
      $is_assayed = $variants[$key]['is_assayed'];
      $is_no_call = $variants[$key]['is_no_call'];

      $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
      VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";

      if (mysqli_query($conn, $sql)) {
        //  echo "Variant record created successfully";
      } else {
      //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
    // // add specific details of 8 reports by 23andme Here:
    // $test = array(
    // 'wellness.alcohol_flush_reaction',
    // 'wellness.caffeine_consumption',
    // 'wellness.deep_sleep',
    // 'wellness.lactose',
    // 'wellness.muscle_composition',
    // 'wellness.saturated_fat_and_weight',
    // 'wellness.sleep_movement');
    //
    // foreach($test as $test_name){
    //   //get reports
    //   $client = new \GuzzleHttp\Client();
    //   $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/report/'.$test_name.'/', [
    //     'headers' => [
    //         'Authorization' => 'Bearer ' . $access_token
    //       //  'Authorization' => 'Bearer demo_oauth_token'
    //
    //       ]
    //   ]);
    //   $response = $result->getResponse();
    //   if ($response->getStatusCode() == 404) {
    //     $url = 'http://www.nell.co.uk';
    //     return Redirect::to($url);
    //   }
    //   else {
    //
    //     $api = $result->getBody()->getContents();
    //     $api = json_decode($api,true);
    //
    //     //var_dump($api);
    //
    //     $reports = $api;
    //     //loop through multiple variants;
    //
    //     $report_id = $reports['report_id'];
    //     $report_type = $reports['report_type'];
    //     $title = $reports['title'];
    //
    //     $gene_id = $reports['details']['genes'][0]['id'];
    //     $chromosome = $reports['details']['genes'][0]['chromosome'];
    //     $gene_overview = $reports['details']['genes'][0]['gene_overview'];
    //
    //     $marker_label = $reports['details']['markers'][0]['label'];
    //     //$marker_name = $reports['details']['markers'][0]['gene_names'][0];
    //     $marker_name = 'test';
    //     $marker_mutation_type = $reports['details']['markers'][0]['mutation_type'];
    //     $marker_description = $reports['details']['markers'][0]['gene_description'];
    //     $marker_accession_id = $reports['details']['markers'][0]['accession_id'];
    //     $marker_biological_explanation = $reports['details']['markers'][0]['biological_explanation'];
    //     $marker_start = $reports['details']['markers'][0]['start'];
    //     $marker_end = $reports['details']['markers'][0]['end'];
    //     $marker_is_assayed = $reports['details']['markers'][0]['is_assayed'];
    //     $marker_is_genotyped = $reports['details']['markers'][0]['is_genotyped'];
    //     $marker_is_determined = $reports['details']['markers'][0]['is_determined'];
    //     $marker_is_no_call = $reports['details']['markers'][0]['is_no_call'];
    //
    //     //variant 1 / v1
    //     $v1_accession_id = $reports['details']['markers'][0]['variants'][0]['accession_id'];
    //     $v1_start = $reports['details']['markers'][0]['variants'][0]['start'];
    //     $v1_end = $reports['details']['markers'][0]['variants'][0]['end'];
    //     $v1_one_based_start = $reports['details']['markers'][0]['variants'][0]['one_based_start'];
    //     $v1_one_based_end = $reports['details']['markers'][0]['variants'][0]['one_based_end'];
    //     $v1_allele = $reports['details']['markers'][0]['variants'][0]['allele'];
    //     $v1_dosage = $reports['details']['markers'][0]['variants'][0]['dosage'];
    //     $v1_is_no_call = $reports['details']['markers'][0]['variants'][0]['is_no_call'];
    //     $v1_is_assayed = $reports['details']['markers'][0]['variants'][0]['is_assayed'];
    //     $v1_has_effect = $reports['details']['markers'][0]['variants'][0]['has_effect'];
    //
    //     //variant 2 / v2
    //     $v2_accession_id = $reports['details']['markers'][0]['variants'][1]['accession_id'];
    //     $v2_start = $reports['details']['markers'][0]['variants'][1]['start'];
    //     $v2_end = $reports['details']['markers'][0]['variants'][1]['end'];
    //     $v2_one_based_start = $reports['details']['markers'][0]['variants'][1]['one_based_start'];
    //     $v2_one_based_end = $reports['details']['markers'][0]['variants'][1]['one_based_end'];
    //     $v2_allele = $reports['details']['markers'][0]['variants'][1]['allele'];
    //     $v2_dosage = $reports['details']['markers'][0]['variants'][1]['dosage'];
    //     $v2_is_no_call = $reports['details']['markers'][0]['variants'][1]['is_no_call'];
    //     $v2_is_assayed = $reports['details']['markers'][0]['variants'][1]['is_assayed'];
    //     $v2_has_effect = $reports['details']['markers'][0]['variants'][1]['has_effect'];
    //
    //     $effect_allele = $reports['details']['markers'][0]['known_mutations'][0]['effect_allele'];
    //     $typical_allele = $reports['details']['markers'][0]['known_mutations'][0]['typical_allele'];
    //     $variant_mutation_type = $reports['details']['markers'][0]['known_mutations'][0]['mutation_type'];
    //
    //     $summary_is_determined = $reports['summary']['is_determined'];
    //     $summary_has_effect = $reports['summary']['has_effect'];
    //     $summary_effect_allele_count = $reports['summary']['effect_allele_count'];
    //     $summary_no_call_marker_count = $reports['summary']['no_call_marker_count'];
    //     $summary_assesment_id = $reports['summary']['assessment']['id'];
    //     $summary_assesment_message = $reports['summary']['assessment']['message'];
    //
    //     $sql = "INSERT INTO reports (profile_id, report_id, report_type, title,
    //     gene_id,chromosome,gene_overview,
    //     marker_label, marker_name, mutation_type, marker_description, marker_accession_id,
    //     marker_biological_explaination,marker_start,marker_end,marker_is_assayed, marker_is_genotyped,
    //     marker_is_determined,marker_is_no_call,
    //     v1_accession_id,v1_start,v1_end,v1_one_based_start,v1_one_based_end,
    //     v1_allele,v1_dosage,v1_is_no_call,v1_is_assayed,v1_has_effect,
    //     v2_accession_id,v2_start,v2_end,v2_one_based_start,v2_one_based_end,
    //     v2_allele,v2_dosage,v2_is_no_call,v2_is_assayed,v2_has_effect,
    //     effect_allele,typical_allele,variant_mutation_type, summary_is_determined,summary_has_effect,
    //     summary_effect_allele_count,
    //     no_call_marker_count,summary_assessment_id,summary_assessment_message
    //
    //   )
    //
    //     VALUES ('".$profile_id."', '".$report_id."', '".$report_type."', '".$title."',
    //     '".$gene_id."', '".$chromosome."', '".$gene_overview."',
    //     '".$marker_label."', '".$marker_name."', '".$marker_mutation_type."','".$marker_description."', '".$marker_accession_id."',
    //     '".$marker_biological_explanation."', '".$marker_start."', '".$marker_end."','".$marker_is_assayed."',
    //     '".$marker_is_genotyped."', '".$marker_is_determined."', '".$marker_is_no_call."',
    //     '".$v1_accession_id."', '".$v1_start."', '".$v1_end."','".$v1_one_based_start."', '".$v1_one_based_end."',
    //     '".$v1_allele."', '".$v1_dosage."', '".$v1_is_no_call."','".$v1_is_assayed."', '".$v1_has_effect."',
    //     '".$v2_accession_id."', '".$v2_start."', '".$v2_end."','".$v2_one_based_start."', '".$v2_one_based_end."',
    //     '".$v2_allele."', '".$v2_dosage."', '".$v2_is_no_call."','".$v2_is_assayed."', '".$v2_has_effect."',
    //     '".$effect_allele."', '".$typical_allele."', '".$variant_mutation_type."','".$summary_is_determined."', '".$summary_has_effect."',
    //     '".$summary_effect_allele_count."', '".$summary_no_call_marker_count."', '".$summary_assesment_id."','".$summary_assesment_message."'
    //     )";
    //
    //     if (mysqli_query($conn, $sql)) {
    //     //    echo "report record created successfully";
    //     } else {
    //       //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }
    //
    //   }
    // }
    //
    // $test_name = 'genetic_weight';
    // $client = new \GuzzleHttp\Client();
    // $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/report/'.$test_name.'/', [
    //   'headers' => [
    //       'Authorization' => 'Bearer ' . $access_token
    //     //  'Authorization' => 'Bearer demo_oauth_token'
    //
    //     ]
    // ]);
    //
    // $api = $result->getBody()->getContents();
    // $api = json_decode($api,true);
    //
    // //var_dump($api);
    //
    // $reports = $api;
    // //loop through multiple variants;
    // $report_id = $reports['report_id'];
    // $report_type = $reports['report_type'];
    // $report_title = $reports['title'];
    //
    // $age = $reports['details']['model_inputs']['age'];
    // $sex = $reports['details']['model_inputs']['sex'];
    // $model_ethnicity = $reports['details']['model_inputs']['model_ethnicity'];
    // $given_ethnicity = $reports['details']['model_inputs']['given_ethnicity'];
    //
    // $has_effect = $reports['summary']['has_effect'];
    // $is_determined = $reports['summary']['is_determined'];
    // $baseline_bmi= $reports['summary']['baseline_bmi'];
    // $predicted_bmi = $reports['summary']['predicted_bmi'];
    // $relative_difference = $reports['summary']['relative_difference'];
    // $outcome_id = $reports['summary']['outcome']['id'];
    // $outcome_text = $reports['summary']['outcome']['text'];
    //
    // //DB::insert('insert into users (id, name) values (?, ?)', array(1, 'Dayle'));
    //
    // $sql = "INSERT INTO genetic_weight_report (profile_id, report_id, report_type, report_title,age,
    //   sex,model_ethnicity,given_ethnicity,
    // has_effect,is_determined,baseline_bmi,predicted_bmi,relative_difference,outcome_id,outcome_text
    // )
    // VALUES ('".$profile_id."', '".$report_id."', '".$report_type."','".$report_title."','".$age."',
    // '".$sex."','".$model_ethnicity."','".$given_ethnicity."',
    // '".$has_effect."', '".$is_determined."', '".$baseline_bmi."', '".$predicted_bmi."','".$relative_difference."','".$outcome_id."','".$outcome_text."'
    // )";
    //
    // if (mysqli_query($conn, $sql)) {
    //     //echo "genetic test record created successfully";
    // } else {
    //     //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }

  //  $encrypted = Crypt::encryptString('Hello world.');

  //  DB::insert('insert into users (id, name) values (?, ?)', array(1, 'Dayle'));


    mysqli_close($conn);

  //  $url = '/';
  //  return Redirect::to($url);

  return view('spinner');
  }
}
