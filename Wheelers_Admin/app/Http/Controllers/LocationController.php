<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\location;

class LocationController extends Controller
{
    //add method here
    public function Add_Location(Request $request){
    	//only print requested params
    	//save data  to table
    	$post = location::create([
    		"Place_No"=>$request->PlaceNo,
            "Parking_Place_Name"=>$request->ParkingPlace,
            "Address"=>$request->Location,
    		"Area_Code"=>$request->AreaCode,
            "Latitude"=>$request->Lat,
            "Longitude"=>$request->Long
    		
	    	
    	]);
    	return redirect('/View_Location');
    }

    //Show method
    public function ViewLocation(Request $request)
    {
    	//get all data
    	$post = location::all();
    	//simple display all data
    	

        return view('View_Location')->with('Locationpostdata',$post);
    }

    //delete
    public function Delete_Location(Request $request,$Place_No)
    {

    	location::where('Place_No',$Place_No)->delete();
    	return redirect('/View_Location');
    }

    //update
    public function Update_Location(Request $request,$Place_No)
    {
    	$post = location::where("Place_No",$Place_No)->first();
    	
    	return view('Update_Location')->with('post',$post);
    }

    //save update
    public function SaveUpdate_Location(Request $request)
    {
    	// dd($request->all());
    	//$post = location::find($Place_No);

    	location::where("Place_No",$request->PlaceNo)->update([
    		"Place_No"=>$request->PlaceNo,
            "Parking_Place_Name"=>$request->ParkingPlace,
            "Address"=>$request->Location,
            "Area_Code"=>$request->AreaCode,
            "Latitude"=>$request->Lat,
            "Longitude"=>$request->Long

    	]);
    	
    	return redirect('/View_Location');
    }

    //report
    public function Report_Location(Request $request)
    {
        //get all data
        $post = location::all();
        //simple display all data
        

        return view('Report_Location')->with('Locationpostdata',$post);
    }

}
