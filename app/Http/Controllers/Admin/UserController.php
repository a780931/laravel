<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends BaseController
{
    public function index(){
        return view('admin.index');
    }
    public function show(){
        return view('admin.user');
    }
    public function edit(){
        return view('admin.edit');
    }


}
