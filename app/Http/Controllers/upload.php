<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


class upload extends Controller
{
  public function uploadFileToS3(Request $request)
  {
    $file = $request->file('file');
    $first_name = $request->input('first_name');
    $last_name = $request->input('last_name');
    $username = $first_name . $last_name;
    $filename = $first_name . $last_name . '.txt';

  //  $public_path = public_path();
  //  $request->file('file')->move($public_path.'/storage/genetic_upload/'.$filename.'');

    Storage::disk('local')->put($filename, file_get_contents($file));

  //  $username = 'Saulwiggin';
    $url = '/txtDNAupload';
    return Redirect::to($url);
  }
}
