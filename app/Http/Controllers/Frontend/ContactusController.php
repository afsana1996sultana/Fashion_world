<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Contactus;
use App\Models\Sociallink;
use App\Models\Footer;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index()
    {
       $data['sociallink'] = Sociallink::select('id', 'name', 'slug', 'icon')->get();
       
       $data['footer'] = Footer::select('id', 'f_address', 'f_phone', 'f_email', 'f_copyright')->get();

       return view('pages.frontend.contact.index', $data); 
    }
}
