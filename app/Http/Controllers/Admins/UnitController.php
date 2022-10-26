<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Unit;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $status=Status::all();
        $unit =DB::table('units')
            ->join('statuses','statuses.id', '=', 'units.status')
            ->select('statuses.s_name', 'units.*')
            ->get();
        return view("pages.backends.unit.index",["unit"=>$unit, "status"=>$status]);
        
    }

    public function store(Request $request){
        $unit=new Unit; 
        $unit->unit_name=$request->txtUnitName;
        $unit->status=$request->txtStatus;
        $unit->deleted_at=$request->txtDeleted_at;
        $unit->save();
               
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$unit=Unit::find($id);
		return response()->json([
			'status'=>200,
			'unit'=>$unit
		]);
	}


    public function update(Request $request,Unit $unit){
        $unitid=$request->input('cmbUnitId');
        $unit = Unit::find($unitid);
        $unit->id=$request->cmbUnitId; 
        $unit->unit_name=$request->txtUnitName;
        $unit->status=$request->txtStatus;
        $unit->deleted_at=$request->txtDeleted_at;		   
        $unit->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $unitid=$request->input('d_unit');
		$unit= Unit::find($unitid);
		$unit->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
