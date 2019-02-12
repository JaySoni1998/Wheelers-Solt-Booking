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
    	"Area_Code",
    	"Location_Name",
    	"parking_Place",
    	"created_at",
    	"updated_at"
    ];
}
