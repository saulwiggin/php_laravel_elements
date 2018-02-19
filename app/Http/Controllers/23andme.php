<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class 23andme extends Controller
{
    //
    public function index()
    {
    $records = DB::table('record')->get();
    return view ('Path to your blade template')->with('records',$records);
    }
}
