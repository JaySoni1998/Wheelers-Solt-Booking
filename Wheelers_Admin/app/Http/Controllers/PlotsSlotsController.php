<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\add_plots_and_slots;
use App\location;

class PlotsSlotsController extends Controller
{

    public function showAddForm(request $request)
        {
            $Place=location::all();
            return view('Add_Plots_&_Slots')->with('Place',$Place);
        }
        public function getLocation(Request $request)
        {
            $location=location::where("Location_Name",$request->Place_No)->get();
            return response()->json([
                "data"=>$location->toArray()
            ]);
        }

    //add method here
    public function Add_P_S(Request $request){
    	//only print requested params
    	//save data  to table
    	$post = add_plots_and_slots::create([

        "Place_no"=>$request->PlaceNo,
        "Parking_Place_Name"=>$request->ParkingPlaceName,
    		"Address"=>$request->Address,
	    	"Slot_No"=>$request->SlotNo,
	    	"V_Type"=>$request->VType,
	    	"No_of_Slot"=>$request->NoOfSlot
    	]);
    	return redirect('/View_Plots_&_Slots');
    }

    //Show method
    public function View_Plots_Slots(Request $request)
    {
    	$posts = add_plots_and_slots::all();
    	return view('View_Plots_&_Slots')->with('P_S_ViewData',$posts);
    }

    //delete
    public function Delete_P_S(Request $request,$Place_no)
    {

    	add_plots_and_slots::where('Place_no',$Place_no)->delete();
    	return redirect('/View_Plots_&_Slots');
    }

    //update
    public function Update_Plots_Slots(Request $request,$Place_no)
    {

    	//$post = add_plots_and_slots::find($Place_no);

    	 $post = add_plots_and_slots::where("Place_no",$Place_no)->first();

    	return view('Update_Add_Plots_&_Slots')->with('post',$post);
    }

    //save update
    public function SaveUpdate_P_S(Request $request)
    {
    	add_plots_and_slots::where("Place_no",$request->Place_no)->update([
        "Place_no"=>$request->PlaceNo,
        "Parking_Place_Name"=>$request->ParkingPlaceName,
    		"Address"=>$request->Address,
	    	"Slot_No"=>$request->SlotNo,
	    	"V_Type"=>$request->VType,
	    	"No_of_Slot"=>$request->NoOfSlot
    	]);

    	return redirect('/View_Plots_&_Slots');
    }

    //report
    public function Report_Plots_Slots(Request $request)
    {
        //get all data
        $post = add_plots_and_slots::all();
        //simple display all data
        

        return view('Report_Plots_Slots')->with('PlotsSlotspostdata',$post);
    }
}
