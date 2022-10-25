<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Ourclient;
use Illuminate\Http\Request;

class OurclientController extends Controller
{
    public function index()
    {
       return view('pages.frontend.0ur-client.index'); 
    }
}
