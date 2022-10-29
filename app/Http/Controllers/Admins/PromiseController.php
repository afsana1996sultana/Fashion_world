<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Promise;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromiseController extends Controller
{
    public function index()
    {
        $status=Status::all();

        $promise =DB::table('promises')
            ->join('statuses','statuses.id', '=', 'promises.status')
            ->select('statuses.s_name', 'promises.*')
            ->get();
        return view("pages.backends.promise.index",["promise"=>$promise, "status"=>$status]);
        
    }


    public function store(Request $request){
        $promise=new Promise; 
        $promise->promise_name=$request->txtPromiseName;
        $promise->status=$request->txtStatus;
        $promise->deleted_at=$request->txtDeleted_at;
        $promise->save();
               
        return back()->with('success','Created Successfully.');
          
    }

    
    public function edit($id){
		$promise=Promise::find($id);
		return response()->json([
			'status'=>200,
			'promise'=>$promise
		]);
	}


    public function update(Request $request,Promise $promise){
        $promiseid=$request->input('cmbPromiseId');
        $promise = Promise::find($promiseid);
        $promise->id=$request->cmbPromiseId; 
        $promise->promise_name=$request->txtPromiseName;
        $promise->status=$request->txtStatus;
        $promise->deleted_at=$request->txtDeleted_at;		   
        $promise->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }

    
    public function destroy(Request $request){  
        $promiseid=$request->input('d_promise');
		$promise= Promise::find($promiseid);
		$promise->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
