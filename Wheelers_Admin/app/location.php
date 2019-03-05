<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    //table name
    protected $table = "location";

    //all col
    protected $fillable = [
    	"Place_No",
    	"Parking_Place_Name",
    	"Address",
    	"Area_Code",
        "Latitude",
        "Longitude",
    	"created_at",
    	"updated_at"
    ];
}
