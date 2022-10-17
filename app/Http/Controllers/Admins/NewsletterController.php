<?php

namespace App\Http\Controllers\Admins;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletter=Newsletter::all();
        //dd($newsletter);
        return view("pages.backends.newsletter.index",["newsletter"=>$newsletter]);
    }


    public function store(Request $request){
        $this->validate($request, [
            'txtEmail' => 'required|email',
         ]);

        $newsletter = new Newsletter; 
        $newsletter->email=$request->txtEmail;

        $newsletter->save();
        //return $request;
        return back()->with('your message has been saved successfully!');
    }


    public function show($id){
		$newsletter=Newsletter::find($id);
		return response()->json([
			'status'=>200,
			'newsletter'=>$newsletter
		]);
	}


    public function destroy(Request $request){  
        $newsletterid=$request->input('d_newsletter');
		$newsletter= Newsletter::find($newsletterid);
		$newsletter->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
