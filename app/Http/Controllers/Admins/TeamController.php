<?php

namespace App\Http\Controllers\Admins;

use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TeamController extends Controller
{
    public function index()
    {
        $team=Team::all();
        return view("pages.backends.team.index",["team"=>$team]);
        
    }


    public function store(Request $request){
        $team=new Team; 
        $team->name=$request->txtName;
        $team->email=$request->txtEmail;
        $team->qualification=$request->txtQualification;
        $team->designation=$request->txtDesignation;
        $team->facebook_url=$request->txtFacebookUrl;
        $team->twitter_url=$request->txtTwitterUrl;
        $team->instagram_url=$request->txtInstagramUrl;
        $team->linkedin_url=$request->txtLinkedinUrl;

        if(isset($request->filePhoto)){
            $imgName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$team->img=$imgName;
			$team->update();
			$request->filePhoto->move(public_path('img'),$imgName);
		}

        $team->deleted_at=$request->txtDeleted_at;
        $team->save();     
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
		$team=Team::find($id);
		return response()->json([
			'status'=>200,
			'team'=>$team
		]);
	}


    public function update(Request $request,Team $team){
        $teamid=$request->input('cmbTeamId');
        $team = Team::find($teamid);
        $team->id=$request->cmbTeamId; 
        $team->name=$request->txtName;
        $team->email=$request->txtEmail;
        $team->qualification=$request->txtQualification;
        $team->designation=$request->txtDesignation;
        $team->facebook_url=$request->txtFacebookUrl;
        $team->twitter_url=$request->txtTwitterUrl;
        $team->instagram_url=$request->txtInstagramUrl;
        $team->linkedin_url=$request->txtLinkedinUrl;

        if(isset($request->filePhoto)){
			$imgName = time().(rand(100,1000)).'.'.$request->filePhoto->extension();
			$team->img=$imgName;
			$request->filePhoto->move(public_path('img'),$imgName);
		}

        $team->deleted_at=$request->txtDeleted_at;		   
        $team->update();
        return redirect()->back()
        ->with('success',' Updated successfully');               
    }
    
    
    public function destroy(Request $request){  
        $teamid=$request->input('d_team');
		$team= Team::find($teamid);
		$team->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
