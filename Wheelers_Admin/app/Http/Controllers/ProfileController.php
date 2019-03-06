<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;//path of model


class ProfileController extends Controller
{
    //Show method
    public function Admin_View_Profile(Request $request)
    {
    	//get all data
    	$posts = profile::all();
    	//simple display all data
    	return view('Admin_View_Profile')->with('Profile_ViewData',$posts); 
    }

     //update
    public function Update_Admin_Profile(Request $request,$A_ID)
    {
    	
    	//$post = package_details::find($P_No);

    	 $post = profile::where("A_ID",$A_ID)->first();
    	
    	return view('Update_Admin_Profile')->with('post',$post);
    }

    //save update
    public function SaveUpdate_Profile(Request $request)
    {
    	
    	//$post = package_details::find($P_No);

    	profile::where("A_ID",$request->A_Id)->update([
            'A_ID'=>$request->A_Id,
    		'A_Name'=>$request->A_Name,
    		'Gender'=>$request->Gender,
    		'A_Add'=>$request->Address,
    		'Gender'=>$request->Gender,
    		'Email_ID'=>$request->Email

    	]);
    	
    	return redirect('/Admin_View_Profile');
    }
}
