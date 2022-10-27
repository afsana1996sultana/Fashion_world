<?php

namespace App\Http\Controllers\Admins;

use App\Models\Partner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partner=Partner::all();
        return view("pages.backends.partner.index",["partner"=>$partner]);
        
    }


    public function store(Request $request){
        $partner=new Partner; 
        $partner->name=$request->txtName;

        if(isset($request->filePhoto)){
            $imgName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$partner->partner_logo=$imgName;
			$partner->update();
			$request->filePhoto->move(public_path('img'),$imgName);
		}
        $partner->deleted_at=$request->txtDeleted_at;
        $partner->save();
               
        return back()->with('success','Created Successfully.');     
    }


    
    public function edit($id){
		$partner=Partner::find($id);
		return response()->json([
			'status'=>200,
			'partner'=>$partner
		]);
	}


    public function update(Request $request,Partner $partner){
        $partnerid=$request->input('cmbPartnerId');
        $partner = Partner::find($partnerid);
        $partner->id=$request->cmbPartnerId; 
        $partner->name=$request->txtName;
        
        if(isset($request->filePhoto)){
			$imgName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$partner->partner_logo=$imgName;
			$request->filePhoto->move(public_path('img'),$imgName);
		}
        $partner->deleted_at=$request->txtDeleted_at;		   
        $partner->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $partnerid=$request->input('d_partner');
		$partner= Partner::find($partnerid);
		$partner->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
