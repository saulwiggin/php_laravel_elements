<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\snpmatrix;
use App\variants;
use App\results;
use Illuminate\Support\Facades\Storage;

class brain extends Controller
{
  public function index()
  {
    return view('dashboard');
  }

  public function txtDNAupload($username)
  {
    //  upload last uploaded genome
    $filename = $username . '.txt';
    $contents = Storage::get($filename);

    $array = explode("\n",$contents);
    // SNP matrix
    $master_snp_matrix = snpmatrix::where('In23andme', 1)
               ->get();
    // match SNP's
    //
    // get genotype
    //return $this->gene_match($supplement,$index);

    $name = 'Vitamin D';
    $snp_line = $master_snp_matrix[0]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Vitamin A';
    $snp_line = $master_snp_matrix[1]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Vitamin B12';
    $snp_line = $master_snp_matrix[2]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Vitamin B6';
    $snp_line = $master_snp_matrix[3]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Iron';
    $snp_line = $master_snp_matrix[4]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Vitamin B9';
    $snp_line = $master_snp_matrix[5]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    $supplement = $supplement[0];
    ////var_dump($supplement);

    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Vitamin K';
    $snp_line = $master_snp_matrix[6]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Omega 3';
    $snp_line = $master_snp_matrix[7]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Lactose Intolerance';
    $snp_line = $master_snp_matrix[8]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    //var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    $supplement = $supplement[0];
    ////var_dump($supplement);
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Calcium';
    $snp_line = $master_snp_matrix[9]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($supplement[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Restless Sleep';
    $snp_line = $master_snp_matrix[10]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Saturated Fats';
    $snp_line = $master_snp_matrix[11]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Gluten Intolerance';
    $snp_line = $master_snp_matrix[12]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Muscle Performance';
    $snp_line = $master_snp_matrix[13]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
//  //var_dump($supplement[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'Vision';
    $snp_line = $master_snp_matrix[14]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'alcohol metabolism';
    $snp_line = $master_snp_matrix[15]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'alcohol blush';
    $snp_line = $master_snp_matrix[16]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($master_snp_matrix_vitaminD[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    $name = 'caffeine';
    $snp_line = $master_snp_matrix[17]['23&me_line'];
    $gene = $array[$snp_line-1];
    $gene_array = preg_split('/\s+/', $gene);
    ////var_dump($gene_array);
    $genotype = $gene_array[3];
    $gene_name = $gene_array[0];
    // get master SNP's
    $supplement = snpmatrix::where('Gene_name', $gene_name)
               ->get()
               ->toArray();
    ////var_dump($supplement[0]);
    $supplement = $supplement[0];
    if ($genotype = $supplement['Genotype1']){
      $snp_match_summary = $supplement['Genotypesummary1'];
    } else if ($genotype = $supplement['Genotype2'] ){
      $snp_match_summary = $supplement['Genotypesummary2'];
    } else if ( $genotype = $supplement['Genotype3']){
      $snp_match_summary = $supplement['Genotypesummary3'];
    }

    // store in display Database
    $results = new results;

    $results->username = $filename;
    $results->report_results = $snp_match_summary;
    $results->supplement = $name;

    $results->save();

    return view('spinner');

  }

  public function upload23andme()
  {
    // upload last 23andme data
    // profile id /last uploaded


    //first gene rs12794714 vitamin D
    $someModel->setConnection('mysql2');

    //$marker_data = marker
    $variant_data = variants::get();

    //var_dump($variant_data);

    // match SNP's
    $master_snp_matrix = snpmatrix::where('In23andme', 1)
               ->get();

    // report results after matching send to tabel for that users

    return view('spinner');


  }

}
