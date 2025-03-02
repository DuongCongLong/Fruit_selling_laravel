<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\backend\BannerController;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Banner::where('dcl_banner.status','!=',0)
        //->select("id","image","name","link","position")
        ->orderBy('dcl_banner.id','ASC')
        ->paginate(10); // Thay đổi số lượng sản phẩm hiển thị mỗi trang tại đây
        $htmlposition='';
        foreach($list as $item)
        {
            $htmlposition.="<option value='".$item->position."'>".$item->position."</option>";
        }
        //
        return view ("backend.banner.index",compact('list','htmlposition'));
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
    public function store(StoreBannerRequest $request)
    {
        $banner=new Banner();
        $banner->name=$request->name;
        $banner->link=$request->link;
        $banner->position=$request->position;
        $banner->description=$request->description;
        //upload file
        if($request->image)
        {
            $exten=$request->file("image")->extension();
            if(in_array($exten,["png","jpg","jpeg","gif","wedp"]))
            {
                $filename= $banner->slug.".".$exten;
                $request->image->move(public_path("images/banners"),$filename);
                $banner->image=$filename;
            }   
        }
        //end upload file
        $banner->status=$request->status;
        $banner->created_at=date('Y-m-d H:i:s');
        $banner->created_by=Auth::id()??1;
        $banner->save();
        return redirect()->route('admin.banner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $banner=Banner::find($id);
        if($banner==null)
        {
            return redirect()->route('admin.banner.index');
        }
         return view ("backend.banner.show",compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner=Banner::find($id);
        if($banner==null)
        {
            return redirect()->route('admin.banner.index');
        }
        $list=Banner::where('dcl_banner.status','!=',0)
        //->select("id","image","name","link","position")
        ->orderBy('dcl_banner.id','ASC')
        ->get();
        $htmlposition='';
        foreach($list as $item)
        {
            if($banner->position == $item->position)
            {
                $htmlposition.="<option selected value='".$item->position."'>".$item->position."</option>";
            }
           else
           {
            $htmlposition.="<option value='".$item->position."'>".$item->position."</option>";
           }
        }
        //
        return view ("backend.banner.edit",compact('list','htmlposition','banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner=Banner::find($id);
        if($banner==null)
        {
            return redirect()->route('admin.banner.index');
        }
        $banner->name=$request->name;
        $banner->link=$request->link;
        $banner->position=$request->position;
        $banner->description=$request->description;
        //upload file
        if($request->image)
        {
            $exten=$request->file("image")->extension();
            if(in_array($exten,["png","jpg","jpeg","gif","wedp"]))
            {
                $filename= $banner->slug.".".$exten;
                $request->image->move(public_path("images/banners"),$filename);
                $banner->image=$filename;
            }   
        }
        //end upload file
        $banner->status=$request->status;
        $banner->updated_at=date('Y-m-d H:i:s');
        $banner->updated_by=Auth::id()??1;
        $banner->save();
        return redirect()->route('admin.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner=Banner::find($id);
        if($banner==null)
        {
            return redirect()->route('admin.banner.index');
        }
        $banner->delete();//Xóa khỏi csdl
        return redirect()->route('admin.banner.trash');
    }
    public function restore(string $id)
    {
        $banner=Banner::find($id);
        if($banner==null)
        {
            return redirect()->route('admin.banner.index');
        }
        $banner->status=2;
        $banner->updated_at=date('Y-m-d H:i:s');
        $banner->updated_by=Auth::id()??1;
        $banner->save();
        return redirect()->route('admin.banner.trash');
    }

    public function status(string $id)
    {
        $banner=Banner::find($id);
        if($banner==null)
        {
            return redirect()->route('admin.banner.index');
        }
        $banner->status=($banner->status==1)?2:1;
        $banner->updated_at=date('Y-m-d H:i:s');
        $banner->updated_by=Auth::id()??1;
        $banner->save();
        return redirect()->route('admin.banner.index');
    }
    public function delete(string $id)
    {
        $banner=Banner::find($id);
        if($banner==null)
        {
            return redirect()->route('admin.banner.index');
        }
        $banner->status=0;
        $banner->updated_at=date('Y-m-d H:i:s');
        $banner->updated_by=Auth::id()??1;
        $banner->save();
        return redirect()->route('admin.banner.index');
    }
    
    public function trash()
    {
        $list=Banner::where('dcl_banner.status','=',0)
        //->select("id","image","name","link","position")
        ->orderBy('dcl_banner.id','ASC')
        ->get();
        return view ("backend.banner.trash",compact('list'));
    }
}
