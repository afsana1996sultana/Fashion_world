<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Brand;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $status=Status::all();
        $brand =DB::table('brands')
            ->join('statuses','statuses.id', '=', 'brands.status')
            ->select('statuses.s_name', 'brands.*')
            ->get();
        return view("pages.backends.brand.index",["brand"=>$brand, "status"=>$status]);
        
    }


    public function store(Request $request){
        $brand=new Brand; 
        $brand->name=$request->txtName;
        $brand->slug=$request->txtSlug;
        $brand->rating=$request->txtRating;
        $brand->status=$request->txtStatus;
        $brand->deleted_at=$request->txtDeleted_at;

        if(isset($request->file_logo)){
            $logoName = (rand(100,1000)).'.'.$request->file_logo->extension();
            $brand->logo=$logoName;
            $brand->update();
            $request->file_logo->move(public_path('img'),$logoName);
        }
        $brand->save();
               
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$brand=Brand::find($id);
		return response()->json([
			'status'=>200,
			'brand'=>$brand
		]);
	}


    public function update(Request $request,Brand $brand){
        $brandid=$request->input('cmbBrandId');
        $brand = Brand::find($brandid);
        $brand->id=$request->cmbBrandId; 
        $brand->name=$request->txtName;
        $brand->slug=$request->txtSlug;
        $brand->rating=$request->txtRating;
        $brand->status=$request->txtStatus;
        $brand->deleted_at=$request->txtDeleted_at;
        
        if(isset($request->file_logo)){
            $logoName = (rand(100,1000)).'.'.$request->file_logo->extension();
            $brand->logo=$logoName;
            $request->file_logo->move(public_path('img'),$logoName);
        }
        $brand->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $brandid=$request->input('d_brand');
		$brand= Brand::find($brandid);
		$brand->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
