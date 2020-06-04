<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class gisiController extends Controller
{
    //
    
    public function add(){
        return view('admin.gin.create');
    }
    
}
