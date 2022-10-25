<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Corevalue;
use Illuminate\Http\Request;

class CorevalueController extends Controller
{
    public function index()
    {

       return view('pages.frontend.core-values.index'); 
    }
}
