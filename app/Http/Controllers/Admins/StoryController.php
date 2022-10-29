<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Support\Facades\DB;
use App\Models\Story;
use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $status=Status::all();

        $story =DB::table('stories')
            ->join('statuses','statuses.id', '=', 'stories.status')
            ->select('statuses.s_name', 'stories.*')
            ->get();
        return view("pages.backends.story.index",["story"=>$story, "status"=>$status]);
        
    }


    public function store(Request $request){
        $story=new Story; 
        $story->story_name=$request->txtStoryName;
        $story->status=$request->txtStatus;
        $story->deleted_at=$request->txtDeleted_at;
        $story->save();
               
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$story=Story::find($id);
		return response()->json([
			'status'=>200,
			'story'=>$story
		]);
	}


    public function update(Request $request,Story $story){
        $storyid=$request->input('cmbStoryId');
        $story = Story::find($storyid);
        $story->id=$request->cmbStoryId; 
        $story->story_name=$request->txtStoryName;
        $story->status=$request->txtStatus;
        $story->deleted_at=$request->txtDeleted_at;		   
        $story->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


        
    public function destroy(Request $request){  
        $storyid=$request->input('d_story');
		$story= Story::find($storyid);
		$story->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
