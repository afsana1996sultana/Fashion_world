<?php

namespace App\Http\Controllers\Admins;
use Illuminate\Support\Facades\DB;
use App\Models\Topbar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopbarController extends Controller
{
    public function index()
    {
        $topbar=Topbar::all(); 
        return view("pages.backends.topbar.index",["topbar"=>$topbar]);
        
    }


    public function edit($id){
		$topbar=Topbar::find($id);
        return view("pages.backends.topbar.index",["topbar"=>$topbar]);	
	}



    public function update(Request $request,$id){
        $topbar = Topbar::find($id);

        if(isset($request->fileLogo)){
            $LogoName = time().(rand(100,1000)).'.'.$request->fileLogo->extension();
            $topbar->front_logo=$LogoName;
            $request->fileLogo->move(public_path('img'),$LogoName);
        }


        if(isset($request->fileWhiteLogo)){
            $WhiteLogoName = time().(rand(100,1000)).'.'.$request->fileWhiteLogo->extension();
            $topbar->front_white_logo=$WhiteLogoName;
            $request->fileWhiteLogo->move(public_path('img'),$WhiteLogoName);
        }


        if(isset($request->txtTitle)){
            $topbar->title=$request->txtTitle;
        }

        if(isset($request->txtPhone)){
          $topbar->phone=$request->txtPhone;
        }

        $topbar->account=$request->txtAccount;
        $topbar->login=$request->txtLogin;

        $topbar->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
