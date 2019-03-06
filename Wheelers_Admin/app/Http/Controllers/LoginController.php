<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
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
}
