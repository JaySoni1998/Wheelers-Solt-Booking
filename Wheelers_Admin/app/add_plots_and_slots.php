<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class add_plots_and_slots extends Model
{

    //table name
    protected $table = "add_plots_and_slots";

    //all col
    protected $fillable = [
      "Place_no",
      "Parking_Place_Name",
      "Address",
      "Slot_No",
      "V_Type",
      "No_of_Slot"
    ];
}
