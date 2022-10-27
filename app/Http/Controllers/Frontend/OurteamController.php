<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Ourteam;
use App\Models\Team;
use App\Models\Partner;
use Illuminate\Http\Request;

class OurteamController extends Controller
{
    public function index()
    {
       $data['team'] = Team::select('id', 'name', 'email','qualification', 'designation', 'facebook_url', 'twitter_url', 'instagram_url', 'linkedin_url', 'img')->get();

       $data['partner'] = Partner::select('id', 'partner_logo')->get();

       return view('pages.frontend.our-team.index', $data); 
    }
}
