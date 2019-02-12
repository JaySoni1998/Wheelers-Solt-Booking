<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\staff_details;

class StaffController extends Controller
{
    //add method here
    public function Add_Staff_Details(Request $request){
    	//only print requested params
    	//save data  to table
    	$post = staff_details::create([
    		"Emp_Name"=>$request->StaffName,
    		"Gender"=>$request->Gender,
    		"Mob_No"=>$request->Mob_No,
    		"Email_ID"=>$request->Email_ID,
            "Password"=>$request->pass,
    		"Join_Date"=>$request->Join_Date,
    		"DOB"=>$request->DOB,
    		"Address"=>$request->Address
    	]);
    	return redirect('/View_Staff');
    }

    //Show method
    public function View_Staff(Request $request)
    {
    	//get all data
    	$posts = staff_details::all();
    	//simple display all data
    	

    	return view('View_Staff')->with('Staff_ViewData',$posts); 
    }

    //delete
    public function Delete_Staff(Request $request,$Emp_ID)
    {

    	staff_details::where('Emp_ID',$Emp_ID)->delete();
    	return redirect('/View_Staff');
    }

    //update
    public function Update_Staff(Request $request,$Emp_ID)
    {
    	
    	//$post = package_details::find($Emp_ID);

    	 $post = staff_details::where("Emp_ID",$Emp_ID)->first();
    	
    	return view('Update_Staff')->with('post',$post);
    }

    //save update
    public function SaveUpdate_Staff(Request $request)
    {
    	
    	//$post = package_details::find($Emp_ID);

    	staff_details::where("Emp_ID",$request->Emp_ID)->update([
    		"Emp_Name"=>$request->Emp_Name,
    		"Gender"=>$request->Gender,
    		"Mob_No"=>$request->Mob_No,
    		"Email_ID"=>$request->Email_ID,
    		"Join_Date"=>$request->Join_Date,
    		"DOB"=>$request->DOB,
    		"Address"=>$request->Address

    	]);
    	
    	return redirect('/View_Staff');
    }

}
