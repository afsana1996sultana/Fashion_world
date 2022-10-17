<?php

namespace App\Http\Controllers\Admins;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view("pages.backends.users.index_users",["users"=>$users]);
    }

    public function store(Request $request){
        $users=new User; 
        $users->name=$request->txtName;
        $users->email=$request->txtEmail;
        $users->role_id=$request->txtRoleId;
        // $users->email_verified_at=$request->txtEmailVerifiedAt;
        $users->password=Hash::make($request->txtPassword);
        

        $users->deleted_at=$request->txtDeleted_at;
        $users->save();     
        return back()->with('success','Created Successfully.');
          
    }


    public function show($id){
		$users=User::find($id);
		return response()->json([
			'status'=>200,
			'users'=>$users
		]);
	}


    public function edit($id){
		$users=User::find($id);
		return response()->json([
			'status'=>200,
			'users'=>$users
		]);
	}

    public function update(Request $request){
        $usersid=$request->input('cmbUsersId');
        $users = User::find($usersid);
        //$users->id=$request->cmbUserId;
        $users->name=$request->txtName;
        $users->email=$request->txtEmail;
        $users->role_id=$request->txtRoleId;
        // $users->email_verified_at=$request->txtEmailVerifiedAt;
        $users->password=Hash::make($request->txtPassword);

        $users->deleted_at=$request->txtDeleted_at;
        $users->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }

    public function destroy(Request $request){  
        $usersid=$request->input('d_users');
		$users= User::find($usersid);
		$users->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
