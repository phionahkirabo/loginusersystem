<?php

namespace App\Http\Controllers;
use App\Models\blog;

use Illuminate\Http\Request;

class blogpostController extends Controller
{
    public function blog(Request $request){
        $blog = new blog;
        if($request->hasFile('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/blog'), $filename);
            $blog['image']= $filename;
        }
        
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->view_count = 0;
        $blog->like = 0;
        $blog->user_id= auth()->user()->id;
    
        $blog->save();
        return back()->with('success',"Your blog added  successful");
        
    }
    public function viewBlogs($id){
       //$blogs = blog::all()->where('id',$id);
       $blogs = blog::find($id);
       return view('auth.view_users_blogs',compact('blogs','id'));
    }
    public function viewmyblog(){
        
        $id= auth()->user()->id;
        $blogs = blog::all()->where('user_id',$id);
        // $blogs = blog::all()->where('id',$id);
        // return $blogs;
       
        return view('auth.view_my_blog',compact('blogs','id'));
     }
     public function editmyblog($id){
        $blogs= blog::where('id','=',$id)->first();
        
        return view('auth.edit_blog',compact('blogs'));
    }
    public function updateblog(Request $request,$id){
        $blog = blog::find($id);
        if($request->hasFile('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/blog'), $filename);
            $blog['image']= $filename;
        }
        
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
        return redirect('/view_my_blog')->with('success','blogs  updated successfully');
    
    
    
    // blog::where('id','=',$id)->update([
    //     'title'=> $title,
    //     'image'=> $image,
    //     'content'=> $content
    // ]);
    // return redirect('/view_my_blog')->with('success','blogs  updated successfully');
    }
    public function deleteBlog($id){
        // return $id;
        blog::find($id)->delete();
        return back()->with( 'delete','Blog is deleted ');
    }
}
