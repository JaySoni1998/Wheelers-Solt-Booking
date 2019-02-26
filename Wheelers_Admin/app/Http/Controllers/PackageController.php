<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\package_details;//path of model

class PackageController extends Controller
{
    //add method here
    public function Add_Package(Request $request){
    	//only print requested params
    	//save data  to table
    	$post = package_details::create([
    		"P_Name"=>$request->PackageName,
    		"P_Discount"=>$request->discount
    	]);
    	return redirect('/View_Package');
    }

    //Show method
    public function View_Package(Request $request)
    {
    	//get all data
    	$posts = package_details::all();
    	//simple display all data
    	

    	return view('View_Package')->with('Package_ViewData',$posts); 
    }

    //delete
    public function Delete_Package(Request $request,$P_No)
    {

    	package_details::where('P_No',$P_No)->delete();
    	return redirect('/View_Package');
    }

    //update
    public function Update_Package(Request $request,$P_No)
    {
    	
    	//$post = package_details::find($P_No);

    	 $post = package_details::where("P_No",$P_No)->first();
    	
    	return view('Update_Package')->with('post',$post);
    }

    //save update
    public function SaveUpdate_Package(Request $request)
    {
    	
    	//$post = package_details::find($P_No);

    	package_details::where("P_No",$request->P_No)->update([
    		'P_Name'=>$request->PackageName,
    		'P_Discount'=>$request->discount

    	]);
    	
    	return redirect('/View_Package');
    }

    //report
    public function Report_Package(Request $request)
    {
        //get all data
        $post = package_details::all();
        //simple display all data
        

        return view('Report_Package')->with('Packagepostdata',$post);
    }


}
