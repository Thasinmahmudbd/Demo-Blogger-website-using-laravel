<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_authority extends Controller
{
    function login_submit(Request $request){
        $email=$request->input('email');
        $password=$request->input('password');

        $result=DB::table('users')
        ->where('email',$email)
        ->where('password',$password)
        ->get();

        if(isset($result[0]->id)){
            if($result[0]->status==1){
                $request->session()->put('BLOG_USER_ID',$result[0]->id);

                return redirect('admin/post/list');

            }else{
            $request->session()->flash('msg','Account deactivated.');

            return redirect('admin/login');
            }

        }else{
            $request->session()->flash('msg','Please Enter valid log in information.');

            return redirect('admin/login');
        }

        echo '<pre>';
        print_r($result);

    }
}
