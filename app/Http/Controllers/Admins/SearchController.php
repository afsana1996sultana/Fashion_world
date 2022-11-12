<?php

namespace App\Http\Controllers\Admins;

use App\Models\Search;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $search=Search::all();
        return view("pages.backends.search.index",["search"=>$search]);
        
    }

    public function search_suggest(Request $request){
        $searched_slug = Search::where('name', 'like', '%' . $request->name . '%')->select('slug','name')->get();
        return response($searched_slug);
    }


    public function store(Request $request){
        $search=new Search; 
        $search->name=$request->txtName;
        $search->slug=$request->txtSlug;
        $search->deleted_at=$request->txtDeleted_at;
        $search->save();
               
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$search=Search::find($id);
		return response()->json([
			'status'=>200,
			'search'=>$search
		]);
	}


    public function update(Request $request,Search $search){
        $searchid=$request->input('cmbSearchId');
        $search = Search::find($searchid);
        $search->id=$request->cmbSearchId; 
        $search->name=$request->txtName;
        $search->slug=$request->txtSlug;
        $search->deleted_at=$request->txtDeleted_at;		   
        $search->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $searchid=$request->input('d_search');
		$search= Search::find($searchid);
		$search->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
