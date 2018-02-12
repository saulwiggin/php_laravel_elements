<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
          'scope' => 'basic names email genomes report:all rs1801131'
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
        //'Authorization' => 'Bearer demo_oauth_token'
        ]
    ]);

    $profile = $result->getBody()->getContents();
    $profile = json_decode($profile);

    $profile_id = $profile->data[0]->id;
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

    // $client = new \GuzzleHttp\Client();
    // $result = $client->post('https://api.23andme.com/3/profile/demo_account_id/marker/rs1801131/', [
    //   'headers' => [
    //     //'Authorization' => 'Bearer ' . $access_token
    //     'Authorization' => 'Bearer demo_oauth_token'
    //     ]
    // ]);
    //
    // $api = $result->getBody()->getContents();
    // $api = json_decode($api,true);
    //
    // $gene_names = $api['gene_names'][0];
    // $accession_id = $api['accession_id'];
    // $start = $api['start'];
    // $end = $api['end'];
    // $is_genotyped = $api['is_genotyped'];
    // $is_assayed = $api['is_assayed'];
    // $is_no_call = $api['is_no_call'];
    //
    //
    // $sql = "INSERT INTO marker (profile_id, gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    // VALUES ('".$profile_id."', '".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";
    //
    // if (mysqli_query($conn, $sql)) {
    //     echo "Marker record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }
    //
    // $variants = $api['variants'];
    // //loop through multiple variants;
    // foreach($variants as $key => $value){
    //   $start = $variants[$key]['start'];
    //   $allele = $variants[$key]['allele'];
    //   $dosage = $variants[$key]['dosage'];
    //   $is_assayed = $variants[$key]['is_assayed'];
    //   $is_no_call = $variants[$key]['is_no_call'];
    //
    //   $sql = "INSERT INTO variants (profile_id, gene_names, start, allele,dosage,is_assayed,is_no_call)
    //   VALUES ('".$profile_id."', '".$gene_names."', '".$start."','".$allele."','".$dosage."','".$is_assayed."','".$is_no_call."')";
    //
    //   if (mysqli_query($conn, $sql)) {
    //       echo "Variant record created successfully";
    //   } else {
    //       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //   }
    // }

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

    //get reports
    // $client = new \GuzzleHttp\Client();
    // $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/report/', [
    //   'headers' => [
    //     //  'Authorization' => 'Bearer ' . $access_token
    //       'Authorization' => 'Bearer demo_oauth_token'
    //
    //     ]
    // ]);
    //
    // $api = $result->getBody()->getContents();
    // $api = json_decode($api,true);
    //
    // var_dump($api);
    //
    // $reports = $api['data'];
    // //loop through multiple variants;
    // if ($reports){
    //
    // }
    // foreach($reports as $key => $value){
    //   $report_id = $reports[$key]['report_id'];
    //   $report_type = $reports[$key]['report_type'];
    //   $title = $reports[$key]['title'];
    //
    //   $sql = "INSERT INTO report (profile_id, report_id, report_type)
    //   VALUES ('".$profile_id."', '".$report_id."', '".$report_type."')";
    //
    //   if (mysqli_query($conn, $sql)) {
    //     //  echo "Variant record created successfully";
    //   } else {
    //   //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //   }
    // }

    // add specific details of 8 reports by 23andme Here:
    // genetic_weight
    // wellness.alcohol_flush_reaction
    // wellness.caffeine_consumption
    // wellness.deep_sleep
    // wellness.lactose
    // wellness.muscle_composition
    // wellness.saturated_fat_and_weight
    // wellness.sleep_movement


    mysqli_close($conn);

    return view('success');
  }
}
