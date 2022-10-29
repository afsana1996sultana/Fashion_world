<?php

namespace App\Http\Controllers\Admins;

use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonial=Testimonial::all();
        return view("pages.backends.testimonial.index",["testimonial"=>$testimonial]);
        
    }


    public function store(Request $request){
        $testimonial=new Testimonial; 
        $testimonial->name=$request->txtName;
        $testimonial->designation=$request->txtDesignation;
        $testimonial->detail=$request->txtDetail;

        if(isset($request->filePhoto)){
            $imgName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$testimonial->img=$imgName;
			$testimonial->update();
			$request->filePhoto->move(public_path('img'),$imgName);
		}

        $testimonial->deleted_at=$request->txtDeleted_at;
        $testimonial->save();     
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$testimonial=Testimonial::find($id);
		return response()->json([
			'status'=>200,
			'testimonial'=>$testimonial
		]);
	}

    public function update(Request $request,Testimonial $testimonial){
        $testimonialid=$request->input('cmbTestimonialId');
        $testimonial = Testimonial::find($testimonialid);
        $testimonial->id=$request->cmbTestimonialId; 
        $testimonial->name=$request->txtName;
        $testimonial->designation=$request->txtDesignation;
        $testimonial->detail=$request->txtDetail;

        if(isset($request->filePhoto)){
            $imgName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$testimonial->img=$imgName;
			$request->filePhoto->move(public_path('img'),$imgName);
		}

        $testimonial->deleted_at=$request->txtDeleted_at;		   
        $testimonial->update();
        return redirect()->back()
        ->with('success',' Updated successfully');               
    }


    public function destroy(Request $request){  
        $testimonialid=$request->input('d_testimonial');
		$testimonial= Testimonial::find($testimonialid);
		$testimonial->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
