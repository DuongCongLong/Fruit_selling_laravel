<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\Topic;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Post::where('dcl_post.status','!=',0)
        ->join('dcl_topic','dcl_post.topic_id','=','dcl_topic.id')
        ->orderBy('dcl_post.created_at','DESC')
        ->select("dcl_post.id","dcl_post.image","dcl_post.title","dcl_post.slug","dcl_post.type","dcl_topic.name as topicname","dcl_post.status")
        ->paginate(10); // Thay đổi số lượng sản phẩm hiển thị mỗi trang tại đây
        return view ("backend.post.index",compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_topic=Topic::where('status','!=',0)->get();
        $html_topic_id='';
        foreach($list_topic as $item)
        {
            $html_topic_id.="<option value='".$item->id."'>".$item->name."</option>";
        }
        //
        return view ("backend.post.create",compact('html_topic_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post=new Post();
        $post->topic_id=$request->topic_id;
        $post->title=$request->title;
        $post->detail=$request->detail;
        $post->description=$request->description;
       //upload file
       if($request->image)
       {
           $exten=$request->file("image")->extension();
           if(in_array($exten,["png","jpg","jpeg","gif","wedp","webp"]))
           {
               $filename= $post->slug.".".$exten;
               $request->image->move(public_path("images/posts"),$filename);
               $post->image=$filename;
           }   
       }
          //end upload file
        $post->type=$request->type ;
        $post->status=$request->status;
        $post->created_at=date('Y-m-d H:i:s');
        $post->created_by=Auth::id()??1;
        $post->slug=Str::of($request->name)->slug('-');
        $post->save();
        return redirect()->route('admin.post.index');
    }
    public function status(string $id)
    {
        $post=Post::find($id);
        if($post==null)
        {
            return redirect()->route('admin.post.index');
        }
        $post->status=($post->status==1)?2:1;
        $post->updated_at=date('Y-m-d H:i:s');
        $post->updated_by=Auth::id()??1;
        $post->save();
        return redirect()->route('admin.post.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post=Post::find($id);
        if($post==null)
        {
            return redirect()->route('admin.post.index');
        }
         return view ("backend.post.show",compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post=Post::find($id);
        if($post==null)
        {
            return redirect()->route('admin.post.edit');
        }
        $list_topic=Topic::where('status','!=',0)->get();
        $html_topic_id='';
        foreach($list_topic as $item)
        {
            if($post->topic_id == $item->id)
            {
            $html_topic_id.="<option selected value='".$item->id."'>".$item->name."</option>";
            }
            else
            {
            $html_topic_id.="<option value='".$item->id."'>".$item->name."</option>";
            }
        }
        //
        return view ("backend.post.edit",compact("list_topic","html_topic_id","post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post=Post::find($id);
        if($post==null)
        {
            return redirect()->route('admin.post.index');
        }
        $post->topic_id=$request->topic_id;
        $post->title=$request->title;
        $post->detail=$request->detail;
        $post->description=$request->description;
       //upload file
       if($request->image)
       {
           $exten=$request->file("image")->extension();
           if(in_array($exten,["png","jpg","jpeg","gif","wedp","webp"]))
           {
               $filename= $post->slug.".".$exten;
               $request->image->move(public_path("images/posts"),$filename);
               $post->image=$filename;
           }   
       }
          //end upload file
        $post->type=$request->type ;
        $post->status=$request->status;
        $post->updated_at=date('Y-m-d H:i:s');
        $post->created_by=Auth::id()??1;
        $post->slug=Str::of($request->name)->slug('-');
        $post->save();
        return redirect()->route('admin.post.index');
    }
    public function trash()
    {
        $list=Post::where('dcl_post.status','=',0)
        //->select("dcl_post.id","dcl_post.image","dcl_post.name","dcl_post.slug")
        ->orderBy('dcl_post.created_at','DESC')
        ->get();
        return view ("backend.post.trash",compact('list'));
    }
    public function delete(string $id)
    {
        $post=Post::find($id);
        if($post==null)
        {
            return redirect()->route('admin.post.index');
        }
        $post->status=0;
        $post->updated_at=date('Y-m-d H:i:s');
        $post->updated_by=Auth::id()??1;
        $post->save();
        return redirect()->route('admin.post.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Post::find($id);
        if($post==null)
        {
            return redirect()->route('admin.post.index');
        }
        $post->delete();//Xóa khỏi csdl
        return redirect()->route('admin.post.trash');
    }
    public function restore(string $id)
    {
        $post=Post::find($id);
        if($post==null)
        {
            return redirect()->route('admin.post.index');
        }
        $post->status=2;
        $post->updated_at=date('Y-m-d H:i:s');
        $post->updated_by=Auth::id()??1;
        $post->save();
        return redirect()->route('admin.post.trash');
    }
}