<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Ourclient;
use App\Models\Client;
use Illuminate\Http\Request;

class OurclientController extends Controller
{
    public function index()
    {
       $data['client'] = Client::select('id', 'img')->get();

       return view('pages.frontend.0ur-client.index', $data); 
    }
}
