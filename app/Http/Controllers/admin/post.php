<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class post extends Controller
{
    function listing(){
        $data['result']=DB::table('posts')->orderBy('id','desc')->get();
        
        return view('admin/post/list',$data);
    }

    function submit(Request $request)
    {

        $request->validate([

            'title'=>'required',
            'highlight'=>'required',
            'blog'=>'required',
            'photo'=>'required|mimes:jpg,jpeg,png'

        ]);

        $image=$request->file('photo');
        $ext=$image->extension();
        $file=time().'.'.$ext;
        $image->storeAs('/public/post_images',$file);

        date_default_timezone_set('Asia/Dhaka');
        $posting_date = date("F j, Y, g:i a");

        $data=array(

            'title'=>$request->input('title'),
            'short_desc'=>$request->input('highlight'),
            'long_desc'=>$request->input('blog'),
            'image'=>$file,
            'post_date'=>$posting_date,
            'status'=>1
            
        );

        DB::table('posts')->insert($data);
        
        $request->session()->flash('msg','Post Uploaded.');
        return redirect('/admin/post/list');

    }

    function delete(Request $request,$id){
        DB::table('posts')->where('id',$id)->delete();
        $request->session()->flash('msg','Post Deleted.');
        return redirect('/admin/post/list');
    }

    function edit(Request $request,$id){
        $data['result']=DB::table('posts')->where('id',$id)->get();
        
        return view('admin/post/edit',$data);
    }

    function update(Request $request,$id)
    {

        $request->validate([

            'title'=>'required',
            'highlight'=>'required',
            'blog'=>'required',
            'photo'=>'mimes:jpg,jpeg,png'

        ]);

        $data=array(

            'title'=>$request->input('title'),
            'short_desc'=>$request->input('highlight'),
            'long_desc'=>$request->input('blog'),
            'status'=>1
            
        );

        if($request->hasfile('photo')){

            $image=$request->file('photo');
            $ext=$image->extension();
            $file=time().'.'.$ext;
            $image->storeAs('/public/post_images',$file);

            $data['image']=$file;

        }

        

        DB::table('posts')->where('id',$id)->update($data);
        
        $request->session()->flash('msg','Post Updated.');
        return redirect('/admin/post/list');

    }

}
