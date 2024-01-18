<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('backend/product/index');
    }

    public function createfrom(){
        return view('backend/product/createfrom');
    }

    public function edit(){
        return view('backend/product/edit');
    }
}
