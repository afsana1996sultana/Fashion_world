<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Companyflowchart;
use Illuminate\Http\Request;

class CompanyflowchartController extends Controller
{
    public function index()
    {

       return view('pages.frontend.company-flowchart.index'); 
    }
}
