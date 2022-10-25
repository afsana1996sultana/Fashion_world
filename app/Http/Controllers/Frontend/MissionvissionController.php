<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Missionvission;
use Illuminate\Http\Request;

class MissionvissionController extends Controller
{
    public function index()
    {
       return view('pages.frontend.core-values.index'); 
    }
}
