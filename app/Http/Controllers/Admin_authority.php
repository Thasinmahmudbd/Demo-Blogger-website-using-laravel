<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_authority extends Controller
{
    function login_submit(Request $request){
        echo $email=$request->input('email');
        echo $password=$request->input('password');
    }
}
