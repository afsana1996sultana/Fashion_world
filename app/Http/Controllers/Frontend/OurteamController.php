<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Ourteam;
use Illuminate\Http\Request;

class OurteamController extends Controller
{
    public function index()
    {

       return view('pages.frontend.our-team.index'); 
    }
}
