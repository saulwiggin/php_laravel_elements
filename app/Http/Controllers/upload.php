<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;


class upload extends Controller
{
  $image = $request->file('image');

}
