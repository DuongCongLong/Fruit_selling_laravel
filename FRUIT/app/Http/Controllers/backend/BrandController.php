<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\backend\BrandController;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Brand::where('dcl_brand.status','!=',0)
        ->orderBy('dcl_brand.created_at','DESC')
        //->select("brand.id","brand.image","brand.name","brand.slug")
        ->paginate(10); // Thay đổi số lượng sản phẩm hiển thị mỗi trang tại đây
        //
        $htmlsortorder='';
        foreach($list as $item)
        {
            $htmlsortorder.="<option value='".($item->sort_order+1)."'>Sau:".$item->name."</option>";
        }
        //
        return view ("backend.brand.index",compact('list','htmlsortorder'));
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
    public function store(StoreBrandRequest $request)
    {
        $brand=new Brand();
        $brand->name=$request->name;
        $brand->description=$request->description;
       //upload file
       if($request->image)
       {
           $exten=$request->file("image")->extension();
           if(in_array($exten,["png","jpg","jpeg","gif","wedp"]))
           {
               $filename= $brand->slug.".".$exten;
               $request->image->move(public_path("images/brands"),$filename);
               $brand->image=$filename;
           }   
       }
       //end upload file
        $brand->sort_order=$request->sort_order ;
        $brand->status=$request->status;
        $brand->created_at=date('Y-m-d H:i:s');
        $brand->created_by=Auth::id()??1;
        $brand->slug=Str::of($request->name)->slug('-');
        $brand->save();
        return redirect()->route('admin.brand.index');
    }
    public function trash()
    {
        $list=Brand::where('dcl_brand.status','=',0)
        //->select("category.id","category.image","category.name","category.slug")
        ->orderBy('dcl_brand.created_at','DESC')
        ->get();
        return view ("backend.brand.trash",compact('list'));
    }
    public function status(string $id)
    {
        $brand=Brand::find($id);
        if($brand==null)
        {
            return redirect()->route('admin.brand.index');
        }
        $brand->status=($brand->status==1)?2:1;
        $brand->updated_at=date('Y-m-d H:i:s');
        $brand->updated_by=Auth::id()??1;
        $brand->save();
        return redirect()->route('admin.brand.index');
    }
    public function delete(string $id)
    {
        $brand=Brand::find($id);
        if($brand==null)
        {
            return redirect()->route('admin.brand.index');
        }
        $brand->status=0;
        $brand->updated_at=date('Y-m-d H:i:s');
        $brand->updated_by=Auth::id()??1;
        $brand->save();
        return redirect()->route('admin.brand.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand=Brand::find($id);
        if($brand==null)
        {
            return redirect()->route('admin.brand.index');
        }
         return view ("backend.brand.show",compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $brand=Brand::find($id);
        if($brand==null)
        {
            return redirect()->route('admin.brand.index');
        }
        $list=Brand::where('dcl_brand.status','!=',0)
        ->orderBy('dcl_brand.created_at','DESC')
        //->select("brand.id","brand.image","brand.name","brand.slug")
        ->get();
        //
        $htmlsortorder='';
        foreach($list as $item)
        {
            if($brand->sort_order-1 == $item->sort_order)
            {
                $htmlsortorder.="<option selected value='".($item->sort_order+1)."'>Sau:".$item->name."</option>";
            }
            else
            {
                $htmlsortorder.="<option value='".($item->sort_order+1)."'>Sau:".$item->name."</option>";
            }
        //
        }
        return view ("backend.brand.edit",compact('list','htmlsortorder',"brand"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, string $id)
    {
        $brand=Brand::find($id);
        if($brand==null)
        {
            return redirect()->route('admin.brand.index');
        }
        $brand->name=$request->name;
        $brand->description=$request->description;
       //upload file
       if($request->image)
       {
           $exten=$request->file("image")->extension();
           if(in_array($exten,["png","jpg","jpeg","gif","wedp"]))
           {
               $filename= $brand->slug.".".$exten;
               $request->image->move(public_path("images    /brands"),$filename);
               $brand->image=$filename;
           }   
       }
       //end upload file
        $brand->sort_order=$request->sort_order ;
        $brand->status=$request->status;
        $brand->updated_at=date('Y-m-d H:i:s');
        $brand->updated_by=Auth::id()??1;
        $brand->slug=Str::of($request->name)->slug('-');
        $brand->save();
        return redirect()->route('admin.brand.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand=Brand::find($id);
        if($brand==null)
        {
            return redirect()->route('admin.brand.index');
        }
        $brand->delete();//Xóa khỏi csdl
        return redirect()->route('admin.brand.trash');
    }
    public function restore(string $id)
    {
        $brand=Brand::find($id);
        if($brand==null)
        {
            return redirect()->route('admin.brand.index');
        }
        $brand->status=2;
        $brand->updated_at=date('Y-m-d H:i:s');
        $brand->updated_by=Auth::id()??1;
        $brand->save();
        return redirect()->route('admin.brand.trash');
    }
}
