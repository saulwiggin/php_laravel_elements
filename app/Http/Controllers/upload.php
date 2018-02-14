<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;

class upload extends Controller
{
  public function uploadFileToS3(Request $request)
  {
    $file = $request->file('file');
    $first_name = $request->input('first_name');
    $last_name = $request->input('last_name');
    $filename = $first_name . $last_name . '.txt';

    $public_path = public_path();
    $request->file('file')->move($public_path.'/storage/genetic_upload/'.$filename.'');

    $url = 'http://www.nell.co.uk'
    return Redirect::to($url);
  }
}
