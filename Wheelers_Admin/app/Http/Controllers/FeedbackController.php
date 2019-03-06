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
    	$posts = feedback::with('userget')->get();
    	//simple display all data
        // dd($posts->toArray());
    	return view('View_Feedback')->with('Feedback_ViewData',$posts)->with('userget',$posts); 

    }

    //delete
    public function Delete_Feedback(Request $request,$P_No)
    {

    	feedback::where('F_ID',$P_No)->delete();
    	return redirect('/View_Feedback');
    }

    //report
    public function Report_Feedback(Request $request)
    {
        //get all data
        $post = feedback::all();
        //simple display all data
        

        return view('Report_Feedback')->with('Feedbackpostdata',$post);
    }
}
