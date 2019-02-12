<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff_details extends Model
{
    //table name
    protected $table = "staff_details";

    //all col
    protected $fillable = [
    		"Emp_ID",
    		"Emp_Name",
    		"Gender",
    		"Mob_No",
    		"Email_ID",
            "Password",
    		"Join_Date",
    		"DOB",
    		"Address",
    		"created_at",
    		"updated_at"
    ];
}
