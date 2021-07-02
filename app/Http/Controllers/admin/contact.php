<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class contact extends Controller
{
    function listing(){
        $data['result']=DB::table('contacts')->orderBy('id','desc')->get();
        
        return view('admin/contact/list',$data);
    }

    function delete(Request $request,$id){
        DB::table('contacts')->where('id',$id)->delete();
        $request->session()->flash('msg','Message Removed.');
        return redirect('/admin/contact/list');
    }
}
