<?php

namespace App\Http\Controllers\Admins;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about=About::all();
        return view("pages.backends.about.index",["about"=>$about]);
        
    }

    public function edit($id){
        $about=About::find($id);
        return view("pages.backends.about.index",["about"=>$about]);	
    }


    public function update(Request $request,$id){
        $about = About::find($id);

        if(isset($request->fileimg1)){
            $img1Name = time().(rand(100,1000)).'.'.$request->fileimg1->extension();
            $about->img1=$img1Name;
            $request->fileimg1->move(public_path('img'),$img1Name);
        }


        if(isset($request->fileimg2)){
            $img2Name = time().(rand(100,1000)).'.'.$request->fileimg2->extension();
            $about->img2=$img2Name;
            $request->fileimg2->move(public_path('img'),$img2Name);
        }

        if(isset($request->txtTitle)){
            $about->title=$request->txtTitle;
          }


        if(isset($request->txtHeading1)){
            $about->heading1=$request->txtHeading1;
        }

        if(isset($request->txtHeading2)){
            $about->heading2=$request->txtHeading2;
        }

        if(isset($request->txtOtherHeading)){
            $about->other_heading=$request->txtOtherHeading;
        }


        if(isset($request->txtDetail)){
            $about->detail=$request->txtDetail;
        }


        if(isset($request->txtOtherDetail)){
            $about->other_detail=$request->txtOtherDetail;
        }


        if(isset($request->txtTab1)){
            $about->tab1=$request->txtTab1;
        }


        if(isset($request->txtTab2)){
            $about->tab2=$request->txtTab2;
        }


        if(isset($request->txtTab3)){
            $about->tab3=$request->txtTab3;
        }

        $about->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
