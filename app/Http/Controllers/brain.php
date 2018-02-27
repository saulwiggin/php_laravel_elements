<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\snpmatrix;
use App\variants;


class brain extends Controller
{
  public function index()
  {
    return view('dashboard');
  }

  public function upload23andme()
  {
    // upload last 23andme data
    //profile id /last uploaded

    //first gene rs12794714 vitamin D

    //$marker_data = marker
    $variant_data = variants

    // match SNP's
    $master_snp_matrix = snpmatrix::::where('In23andme', 1)
               ->get();

    // report results after matching send to tabel for that users

    
  }
  public function txtDNAupload($firstname, $lastname)
  {
    //  upload last uploaded genome
    $filename = $firstname . $lastname . '.txt';
      $contents = Storage::get($filename);

    // SNP matrix

    // match SNP's

    // display data
  }
}
