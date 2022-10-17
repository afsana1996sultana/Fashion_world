<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
    public function home()
    {

        return view('pages.frontend.home');
        
    }
}
