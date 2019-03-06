<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_registration;

class UserController extends Controller
{
    //report
    public function Report_User(Request $request)
    {
        //get all data
        $post = user_registration::all();
        //simple display all data
        

        return view('Report_User')->with('Userpostdata',$post);
    }
}
