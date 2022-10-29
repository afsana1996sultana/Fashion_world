<?php


namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Value;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ValueController extends Controller
{
    public function index()
    {
        $status=Status::all();

        $value =DB::table('values')
            ->join('statuses','statuses.id', '=', 'values.status')
            ->select('statuses.s_name', 'values.*')
            ->get();
        return view("pages.backends.value.index",["value"=>$value, "status"=>$status]);
        
    }


    public function store(Request $request){
        $value=new Value; 
        $value->value_name=$request->txtValueName;
        $value->status=$request->txtStatus;
        $value->deleted_at=$request->txtDeleted_at;
        $value->save();
               
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$value=Value::find($id);
		return response()->json([
			'status'=>200,
			'value'=>$value
		]);
	}


    public function update(Request $request,Value $value){
        $valueid=$request->input('cmbValueId');
        $value = Value::find($valueid);
        $value->id=$request->cmbValueId; 
        $value->value_name=$request->txtValueName;
        $value->status=$request->txtStatus;
        $value->deleted_at=$request->txtDeleted_at;		   
        $value->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $valueid=$request->input('d_value');
		$value= Value::find($valueid);
		$value->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
