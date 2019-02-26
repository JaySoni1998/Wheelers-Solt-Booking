<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    //table name
    protected $table = "admin";

    //all col
    protected $fillable = [
    	"A_ID",
    	"A_Name",
    	"Gender",
    	"A_Add",
    	"Email_ID",
    	"Cont_No",
    	"img",
    	"created_at",
    	"updated_at"
    ];
   
}
