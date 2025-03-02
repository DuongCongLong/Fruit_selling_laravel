<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list=User::where('dcl_user.status','!=',0)
        //->select("user.id","user.image","user.name","user.username","user.password","user.phone","user.email","user.roles")
        ->orderBy('dcl_user.created_at','DESC')
        ->paginate(10); // Thay đổi số lượng sản phẩm hiển thị mỗi trang tại đây
        return view ("backend.user.index",compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("backend.user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user=new User();
        $user->name=$request->name;
        $user->username=$request->username;
        $user->password=$request->password;
        $user->gender=$request->gender;
        $user->phone=$request->phone ;
        $user->email=$request->email;
        $user->roles=$request->roles;
       //upload file
       if($request->image)
       {
           $exten=$request->file("image")->extension();
           if(in_array($exten,["png","jpg","jpeg","gif","wedp"]))
           {
               $filename= $user->slug.".".$exten;
               $request->image->move(public_path("images/users"),$filename);
               $user->image=$filename;
           }   
       }
       //end upload file
        $user->address=$request->address;
        $user->remember_token=$request->remember_token;
        $user->created_at=date('Y-m-d H:i:s');
        $user->created_by=Auth::id()??1;
        $user->status=$request->status;
        $user->save();
        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=User::find($id);
        if($user==null)
        {
            return redirect()->route('admin.user.index');
        }
         return view ("backend.user.show",compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        if($user==null)
        {
            return redirect()->route('admin.user.index');
        }
        $list=User::where('dcl_user.status','!=',0)
        //->select("user.id","user.image","user.name","user.username","user.password","user.phone","user.email","user.roles")
        ->orderBy('dcl_user.created_at','DESC')
        ->get();
        return view ("backend.user.edit",compact('list','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::find($id);
        if($user==null)
        {
            return redirect()->route('admin.user.index');
        }
        $user->name=$request->name;
        $user->username=$request->username;
        $user->password=$request->password;
        $user->gender=$request->gender;
        $user->phone=$request->phone ;
        $user->email=$request->email;
        $user->roles=$request->roles;
       //upload file
       if($request->image)
       {
           $exten=$request->file("image")->extension();
           if(in_array($exten,["png","jpg","jpeg","gif","wedp"]))
           {
               $filename= $user->slug.".".$exten;
               $request->image->move(public_path("image/users"),$filename);
               $user->image=$filename;
           }   
       }
       //end upload file
        $user->address=$request->address;
        $user->remember_token=$request->remember_token;
        $user->updated_at=date('Y-m-d H:i:s');
        $user->updated_by=Auth::id()??1;
        $user->status=$request->status;
        $user->save();
        return redirect()->route('admin.user.index');
    }
    public function trash()
    {
        $list=User::where('dcl_user.status','=',0)
        //->select("user.id","user.image","user.name","user.username","user.password","user.phone","user.email","user.roles")
        ->orderBy('dcl_user.created_at','DESC')
        ->get();
        return view ("backend.user.trash",compact('list'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::find($id);
        if($user==null)
        {
            return redirect()->route('admin.user.index');
        }
        $user->delete();//Xóa khỏi csdl
        return redirect()->route('admin.user.trash');
    }
    public function restore(string $id)
    {
        $user=User::find($id);
        if($user==null)
        {
            return redirect()->route('admin.user.index');
        }
        $user->status=2;
        $user->updated_at=date('Y-m-d H:i:s');
        $user->updated_by=Auth::id()??1;
        $user->save();
        return redirect()->route('admin.user.trash');
    }

    public function status(string $id)
    {
        $user=User::find($id);
        if($user==null)
        {
            return redirect()->route('admin.user.index');
        }
        $user->status=($user->status==1)?2:1;
        $user->updated_at=date('Y-m-d H:i:s');
        $user->updated_by=Auth::id()??1;
        $user->save();
        return redirect()->route('admin.user.index');
    }
    public function delete(string $id)
    {
        $user=User::find($id);
        if($user==null)
        {
            return redirect()->route('admin.user.index');
        }
        $user->status=0;
        $user->updated_at=date('Y-m-d H:i:s');
        $user->updated_by=Auth::id()??1;
        $user->save();
        return redirect()->route('admin.user.index');
    }
}
