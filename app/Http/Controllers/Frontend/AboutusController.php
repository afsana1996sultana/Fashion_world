<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
       //$data['about'] = About::select('id', 'header1', 'header2', 'title1', 'title2', 'long_description1', 'long_description2', 'img1', 'img2')->get();

       //$data['offer'] = Offer::select('id', 'header', 'icon', 'detail')->get();

       return view('pages.frontend.about-us.index'); 
    }
}
