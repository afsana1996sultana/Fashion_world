<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Chooseus;
use Illuminate\Http\Request;

class ChooseusController extends Controller
{
    public function index()
    {
       return view('pages.frontend.choose-us.index'); 
    }
}
