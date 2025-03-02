<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Topic;
use App\Models\Post;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Menu::where('status','!=',0)
        ->orderBy('created_at','DESC')
        //->select("id","link","name","type","position")
        ->get();
        $list_category=Category::where('status','!=',0)
        ->orderBy('created_at','ASC')
        ->get();
        $list_brand=Brand::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->get();
        $list_topic=Topic::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->get();
        $list_page=Post::where([['status','!=',0],['type','=','page']])
        ->orderBy('created_at','DESC')
        ->get();
        return view ("backend.menu.index",compact('list','list_category','list_brand','list_topic','list_page'));
    }
    public function trash()
    {
        $list=Menu::where('status','=',0)
        ->orderBy('created_at','DESC')
        //->select("id","link","name","type","position")
        ->get();
        $list_category=Category::where('status','!=',0)
        ->orderBy('created_at','ASC')
        ->get();
        $list_brand=Brand::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->get();
        $list_topic=Topic::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->get();
        $list_page=Post::where([['status','!=',0],['type','=','page']])
        ->orderBy('created_at','DESC')->get();
        return view ("backend.menu.trash",compact('list','list_category','list_brand','list_topic','list_page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list=Menu::where('status','!=',0)->get();
        //
        $htmlparentid='';
        $htmlsortorder='';
        foreach($list as $item)
        {
            $htmlparentid.="<option value='".$item->id."'>".$item->name."</option>";
            $htmlsortorder.="<option value='".$item->sort_order."'>Sau:".$item->name."</option>";
        }
        //
        return view ("backend.menu.create",compact('htmlparentid','htmlsortorder'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(isset($request->createCategory))
        {
            $listid=$request->categoryid;
            if($listid){
                foreach($listid as $id)
                {
                    $category=Category::find($id);
                    if($category!=null){
                        $menu=new Menu();
                        $menu->name=$category->name;
                        $menu->link='danh-muc/'.$category->slug;
                        $menu->type='category';
                        $menu->position=$request->postion;
                        $menu->parent_id=0;
                        $menu->sort_order=0;
                        $menu->status=$request->status;
                        $menu->table_id=$id;
                        $menu->created_at=date('Y-m-d H:i:s');
                        $menu->created_by=Auth::id()??1;
                        $menu->save();
                       }
                }
                return redirect()->route('admin.menu.index')->with('message',['type'=>'success','msg'=>'Thêm menu thành công']);
            }else{
                echo"Không";
            }
        }
        if(isset($request->createBrand))
        {
            $listid=$request->brandid;
            if($listid){
                foreach($listid as $id)
                {
                    $brand=Brand::find($id);
                    if($brand!=null){
                        $menu=new Menu();
                        $menu->name=$brand->name;
                        $menu->link='thuong-hieu/'.$brand->slug;
                        $menu->type='brand';
                        $menu->position=$request->postion;
                        $menu->parent_id=0;
                        $menu->sort_order=0;
                        $menu->status=$request->status;
                        $menu->table_id=$id;
                        $menu->created_at=date('Y-m-d H:i:s');
                        $menu->created_by=Auth::id()??1;
                        $menu->save();
                       }
                }
                return redirect()->route('admin.menu.index')->with('message',['type'=>'success','msg'=>'Thêm menu thành công']);
            }else{
                echo"Không";
            }
        }
        if(isset($request->createTopic))
        {
            $listid=$request->topicid;
            if($listid){
                foreach($listid as $id)
                {
                    $topic=Topic::find($id);
                    if($topic!=null){
                        $menu=new Menu();
                        $menu->name=$topic->name;
                        $menu->link='chu-de/'.$topic->slug;
                        $menu->type='topic';
                        $menu->position=$request->postion;
                        $menu->parent_id=0;
                        $menu->sort_order=0;
                        $menu->status=$request->status;
                        $menu->table_id=$id;
                        $menu->created_at=date('Y-m-d H:i:s');
                        $menu->created_by=Auth::id()??1;
                        $menu->save();
                       }
                }
                return redirect()->route('admin.menu.index')->with('message',['type'=>'success','msg'=>'Thêm menu thành công']);
            }else{
                echo"Không";
            }
        }
        if(isset($request->createPage))
        {
            $listid=$request->pageid;
            if($listid){
                foreach($listid as $id)
                {
                    $page=Post::where([['id','=',$id],['type','=','page']])->first();
                    if($page!=null){
                        $menu=new Menu();
                        $menu->name=$page->title;
                        $menu->link='trang-don/'.$page->slug;
                        $menu->type='page';
                        $menu->position=$request->postion;
                        $menu->parent_id=0;
                        $menu->sort_order=0;
                        $menu->status=$request->status;
                        $menu->table_id=$id;
                        $menu->created_at=date('Y-m-d H:i:s');
                        $menu->created_by=Auth::id()??1;
                        $menu->save();
                       }
                }
                return redirect()->route('admin.menu.index')->with('message',['type'=>'success','msg'=>'Thêm menu thành công']);
            }else{
                echo"Không";
            }
        }
        if(isset($request->createCustom))
        {
            if(isset($request->name,$request->link))
            {
                $menu=new Menu();
                        $menu->name=$request->name;
                        $menu->link=$request->link;
                        $menu->type='custom';
                        $menu->position=$request->postion;
                        $menu->parent_id=0;
                        $menu->sort_order=0;
                        $menu->status=$request->status;
                        // $menu->table_id=$id;
                        $menu->created_at=date('Y-m-d H:i:s');
                        $menu->created_by=Auth::id()??1;
                        $menu->save();
                        return redirect()->route('admin.menu.index');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $menu=Menu::find($id);
        if($menu==null)
        {
            return redirect()->route('admin.menu.index');
        }
         return view ("backend.menu.show",compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu=Menu::find($id);
        if($menu==null)
        {
            return redirect()->route('admin.menu.index');
        }
        $list=Menu::where('status','!=',0)
        ->orderBy('created_at','DESC')
        //->select("id","link","name","type","position")
        ->get();
        $list_category=Category::where('status','!=',0)
        ->orderBy('created_at','ASC')
        ->get();
        $list_brand=Brand::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->get();
        $list_topic=Topic::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->get();
        $list_page=Post::where([['status','!=',0],['type','=','page']])
        ->orderBy('created_at','DESC')->get();
        return view ("backend.menu.edit",compact('list','list_category','list_brand','list_topic','list_page','menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $menu=Menu::find($id);
        if($menu==null)
        {
            return redirect()->route('admin.menu.index');
        }
        if(isset($request->createCategory))
        {
            $listid=$request->categoryid;
            if($listid){
                foreach($listid as $id)
                {
                    $category=Category::find($id);
                    if($category!=null){
                        $menu=new Menu();
                        $menu->name=$category->name;
                        $menu->link='danh-muc/'.$category->slug;
                        $menu->type='category';
                        $menu->position=$request->postion;
                        $menu->parent_id=0;
                        $menu->sort_order=0;
                        $menu->status=$request->status;
                        $menu->table_id=$id;
                        $menu->updated_at=date('Y-m-d H:i:s');
                        $menu->updated_by=Auth::id()??1;
                        $menu->save();
                       }
                }
                return redirect()->route('admin.menu.index')->with('message',['type'=>'success','msg'=>'Thêm menu thành công']);
            }else{
                echo"Không";
            }
        }
        if(isset($request->createBrand))
        {
            $listid=$request->brandid;
            if($listid){
                foreach($listid as $id)
                {
                    $brand=Brand::find($id);
                    if($brand!=null){
                        $menu=new Menu();
                        $menu->name=$brand->name;
                        $menu->link='thuong-hieu/'.$brand->slug;
                        $menu->type='brand';
                        $menu->position=$request->postion;
                        $menu->parent_id=0;
                        $menu->sort_order=0;
                        $menu->status=$request->status;
                        $menu->table_id=$id;
                        $menu->updated_at=date('Y-m-d H:i:s');
                        $menu->updated_by=Auth::id()??1;
                        $menu->save();
                       }
                }
                return redirect()->route('admin.menu.index')->with('message',['type'=>'success','msg'=>'Thêm menu thành công']);
            }else{
                echo"Không";
            }
        }
        if(isset($request->createTopic))
        {
            $listid=$request->topicid;
            if($listid){
                foreach($listid as $id)
                {
                    $topic=Topic::find($id);
                    if($topic!=null){
                        $menu=new Menu();
                        $menu->name=$topic->name;
                        $menu->link='chu-de/'.$topic->slug;
                        $menu->type='topic';
                        $menu->position=$request->postion;
                        $menu->parent_id=0;
                        $menu->sort_order=0;
                        $menu->status=$request->status;
                        $menu->table_id=$id;
                        $menu->updated_at=date('Y-m-d H:i:s');
                        $menu->updated_by=Auth::id()??1;
                        $menu->save();
                       }
                }
                return redirect()->route('admin.menu.index')->with('message',['type'=>'success','msg'=>'Thêm menu thành công']);
            }else{
                echo"Không";
            }
        }
        if(isset($request->createPage))
        {
            $listid=$request->pageid;
            if($listid){
                foreach($listid as $id)
                {
                    $page=Post::where([['id','=',$id],['type','=','page']])->first();
                    if($page!=null){
                        $menu=new Menu();
                        $menu->name=$page->title;
                        $menu->link='trang-don/'.$page->slug;
                        $menu->type='page';
                        $menu->position=$request->postion;
                        $menu->parent_id=0;
                        $menu->sort_order=0;
                        $menu->status=$request->status;
                        $menu->table_id=$id;
                        $menu->updated_at=date('Y-m-d H:i:s');
                        $menu->updated_by=Auth::id()??1;
                        $menu->save();
                       }
                }
                return redirect()->route('admin.menu.index')->with('message',['type'=>'success','msg'=>'Thêm menu thành công']);
            }else{
                echo"Không";
            }
        }
        if(isset($request->createCustom))
        {
            if(isset($request->name,$request->link))
            {
                $menu=new Menu();
                        $menu->name=$request->name;
                        $menu->link=$request->link;
                        $menu->type='custom';
                        $menu->position=$request->postion;
                        $menu->parent_id=0;
                        $menu->sort_order=0;
                        $menu->status=$request->status;
                        // $menu->table_id=$id;
                        $menu->updated_at=date('Y-m-d H:i:s');
                        $menu->updated_by=Auth::id()??1;
                        $menu->save();
                        return redirect()->route('admin.menu.index');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu=Menu::find($id);
        if($menu==null)
        {
            return redirect()->route('admin.menu.index');
        }
        $menu->delete();//Xóa khỏi csdl
        return redirect()->route('admin.menu.trash');
    }
    public function restore(string $id)
    {
        $menu=Menu::find($id);
        if($menu==null)
        {
            return redirect()->route('admin.menu.index');
        }
        $menu->status=2;
        $menu->updated_at=date('Y-m-d H:i:s');
        $menu->updated_by=Auth::id()??1;
        $menu->save();
        return redirect()->route('admin.menu.trash');
    }
    
    public function status(string $id)
    {
        $menu=Menu::find($id);
        if($menu==null)
        {
            return redirect()->route('admin.menu.index');
        }
        $menu->status=($menu->status==1)?2:1;
        $menu->updated_at=date('Y-m-d H:i:s');
        $menu->updated_by=Auth::id()??1;
        $menu->save();
        return redirect()->route('admin.menu.index');
    }
    public function delete(string $id)
    {
        $menu=Menu::find($id);
        if($menu==null)
        {
            return redirect()->route('admin.menu.index');
        }
        $menu->status=0;
        $menu->updated_at=date('Y-m-d H:i:s');
        $menu->updated_by=Auth::id()??1;
        $menu->save();
        return redirect()->route('admin.menu.index');
    }
}
