<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
      $this->vars = [
        'title' => 'Report'
      ];
        return view('BackEnd.Report.v_report',$this->vars);
    }
}
