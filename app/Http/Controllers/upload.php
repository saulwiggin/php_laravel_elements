<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;

class upload extends Controller
{
  public function uploadFileToS3(Request $request)
  {
    $image = $request->file('image');
  }
}
