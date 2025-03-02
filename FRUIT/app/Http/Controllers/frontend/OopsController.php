<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OopsController extends Controller
{
    public function oops()
    {
        return view('frontend.oops');
    }
}
