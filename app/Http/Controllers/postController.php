<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    public function addPost(){
        return view('add-post');
    }

    public function savePost(Request $req){
        try{
            DB::table('cruds')->insert([
                'title'=>$req->title,
                'description'=>$req->description
            ]);
            return back()->with('success',"Post Added Successfully !");
        }
        catch(\Exception $e){
            return back()->with('error',"Fail to Add Data !");
        }
        
    }

    public function postList(){
        try{
            $post=DB::table('cruds')->get();
            return view('post-list',compact('post'));
        }
        catch(\Exception $e){
            return back()->with('error',"Error !");
        }
        
    }

    public function editPost($id){
        try{
            $post=DB::table('cruds')->where('id',$id)->first();
            return view('edit-post',compact('post'));
        }
        catch(\Exception $e){
            return back()->with('error',"Error !");
        }
        
    }

    public function updatePost(Request $req){
        try{
            DB::table('cruds')->where('id',$req->id)->update([
                'title'=>$req->title,
                'description'=>$req->description
            ]);
            return back()->with('success',"Post updated Successfully !");
        }
        catch(\Exception $e){
            return back()->with('error',"Error !");
        }        
    }

    public function deletePost($id){
        try{
            DB::table('cruds')->where('id',$id)->delete();
            return back()->with('success_del',"Post Deleted Successfully !");
        }
        catch(\Exception $e){
            return back()->with('error',"Error !");
        }
    }
}
