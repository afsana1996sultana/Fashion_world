<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Sociallink;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SociallinkController extends Controller
{
    public function index()
    {
        $sociallink=Sociallink::all();
        return view("pages.backends.social-link.index",["sociallink"=>$sociallink]);
        
    }


    public function store(Request $request){
        $sociallink=new Sociallink; 
        $sociallink->name=$request->txtName;
        $sociallink->slug=$request->txtSlug;
        $sociallink->icon=$request->txtIcon;
        $sociallink->deleted_at=$request->txtDeleted_at;
        $sociallink->save();
               
        return back()->with('success','Created Successfully.');
    }


    public function edit($id){
		$sociallink=Sociallink::find($id);
		return response()->json([
			'status'=>200,
			'sociallink'=>$sociallink
		]);
	}


    public function update(Request $request,Sociallink $sociallink){
        $sociallinkid=$request->input('cmbSociallinkId');
        $sociallink = Sociallink::find($sociallinkid);
        $sociallink->id=$request->cmbSociallinkId; 
        $sociallink->name=$request->txtName;
        $sociallink->slug=$request->txtSlug;
        $sociallink->icon=$request->txtIcon;
        $sociallink->deleted_at=$request->txtDeleted_at;		   
        $sociallink->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


        
    public function destroy(Request $request){  
        $sociallinkid=$request->input('d_sociallink');
		$sociallink= Sociallink::find($sociallinkid);
		$sociallink->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
