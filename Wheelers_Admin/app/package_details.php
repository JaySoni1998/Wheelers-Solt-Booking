<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class package_details extends Model
{
    //table name
    protected $table = "package_details";

    //all col
    protected $fillable = [
    	"P_No",
    	"P_Name",
    	"P_Discount"
    ];
}
