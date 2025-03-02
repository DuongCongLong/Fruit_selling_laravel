<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\backend\TopicController;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
use App\Models\Topic;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Topic::where('dcl_topic.status','!=',0)
        ->orderBy('dcl_topic.created_at','DESC')
        //->select("topic.id","topic.description","topic.name","topic.slug")
        ->paginate(10); // Thay đổi số lượng sản phẩm hiển thị mỗi trang tại đây
         //
         $htmlsortorder='';
         foreach($list as $item)
         {
             $htmlsortorder.="<option value='".($item->sort_order+1)."'>Sau:".$item->name."</option>";
         }
         //
        return view ("backend.topic.index",compact('list','htmlsortorder'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTopicRequest $request)
    {
        $topic=new Topic();
        $topic->name=$request->name;
        $topic->description=$request->description;
        $topic->sort_order=$request->sort_order ;
        $topic->status=$request->status;
        $topic->created_at=date('Y-m-d H:i:s');
        $topic->created_by=Auth::id()??1;
        $topic->slug=Str::of($request->name)->slug('-');
        $topic->save();
        return redirect()->route('admin.topic.index');
    }
    public function status(string $id)
    {
        $topic=Topic::find($id);
        if($topic==null)
        {
            return redirect()->route('admin.topic.index');
        }
        $topic->status=($topic->status==1)?2:1;
        $topic->updated_at=date('Y-m-d H:i:s');
        $topic->updated_by=Auth::id()??1;
        $topic->save();
        return redirect()->route('admin.topic.index');
    }
    public function delete(string $id)
    {
        $topic=Topic::find($id);
        if($topic==null)
        {
            return redirect()->route('admin.topic.index');
        }
        $topic->status=0;
        $topic->updated_at=date('Y-m-d H:i:s');
        $topic->updated_by=Auth::id()??1;
        $topic->save();
        return redirect()->route('admin.topic.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $topic=Topic::find($id);
        if($topic==null)
        {
            return redirect()->route('admin.topic.index');
        }
         return view ("backend.topic.show",compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $topic=Topic::find($id);
        if($topic==null)
        {
            return redirect()->route('admin.topic.index');
        }
        $list=Topic::where('dcl_topic.status','!=',0)
        ->orderBy('dcl_topic.created_at','DESC')
        ->select("dcl_topic.id","dcl_topic.description","dcl_topic.name","dcl_topic.slug")
        ->get();
         //
         $htmlsortorder='';
         foreach($list as $item) {
            $selected = $topic->sort_order == $item->sort_order ? 'selected' : '';
            $htmlsortorder .= "<option {$selected} value='" . ($item->sort_order + 1) . "'>Sau:" . $item->name . "</option>";
        }
         //
        return view ("backend.topic.edit",compact('list','htmlsortorder','topic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTopicRequest $request, string $id)
    {
        $topic=Topic::find($id);
        if($topic==null)
        {
            return redirect()->route('admin.topic.index');
        }
        $topic->name=$request->name;
        $topic->description=$request->description;
        $topic->sort_order=$request->sort_order ;
        $topic->status=$request->status;
        $topic->updated_at=date('Y-m-d H:i:s');
        $topic->updated_by=Auth::id()??1;
        $topic->slug=Str::of($request->name)->slug('-');
        $topic->save();
        return redirect()->route('admin.topic.index');
    }
    public function trash()
    {
        $list=Topic::where('dcl_topic.status','=',0)
        //->select("dcl_topic.id","dcl_topic.image","dcl_topic.name","dcl_topic.slug")
        ->orderBy('dcl_topic.created_at','DESC')
        ->get();
        return view ("backend.topic.trash",compact('list'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $topic=Topic::find($id);
        if($topic==null)
        {
            return redirect()->route('admin.topic.index');
        }
        $topic->delete();//Xóa khỏi csdl
        return redirect()->route('admin.topic.trash');
    }
    public function restore(string $id)
    {
        $topic=Topic::find($id);
        if($topic==null)
        {
            return redirect()->route('admin.topic.index');
        }
        $topic->status=2;
        $topic->updated_at=date('Y-m-d H:i:s');
        $topic->updated_by=Auth::id()??1;
        $topic->save();
        return redirect()->route('admin.topic.trash');
    }
}
