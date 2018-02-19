<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;


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
          'redirect_uri' => 'http://localhost:8000/receive',
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
          //'Authorization' => 'Bearer ' . $access_token
          'Authorization' => 'Bearer demo_oauth_token'
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
      //  'Authorization' => 'Bearer ' . $access_token
        'Authorization' => 'Bearer demo_oauth_token'
        ]
    ]);

    $profile = $result->getBody()->getContents();
    $profile = json_decode($profile);

  //  $profile_id = $profile->data[0]->id;
    $profile_id = 'demo_profile_id';
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
          // 'Authorization' => 'Bearer ' . $access_token
          'Authorization' => 'Bearer demo_oauth_token'
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
          // 'Authorization' => 'Bearer ' . $access_token
          'Authorization' => 'Bearer demo_oauth_token'
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
        //  'Authorization' => 'Bearer ' . $access_token
          'Authorization' => 'Bearer demo_oauth_token'

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
        //  'Authorization' => 'Bearer ' . $access_token
          'Authorization' => 'Bearer demo_oauth_token'

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
        //  'Authorization' => 'Bearer ' . $access_token
          'Authorization' => 'Bearer demo_oauth_token'

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
        // 'Authorization' => 'Bearer ' . $access_token
        'Authorization' => 'Bearer demo_oauth_token'

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

    // add specific details of 8 reports by 23andme Here:
    $test = array(
    'wellness.alcohol_flush_reaction',
    'wellness.caffeine_consumption',
    'wellness.deep_sleep',
    'wellness.lactose',
    'wellness.muscle_composition',
    'wellness.saturated_fat_and_weight',
    'wellness.sleep_movement');

    foreach($test as $test_name){
      //get reports
      $client = new \GuzzleHttp\Client();
      $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/report/'.$test_name.'/', [
        'headers' => [
          //  'Authorization' => 'Bearer ' . $access_token
            'Authorization' => 'Bearer demo_oauth_token'

          ]
      ]);

      $api = $result->getBody()->getContents();
      $api = json_decode($api,true);

      var_dump($api);

      $reports = $api;
      //loop through multiple variants;

      $report_id = $reports['report_id'];
      $report_type = $reports['report_type'];
      $title = $reports['title'];

      $gene_id = $reports['details']['genes']['id'];
      $chromosome = $reports['details']['genes']['chromosome'];
      $gene_overview = $reports['details']['genes']['overview'];

      $marker_label = $reports['markers']['label'];
      $marker_name = $reports['markers']['gene_name'];
      $marker_mutation_type = $reports['markers']['mutation_type'];
      $marker_description = $reports['markers']['gene_description'];
      $marker_accession_id = $reports['markers']['accession_id'];
      $marker_biological_explanation = $reports['markers']['biological_explaination'];
      $marker_start = $reports['markers']['start'];
      $marker_end = $reports['markers']['end'];
      $is_assayed = $reports['markers']['is_assayed'];
      $is_genotyped = $reports['markers']['is_genotyped'];
      $is_determined = $reports['markers']['is_determined'];
      $is_no_call = $reports['markers']['is_no_call'];

      //variant 1 / v1
      $v1_accession_id = $reports['variants'][0]['accession_id'];
      $v1_start = $reports['variants'][0]['start'];
      $v1_end = $reports['variants'][0]['end'];
      $v1_one_based_start = $reports['variants'][0]['one_based_start'];
      $v1_one_based_end = $reports['variants'][0]['one_based_end'];
      $v1_allele = $reports['variants'][0]['allele'];
      $v1_dosage = $reports['variants'][0]['dosage'];
      $v1_is_no_call = $reports['variants'][0]['is_no_call'];
      $v1_is_assayed = $reports['variants'][0]['is_assayed'];
      $v1_has_effect = $reports['variants'][0]['has_effect'];

      //variant 2 / v2
      $v2_accession_id = $reports['markers']['variants'][1]['accession_id'];
      $v2_start = $reports['markers']['variants'][1]['start'];
      $v2_end = $reports['markers']['variants'][1]['end'];
      $v2_one_based_start = $reports['markers']['variants'][1]['one_based_start'];
      $v2_one_based_end = $reports['markers']['variants'][1]['one_based_end'];
      $v2_allele = $reports['markers']['variants'][1]['allele'];
      $v2_dosage = $reports['markers']['variants'][1]['dosage'];
      $v2_is_no_call = $reports['markers']['variants'][1]['is_no_call'];
      $v2_is_assayed = $reports['markers']['variants'][1]['is_assayed'];
      $v2_has_effect = $reports['markers']['variants'][1]['has_effect'];

      $effect_allele = $reports['markers']['known_mutations']['effect_allele'];
      $typical_allele = $reports['markers']['known_mutations']['typical_allele'];
      $variant_mutation_type = $reports['markers']['known_mutations']['mutation_type'];

      $summary_is_determined = $reports['summary']['is_determined'];
      $summary_has_effect = $reports['summary']['has_effect'];
      $summary_effect_allele_count = $reports['summary']['effect_allele_count'];
      $summary_no_call_marker_count = $reports['summary']['no_call_marker_count'];
      $summary_assesment_id = $reports['summary']['assesment']['id'];
      $summary_assesment_message = $reports['summary']['assesment']['message'];

      $sql = "INSERT INTO reports (profile_id, report_id, report_type, title, gene_id,chromosome,gene_overview,
      marker_label, marker_name, mutation_type, marker_description, marker_accession_id,marker_biological_explaination,
      marker_start,marker_end,marker_is_assayed, marker_is_genotyped,marker_is_determined,marker_is_no_call,
      v1_accession_id,v1_start,v1_end,v1_one_based_start,v1_one_based_end,v1_allele,v1_dosage,v1_is_no_call,v1_is_assayed,v1_has_effect,
      v2_accession_id,v2_start,v2_end,v2_one_based_start,v2_one_based_end,v2_allele,v2_dosage,v2_is_no_call,v2_is_assayed,v2_has_effect,
      effect_allele,typical_allele,variant_mutation_type, summary_is_determined,summary_has_effect,summary_effect_allele_count,
      no_call_marker_count,summary_assesment_id,summary_assesment_message;

    )

      VALUES ('".$profile_id."', '".$report_id."', '".$report_type."', '".$title."',
      '".$gene_id."', '".$chromosome."', '".$gene_overview."',
      '".$marker_label."', '".$marker_name."', '".$marker_mutation_type."','".$marker_description."', '".$marker_accession_id."',
      '".$marker_biological_explanation."', '".$marker_start."', '".$marker_end."','".$marker_is_assayed."', '".$marker_is_genotyped."',
      '".$marker_is_genotyped."', '".$marker_is_determined."', '".$marker_is_no_call."',
      '".$v1_accession_id."', '".$v1_start."', '".$v1_end."','".$v1_one_based_start."', '".$v1_one_based_end."',
      '".$v1_allele."', '".$v1_dosage."', '".$v1_is_no_call."','".$v1_is_assayed."', '".$v1_has_effect."',
      '".$v2_accession_id."', '".$v2_start."', '".$v2_end."','".$v2_one_based_start."', '".$v2_one_based_end."',
      '".$v2_allele."', '".$v2_dosage."', '".$v2_is_no_call."','".$v2_is_assayed."', '".$v2_has_effect."',
      '".$effect_allele."', '".$vtypical_allele."', '".$variant_mutation_type."','".$summary_is_determined."', '".$summary_has_effect."',
      '".$summary_effect_allele_count."', '".$no_call_marker_count."', '".$summary_assesment_id."','".$summary_assesment_message."'
      )";

      if (mysqli_query($conn, $sql)) {
          echo "report record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    }

    $test_name = 'genetic_weight';
    $client = new \GuzzleHttp\Client();
    $result = $client->get('https://api.23andme.com/3/profile/'.$profile_id.'/report/'.$test_name.'/', [
      'headers' => [
        //  'Authorization' => 'Bearer ' . $access_token
          'Authorization' => 'Bearer demo_oauth_token'

        ]
    ]);

    $api = $result->getBody()->getContents();
    $api = json_decode($api,true);

    var_dump($api);


    $reports = $api['data'];
    //loop through multiple variants;
    $report_id = $reports['report_id'];
    $report_type = $reports['report_type'];
    $report_title = $reports['report_title'];

    $age = $reports['details']['model_inputs']['age'];
    $sex = $reports['details']['model_inputs']['sex'];
    $model_ethnicity = $reports['details']['model_inputs']['model_ethinicity'];
    $given_ethnicity = $reports['details']['model_inputs']['$given_ethnicity'];

    $has_effect = $reports['summary']['has_effect'];
    $is_determined = $reports['summary']['is_determined'];
    $baseline_bmi= $reports['summary']['baseline_bmi'];
    $predicted_bmi = $reports['summary']['predicted_bmi'];
    $relative_difference = $reports['summary']['relative_difference'];
    $outcome_id = $reports['summary']['outcome']['id'];
    $outcome_text = $reports['summary']['outcome']['text'];

    //DB::insert('insert into users (id, name) values (?, ?)', array(1, 'Dayle'));

    $sql = "INSERT INTO genetic_weight_report (profile_id, report_id, report_type, report_title,age,sex,model_ethnicity,given_ethnicity,
    has_effect,is_determined,baseline_bmi,predicted_bmi,relative_difference,outcome_id,outcome_text
    )
    VALUES ('".$profile_id."', '".$report_id."', '".$report_type."','".$report_title."','".$age."',
    '".$sex."','".$model_ethnicity."','".$given_ethnicity."',
    '".$has_effect."', '".$is_determined."', '".$baseline_bmi."','".$relative_difference."','".$outcome_id."',,'".$outcome_text."'
    )";

    if (mysqli_query($conn, $sql)) {
    //    echo "genetic test record created successfully";
    } else {
    //    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $encrypted = Crypt::encryptString('Hello world.');

    DB::insert('insert into users (id, name) values (?, ?)', array(1, 'Dayle'));


    mysqli_close($conn);

  //  $url = 'http://www.nell.co.uk'
  //  return Redirect::to($url);
  }
}
