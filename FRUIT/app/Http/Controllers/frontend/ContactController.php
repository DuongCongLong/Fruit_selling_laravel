<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Contact;
use App\Models\Orderdetail;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    // public function contact()
    // {
    //       return view('frontend.contact');
    // }
    // public function save(Request $request)
    // {
    // $user=Auth::user();
    // {
    //     $contact =new Contact();
    //     $contact->user_id=$user->id;
    //     $contact->name=$request->name;
    //     $contact->email=$request->email;
    //     $contact->phone=$request->phone;
    //     $contact->address=$request->address;
    //     $contact->content=$request->content;
    //     $contact->replay_id=$user->id;
    //     $contact->created_at=date('Y-m-d H:i:s');
    //     $contact->status=1;
    //     $contact->save();
    // }
    // return view('frontend.contact');
    // }
}
