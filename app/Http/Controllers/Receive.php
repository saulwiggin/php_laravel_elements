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
          die("Connection failed: " . mysqli_connect_error());
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

    $sql = "INSERT INTO account (first_name, last_name, email)
    VALUES ('".$first_name."', '".$last_name."', '".$email."')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

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

    // get marker for gene rs10195681
    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs1801131/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
        ]
    ]);

    $result = $result->getBody()->getContents();
    $result = json_decode($result);

  //  var_dump($result);

  //  $alternate_ids = $result->alternate_ids[0];
    $gene_names = $result->gene_names[0];
    $accession_id = $result->accession_id;
    $start = $result->start;
    $end = $result->end;
    $is_genotyped = $result->is_genotyped;
    $is_assayed = $result->is_assayed;
    $is_no_call = $result->is_no_call;


    $sql = "INSERT INTO marker (gene_names, accession_id, start,end,is_genotyped,is_assayed,is_no_call)
    VALUES ('".$gene_names."', '".$accession_id."','".$start."','".$end."','".$is_genotyped."','".$is_assayed."','".$is_no_call."')";

    if (mysqli_query($conn, $sql)) {
    //    echo "New record created successfully";
    } else {
      //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }



    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/marker/rs429358/', [
      'headers' => [
          'Authorization' => 'Bearer ' . $access_token
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
    //       'Authorization' => 'Bearer ' . $access_token
    //     ]
    // ]);
    //
    // $report = $result->getBody()->getContents();
    // $report = json_decode($report);
    //
    // var_dump($report);
    //
    // $id = $report->id;
    // $report_id = $report->report_id;
    // $report_type = $report->report_type;
    // $title = $report->title;
    // $details = $report->details;
    // $summary = $report->summary;
    //
    //
    //   $sql = "INSERT INTO report (id, report_id, report_type,title,details,summary)
    //   VALUES ('".$id."', '".$report_id."','".$report_type."','".$title."','".$details."','".$summary."')";
    //
    //   if (mysqli_query($conn, $sql)) {
    //       echo "New report created successfully";
    //   } else {
    //       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //   }

    mysqli_close($conn);

    return view('success');
  }
}
