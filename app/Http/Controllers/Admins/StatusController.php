<?php

namespace App\Http\Controllers\Admins;

use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $status=Status::all();
        return view("pages.backends.status.index",["status"=>$status]);
        
    }


    public function store(Request $request){
        $status=new Status; 
        $status->s_name=$request->txtName;
        $status->deleted_at=$request->txtDeleted_at;
        $status->save();
               
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$status=Status::find($id);
		return response()->json([
			'status'=>200,
			'status'=>$status
		]);
	}


    
    public function update(Request $request,Status $status){
        $statusid=$request->input('cmbStatusId');
        $status = Status::find($statusid);
        $status->id=$request->cmbStatusId; 
        $status->s_name=$request->txtName;
        $status->deleted_at=$request->txtDeleted_at;		   
        $status->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $statusid=$request->input('d_status');
		$status= Status::find($statusid);
		$status->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
