<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    //table name
    protected $table = "feedback";

    //all col
    protected $fillable = [
    	"F_ID",
    	"U_ID",
    	"Review",
    	"created_at",
    	"updated_at"
    ];

    public function userget()
    {
        return $this->belongsTo('App\user_registration','U_ID','U_ID');
        
    }
}
