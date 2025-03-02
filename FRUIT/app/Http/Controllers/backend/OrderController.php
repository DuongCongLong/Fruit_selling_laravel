<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Order::where('dcl_order.status','!=',0)
        ->join('dcl_user','dcl_order.user_id','=','dcl_user.id')
        ->orderBy('dcl_order.created_at','DESC')
        ->select("dcl_order.id","dcl_order.delivery_name","dcl_order.delivery_email","dcl_order.delivery_phone","dcl_order.delivery_address","dcl_order.note","dcl_user.name as username","dcl_order.status")
        ->paginate(10); // Thay đổi số lượng sản phẩm hiển thị mỗi trang tại đây
        return view ("backend.order.index",compact('list'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order=Order::find($id);
        if($order==null)
        {
            return redirect()->route('admin.order.index');
        }
         return view ("backend.order.show",compact('order'));
    }
    public function trash()
    {
        $list=Order::where('dcl_order.status','=',0)
        ->join('dcl_user','dcl_order.user_id','=','dcl_user.id')
        ->orderBy('dcl_order.created_at','DESC')
        ->select("dcl_order.id","dcl_order.delivery_name","dcl_order.delivery_email","dcl_order.delivery_phone","dcl_order.delivery_address","dcl_order.note","dcl_user.name as username")
        ->get();
        return view ("backend.order.trash",compact('list'));
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order=Order::find($id);
        if($order==null)
        {
            return redirect()->route('admin.order.index');
        }
        $order->delete();//Xóa khỏi csdl
        return redirect()->route('admin.order.trash');
    }
    public function restore(string $id)
    {
        $order=Order::find($id);
        if($order==null)
        {
            return redirect()->route('admin.order.index');
        }
        $order->status=2;
        $order->updated_at=date('Y-m-d H:i:s');
        $order->updated_by=Auth::id()??1;
        $order->save();
        return redirect()->route('admin.order.trash');
    }

    public function status(string $id)
    {
        $order=Order::find($id);
        if($order==null)
        {
            return redirect()->route('admin.order.index');
        }
        $order->status=($order->status==1)?2:1;
        $order->updated_at=date('Y-m-d H:i:s');
        $order->updated_by=Auth::id()??1;
        $order->save();
        return redirect()->route('admin.order.index');
    }
    public function delete(string $id)
    {
        $order=Order::find($id);
        if($order==null)
        {
            return redirect()->route('admin.order.index');
        }
        $order->status=0;
        $order->updated_at=date('Y-m-d H:i:s');
        $order->updated_by=Auth::id()??1;
        $order->save();
        return redirect()->route('admin.order.index');
    }
}
