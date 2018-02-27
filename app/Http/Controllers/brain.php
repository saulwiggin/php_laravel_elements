<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class brain extends Controller
{
  public function index()
  {
    return view('dashboard');
  }

  public function upload23andme()
  {
    // upload last 23andme data

    // match SNP's

    // display data
  }
  public function txtDNAupload()
  {
    //  upload last uploaded genome

    // SNP matrix

    // match SNP's

    // display data
  }
}
