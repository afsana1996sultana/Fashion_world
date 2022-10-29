<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\About;
use App\Models\Partner;
use App\Models\Story;
use App\Models\Value;
use App\Models\Promise;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
       $data['about'] = About::select('id', 'title', 'heading1', 'heading2', 'other_heading', 'detail', 'other_detail', 'img1', 'img2', 'tab1','tab2','tab3')->get();

       $data['story'] = Story::select('id', 'story_name')->get();

       $data['value'] = Value::select('id', 'value_name')->get();

       $data['promise'] = Promise::select('id', 'promise_name')->get();

       $data['partner'] = Partner::select('id', 'partner_logo')->get();

       $data['testimonial'] = Testimonial::select('id', 'name', 'img', 'designation', 'detail')->get();

       return view('pages.frontend.about-us.index', $data); 
    }
}
