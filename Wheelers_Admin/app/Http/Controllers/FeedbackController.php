<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\feedback;

class FeedbackController extends Controller
{
    //Show method
    public function View_Feedback(Request $request)
    {
    	//get all data
    	$posts = feedback::all();
    	//simple display all data
    	return view('View_Feedback')->with('Feedback_ViewData',$posts); 
    }

    //delete
    public function Delete_Feedback(Request $request,$P_No)
    {

    	feedback::where('F_ID',$P_No)->delete();
    	return redirect('/View_Feedback');
    }
}
