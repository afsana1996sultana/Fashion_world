<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Quicklink;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuicklinkController extends Controller
{
    public function index()
    {
        $quicklink=Quicklink::all();
        return view("pages.backends.quick-link.index",["quicklink"=>$quicklink]);
        
    }


    public function store(Request $request){
        $quicklink=new Quicklink; 
        $quicklink->name=$request->txtName;
        $quicklink->slug=$request->txtSlug;
        $quicklink->deleted_at=$request->txtDeleted_at;
        $quicklink->save();
               
        return back()->with('success','Created Successfully.');
    }


    public function edit($id){
		$quicklink=Quicklink::find($id);
		return response()->json([
			'status'=>200,
			'quicklink'=>$quicklink
		]);
	}


    public function update(Request $request,Quicklink $quicklink){
        $quicklinkid=$request->input('cmbQuicklinkId');
        $quicklink = Quicklink::find($quicklinkid);
        $quicklink->id=$request->cmbQuicklinkId; 
        $quicklink->name=$request->txtName;
        $quicklink->slug=$request->txtSlug;
        $quicklink->deleted_at=$request->txtDeleted_at;		   
        $quicklink->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }

    
    public function destroy(Request $request){  
        $quicklinkid=$request->input('d_quicklink');
		$quicklink= Quicklink::find($quicklinkid);
		$quicklink->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
