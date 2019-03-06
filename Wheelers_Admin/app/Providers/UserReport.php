<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserReport extends Model
{
    //table name
    protected $table = "user_registration";

    //all col
    protected $fillable = [
    	"U_ID",
        "U_FirstName",
        "U_LastName",
        "U_Gender",
        "Email_ID",
        "Cont_No"
    ];
}
