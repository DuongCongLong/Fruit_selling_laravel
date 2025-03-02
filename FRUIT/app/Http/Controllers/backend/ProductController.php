<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $list = Product::where('dcl_product.status', '!=', 0)
        ->join('dcl_category', 'dcl_product.category_id', '=', 'dcl_category.id')
        ->join('dcl_brand', 'dcl_product.brand_id', '=', 'dcl_brand.id')
        ->orderBy('dcl_product.created_at', 'DESC')
        ->select(
            "dcl_product.id",
            "dcl_product.image",
            "dcl_product.name",
            "dcl_category.name as categoryname",
            "dcl_brand.name as brandname",
            "dcl_product.status"
        )
        ->paginate(10); // Thay đổi số lượng sản phẩm hiển thị mỗi trang tại đây
    return view("backend.product.index", compact('list'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function restore(string $id)
    {
        $product=Product::find($id);
        if($product==null)
        {
            return redirect()->route('admin.product.index');
        }
        $product->status=2;
        $product->updated_at=date('Y-m-d H:i:s');
        $product->updated_by=Auth::id()??1;
        $product->save();
        return redirect()->route('admin.product.trash');
    }
    public function status(string $id)
    {
        $product=Product::find($id);
        if($product==null)
        {
            return redirect()->route('admin.product.index');
        }
        $product->status=($product->status==1)?2:1;
        $product->updated_at=date('Y-m-d H:i:s');
        $product->updated_by=Auth::id()??1;
        $product->save();
        return redirect()->route('admin.product.index');
    }
    public function create()
    {
        $list_category=Category::where('status','!=',0)->get();
        $list_brand=Brand::where('status','!=',0)->get();
        $html_category_id='';
        foreach($list_category as $item)
        {
            $html_category_id.="<option value='".$item->id."'>".$item->name."</option>";
        }
        $html_brand_id='';
        foreach($list_brand as $item)
        {
            $html_brand_id.="<option value='".$item->id."'>".$item->name."</option>";
        }
        //
        return view ("backend.product.create",compact('html_category_id','html_brand_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product=new Product();
        $product->category_id=$request->category_id;
        $product->brand_id=$request->brand_id;
        $product->name=$request->name;
        $product->detail=$request->detail;
        $product->description=$request->description;
        //upload file
        if($request->image)
        {
            $exten=$request->file("image")->extension();
            if(in_array($exten,["png","jpg","jpeg","gif","wedp","webp"]))
            {
                $filename= $product->slug.".".$exten;
                $request->image->move(public_path("images/products"),$filename);
                $product->image=$filename;
            }   
        }
        //end upload file
        $product->price=$request->price ;
        $product->pricesale=$request->pricesale ;
        $product->status=$request->status;
        $product->created_at=date('Y-m-d H:i:s');
        $product->created_by=Auth::id()??1;
        $product->slug=Str::of($request->name)->slug('-');
        $product->save();
        return redirect()->route('admin.product.index');
    }
    public function trash()
    {
        $list=Product::where('dcl_product.status','=',0)
        ->join('dcl_category','dcl_product.category_id','=','dcl_category.id')
        ->join('dcl_brand','dcl_product.brand_id','=','dcl_brand.id')
        ->select("dcl_product.id","dcl_product.image","dcl_product.name","dcl_category.name as categoryname","dcl_brand.name as brandname")
        ->orderBy('dcl_product.created_at','ASC')
        ->get();
        return view ("backend.product.trash",compact("list"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=Product::find($id);
        if($product==null)
        {
            return redirect()->route('admin.product.index');
        }
         return view ("backend.product.show",compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=Product::find($id);
        if($product==null)
        {
            return redirect()->route('admin.product.index');
        }
        $list=Product::where('dcl_product.status','!=',0)
        ->join('dcl_category','dcl_product.category_id','=','dcl_category.id')
        ->join('dcl_brand','dcl_product.brand_id','=','dcl_brand.id')
        ->orderBy('dcl_product.created_at','ASC')
        ->select("dcl_product.id","dcl_product.image","dcl_product.name","dcl_category.name as categoryname","dcl_brand.name as brandname",)
        ->get();
        $list_category=Category::where('status','!=',0)->get();
        $list_brand=Brand::where('status','!=',0)->get();
        $html_category_id='';
        $html_brand_id='';
        foreach($list_category as $item)
{
    if($product->category_id == $item->id)
    {
        $html_category_id.="<option selected value='".$item->id."'>".$item->name."</option>";
    }
    else
    {
        $html_category_id.="<option value='".$item->id."'>".$item->name."</option>";
    }
}

foreach($list_brand as $item)
{
    if($product->brand_id == $item->id)
    {
        $html_brand_id.="<option selected value='".$item->id."'>".$item->name."</option>";
    }
    else
    {
        $html_brand_id.="<option value='".$item->id."'>".$item->name."</option>";
    }
}

        return view ("backend.product.edit",compact('list','html_category_id','html_brand_id',"product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $product=Product::find($id);
        if($product==null)
        {
            return redirect()->route('admin.product.index');
        }
        $product->category_id=$request->category_id;
        $product->brand_id=$request->brand_id;
        $product->name=$request->name;
        $product->detail=$request->detail;
        $product->description=$request->description;
        //upload file
        if($request->image)
        {
            $exten=$request->file("image")->extension();
            if(in_array($exten,["png","jpg","jpeg","gif","wedp","webp"]))
            {
                $filename= $product->slug.".".$exten;
                $request->image->move(public_path("images/products"),$filename);
                $product->image=$filename;
            }   
        }
        //end upload file
        $product->price=$request->price ;
        $product->pricesale=$request->pricesale ;
        $product->status=$request->status;
        $product->updated_at=date('Y-m-d H:i:s');
        $product->updated_by=Auth::id()??1;
        $product->slug=Str::of($request->name)->slug('-');
        $product->save();
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product=Product::find($id);
        if($product==null)
        {
            return redirect()->route('admin.product.index');
        }
        $product->delete();//Xóa khỏi csdl
        return redirect()->route('admin.product.trash');
    }
    public function delete(string $id)
    {
        $product=Product::find($id);
        if($product==null)
        {
            return redirect()->route('admin.product.index');
        }
        $product->status=0;
        $product->updated_at=date('Y-m-d H:i:s');
        $product->updated_by=Auth::id()??1;
        $product->save();
        return redirect()->route('admin.product.index');
    }
}
