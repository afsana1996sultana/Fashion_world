<?php

namespace App\Http\Controllers\Admins;
use Illuminate\Support\Facades\DB;
use App\Models\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footer=Footer::all(); 
        return view("pages.backends.footer.index",["footer"=>$footer]);
        
    }


    public function edit($id){
		$footer=Footer::find($id);
        return view("pages.backends.footer.index",["footer"=>$footer]);	
	}


    public function update(Request $request,$id){
        $footer = Footer::find($id);

        if(isset($request->filevisaImg)){
            $visaImgName = time().(rand(100,1000)).'.'.$request->filevisaImg->extension();
            $footer->visa_img=$visaImgName;
            $request->filevisaImg->move(public_path('img'),$visaImgName);
        }


        if(isset($request->filemastercardImg)){
            $mastercardImgName = time().(rand(100,1000)).'.'.$request->filemastercardImg->extension();
            $footer->mastercard_img=$mastercardImgName;
            $request->filemastercardImg->move(public_path('img'),$mastercardImgName);
        }


        if(isset($request->filevisa2Img)){
            $visa2ImgName = time().(rand(100,1000)).'.'.$request->filevisa2Img->extension();
            $footer->visa2_img=$visa2ImgName;
            $request->filevisa2Img->move(public_path('img'),$visa2ImgName);
        }


        if(isset($request->filemastercard2Img)){
            $mastercard2ImgName = time().(rand(100,1000)).'.'.$request->filemastercard2Img->extension();
            $footer->mastercard2_img=$mastercard2ImgName;
            $request->filemastercard2Img->move(public_path('img'),$mastercard2ImgName);
        }


        if(isset($request->fileexpresscard)){
            $expresscardName = time().(rand(100,1000)).'.'.$request->fileexpresscard->extension();
            $footer->expresscard_img=$expresscardName;
            $request->fileexpresscard->move(public_path('img'),$expresscardName);
        }


        if(isset($request->txtFooterAddress)){
            $footer->f_address=$request->txtFooterAddress;
        }

          
        if(isset($request->txtFooterPhone)){
          $footer->f_phone=$request->txtFooterPhone;
        }


        if(isset($request->txtFooteremail)){
            $footer->f_email=$request->txtFooteremail;
        }
        

        if(isset($request->txtfootercopyright)){
          $footer->f_copyright=$request->txtfootercopyright;
        }


        $footer->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
