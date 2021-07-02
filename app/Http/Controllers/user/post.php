<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class post extends Controller
{
    function home(){
        $data['result']=DB::table('posts')->orderBy('id','desc')->get();
        return view('user/home',$data);
    }

    function post($id){
        $data['result']=DB::table('posts')->where('id',$id)->get();
        return view('user/post',$data);
    }

    public static function page_menu(){
        $result=DB::table('pages')->where('status','1')->get();
        return $result;
    }

    function page($id){
        $data['result']=DB::table('pages')->where('slug',$id)->get();
        return view('user/page',$data);
    }

    function submit(Request $request)
    {

        $request->validate([

            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'message'=>'required'

        ]);

        $data=array(

            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'mobile'=>$request->input('mobile'),
            'message'=>$request->input('message')
            
        );

        DB::table('contacts')->insert($data);
        
        $request->session()->flash('msg','Message Sent.');
        return redirect('/contact');

    }
}
