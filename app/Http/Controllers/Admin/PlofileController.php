<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlofileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    public function create(Request $request)
    {
      // admin/news/createにリダイレクトする
      return redirect('admin/profile/create');
    }
    
    
    
    public function create1()
    {
        return redirect('admin/profile/create');
    }


    public function edit()
    {
        return view('admin.profile.edit');
    }
    public function update(Request $request)
    {
      // admin/news/createにリダイレクトする
      return redirect('admin/profile/edit');
    }



    public function update1()
    {
        return redirect('admin/profile/edit');
    }
}
