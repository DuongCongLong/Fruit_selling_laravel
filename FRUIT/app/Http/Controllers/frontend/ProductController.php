<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
class ProductController extends Controller
{
    public function index()
    {
      $list_cart=session('carts',[]);
      $list_product=Product::where('status','=',1)
      ->orderBy('created_at','desc')
      ->paginate(8);
      return view("frontend.product",compact('list_product','list_cart'));
    }

public function getlistcategoryid($rowid)
{
  $listcatid=[];
    array_push($listcatid,$rowid);
    $list1=Category::where([['status','=',1],['parent_id','=',$rowid]])->select("id")->get();
    if(count($list1)>0){
      foreach($list1 as $row1)
      {
        array_push($listcatid,$row1->id);
        $list2=Category::where([['status','=',1],['parent_id','=',$row1->id]])->select("id")->get();
        if(count($list2)>0){
          foreach($list2 as $row2)
          {
            array_push($listcatid,$row2->id);
            // $list2=Category::where([['status','=',1],['parent_id','=',$row1->id]])->select("id")->get();
          }
        }
      }
  }
  return $listcatid;
}

    public function category($slug)
    {
      $row=Category::where([['slug','=',$slug],['status','=',1]])->select("id","name","slug")->first();
      $listcatid=[];
      if( $row!=null){
        $listcatid=$this->getlistcategoryid($row->id);
      }

      $list_product=Product::where('status','=',1)
      ->whereIn('category_id',$listcatid)
      ->orderBy('created_at','desc')
      ->paginate(8);
      return view("frontend.product_category",compact('list_product','row'));
    }
    /////////////sửa tại đây
    public function brand($slug)
{
    $row = Brand::where([['slug', '=', $slug], ['status', '=', 1]])
        ->select("id", "name", "slug")
        ->first();
    $listcatid = [];
    if ($row != null) {
        $listcatid = $this->getlistcategoryid($row->id);
    }
    $brands = Brand::where('status', '=', 1)->get();
    $list_product = Product::where('status', '=', 1)
        ->whereIn('brand_id', $listcatid)
        ->orderBy('created_at', 'desc')
        ->paginate(8);
    return view("frontend.product_category", compact('list_product', 'row','brands'));
}
    ////////////
    public function product_detail($slug)
    {
      $product=Product::where([['slug','=',$slug],['status','=',1]])->first();
      $listcatid=$this->getlistcategoryid($product->category_id);
      $list_product=Product::where([['status','=',1],['id','!=',$product->id]])
      ->whereIn('category_id',$listcatid)
      ->orderBy('created_at','desc')
      ->limit(8)
      ->get();
      return view("frontend.product_detail",compact('product','list_product'));
    }
    public function filter(Request $request)
    {
        $query = Product::query();
    
        // Lọc theo giá nếu có dữ liệu
        if ($request->filled('price-from')) {
            $query->where('price', '>=', $request->input('price-from'));
        }
    
        if ($request->filled('price-to')) {
            $query->where('price', '<=', $request->input('price-to'));
        }
    
        // Phân trang kết quả
        $list_product = $query->where('status', '=', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
    
        // Trả về view với danh sách sản phẩm
        return view('frontend.product_category', compact('list_product'));
    }
    public function filters(Request $request)
    {
        $query = Product::query();
    
        // Lọc theo giá nếu có dữ liệu
        if ($request->filled('price-from')) {
            $query->where('price', '>=', $request->input('price-from'));
        }
    
        if ($request->filled('price-to')) {
            $query->where('price', '<=', $request->input('price-to'));
        }
    
        // Phân trang kết quả
        $list_product = $query->where('status', '=', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(12);
    
        // Trả về view với danh sách sản phẩm
        return view('frontend.product', compact('list_product'));
    }
}
