<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class 23andme extends Controller
{
    //
    public function index($report_type)
    {

      $data['report_type'] = $report_type;

      $records = DB::table('reports')->get();

      var_dump($records);
      //return view ('23andme')->with('records',$records);
    }
}
