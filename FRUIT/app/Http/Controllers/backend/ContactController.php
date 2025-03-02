<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=Contact::where('dcl_contact.status','!=',0)
        ->join('dcl_user','dcl_contact.user_id','=','dcl_user.id')
        ->orderBy('dcl_contact.created_at','desc')
        ->select("dcl_contact.id","dcl_contact.name","dcl_contact.phone","dcl_contact.email","dcl_contact.title","dcl_user.name as username","dcl_contact.status")
        ->paginate(10); // Thay đổi số lượng sản phẩm hiển thị mỗi trang tại đây
        return view ("backend.contact.index",compact('list'));
        // return view("backend.contact.index");
    }

    public function trash()
    {
        $list=Contact::where('dcl_contact.status','=',0)
        ->join('dcl_user','dcl_contact.user_id','=','dcl_user.id')
        ->orderBy('dcl_contact.created_at','DESC')
        ->select("dcl_contact.id","dcl_contact.name","dcl_contact.phone","dcl_contact.email","dcl_contact.title","dcl_user.name as username")
        ->get();
        return view ("backend.contact.trash",compact('list'));
    }
    public function status(string $id)
    {
        $contact=Contact::find($id);
        if($contact==null)
        {
            return redirect()->route('admin.contact.index');
        }
        $contact->status=($contact->status==1)?2:1;
        $contact->updated_at=date('Y-m-d H:i:s');
        $contact->updated_by=Auth::id()??1;
        $contact->save();
        return redirect()->route('admin.contact.index');
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
        $contact=Contact::find($id);
        if($contact==null)
        {
            return redirect()->route('admin.contact.index');
        }
         return view ("backend.contact.show",compact('contact'));
     }

    // // /**
    // //  * Show the form for editing the specified resource.
    // //  */
    // // public function edit(string $id)
    // // {
    // //     //
    // // }

    // // /**
    // //  * Update the specified resource in storage.
    // //  */
    // // public function update(Request $request, string $id)
    // // {
    // //     //
    // // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(string $id)
    {
        $contact=Contact::find($id);
        if($contact==null)
        {
            return redirect()->route('admin.contact.index');
        }
        $contact->delete();//Xóa khỏi csdl
        return redirect()->route('admin.contact.trash');
    }
    public function restore(string $id)
    {
        $contact=Contact::find($id);
        if($contact==null)
        {
            return redirect()->route('admin.contact.index');
        }
        $contact->status=2;
        $contact->updated_at=date('Y-m-d H:i:s');
        $contact->updated_by=Auth::id()??1;
        $contact->save();
        return redirect()->route('admin.contact.trash');
    }
    public function delete(string $id)
    {
        $contact=Contact::find($id);
        if($contact==null)
        {
            return redirect()->route('admin.contact.index');
        }
        $contact->status=0;
        $contact->updated_at=date('Y-m-d H:i:s');
        $contact->updated_by=Auth::id()??1;
        $contact->save();
        return redirect()->route('admin.contact.index');
    }
}
