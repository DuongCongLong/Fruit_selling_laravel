<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Category::where('dcl_category.status','!=',0)
        //->select("category.id","category.image","category.name","category.slug")
        ->orderBy('dcl_category.created_at','DESC')
        ->paginate(10); // Thay đổi số lượng sản phẩm hiển thị mỗi trang tại đây
        //
        $htmlparentid='';
        $htmlsortorder='';
        foreach($list as $item)
        {
            $htmlparentid.="<option value='".$item->id."'>".$item->name."</option>";
            $htmlsortorder.="<option value='".($item->sort_order+1)."'>Sau:".$item->name."</option>";
        }
        //
        return view ("backend.category.index",compact('list','htmlparentid','htmlsortorder'));
    }
    public function trash()
    {
        $list=Category::where('dcl_category.status','=',0)
        //->select("category.id","category.image","category.name","category.slug")
        ->orderBy('dcl_category.created_at','DESC')
        ->get();
        return view ("backend.category.trash",compact('list'));
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
    public function store(StoreCategoryRequest $request)
    {
        $category=new Category();
        $category->name=$request->name;
        $category->slug=Str::of($request->name)->slug('-');
        $category->description=$request->description;
        $category->parent_id=$request->parent_id;
        $category->sort_order=$request->sort_order ;
        //upload file
        if($request->image)
        {
            $exten=$request->file("image")->extension();
            if(in_array($exten,["png","jpg","jpeg","gif","wedp"]))
            {
                $filename= $category->slug.".".$exten;
                $request->image->move(public_path("image/categorys"),$filename);
                $category->image=$filename;
            }   
        }
        //end upload file
        $category->status=$request->status;
        $category->created_at=date('Y-m-d H:i:s');
        $category->created_by=Auth::id()??1;
        $category->save();
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category=Category::find($id);
        if($category==null)
        {
            return redirect()->route('admin.category.index');
        }
         return view ("backend.category.show",compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Category::find($id);
        if($category==null)
        {
            return redirect()->route('admin.category.index');
        }
        $list=Category::where('status','!=',0)
        //->select("id","name")
        ->orderBy('created_at','DESC')
        ->get();
        //
        $htmlparentid='';
        $htmlsortorder='';
        foreach($list as $item)
        {
            if($category->parent_id == $item->id)
            {
                $htmlparentid.="<option selected value='".$item->id."'>".$item->name."</option>";
            }
            else
            {
                $htmlparentid.="<option value='".$item->id."'>".$item->name."</option>";
            }
            if($category->sort_order-1 == $item->sort_order)
            {
                $htmlsortorder.="<option selected value='".($item->sort_order+1)."'>Sau:".$item->name."</option>";
            }
            else
            {
                $htmlsortorder.="<option value='".($item->sort_order+1)."'>Sau:".$item->name."</option>";
            }
        }
        //
        return view ("backend.category.edit",compact('list','htmlparentid','htmlsortorder',"category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $category=Category::find($id);
        if($category==null)
        {
            return redirect()->route('admin.category.index');
        }
        $category->name=$request->name;
        $category->slug=Str::of($request->name)->slug('-');
        $category->description=$request->description;
        $category->parent_id=$request->parent_id;
        $category->sort_order=$request->sort_order ;
        //upload file
        if($request->image)
        {
            $exten=$request->file("image")->extension();
            if(in_array($exten,["png","jpg","jpeg","gif","wedp"]))
            {
                $filename= $category->slug.".".$exten;
                $request->image->move(public_path("image/categorys"),$filename);
                $category->image=$filename;
            }   
        }
        //end upload file
        $category->status=$request->status;
        $category->updated_at=date('Y-m-d H:i:s');
        $category->updated_by=Auth::id()??1;
        $category->save();  
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=Category::find($id);
        if($category==null)
        {
            return redirect()->route('admin.category.index');
        }
        $category->delete();//Xóa khỏi csdl
        return redirect()->route('admin.category.trash');
    }
    public function restore(string $id)
    {
        $category=Category::find($id);
        if($category==null)
        {
            return redirect()->route('admin.category.index');
        }
        $category->status=2;
        $category->updated_at=date('Y-m-d H:i:s');
        $category->updated_by=Auth::id()??1;
        $category->save();
        return redirect()->route('admin.category.trash');
    }

    public function status(string $id)
    {
        $category=Category::find($id);
        if($category==null)
        {
            return redirect()->route('admin.category.index');
        }
        $category->status=($category->status==1)?2:1;
        $category->updated_at=date('Y-m-d H:i:s');
        $category->updated_by=Auth::id()??1;
        $category->save();
        return redirect()->route('admin.category.index');
    }
    public function delete(string $id)
    {
        $category=Category::find($id);
        if($category==null)
        {
            return redirect()->route('admin.category.index');
        }
        $category->status=0;
        $category->updated_at=date('Y-m-d H:i:s');
        $category->updated_by=Auth::id()??1;
        $category->save();
        return redirect()->route('admin.category.index');
    }
}
