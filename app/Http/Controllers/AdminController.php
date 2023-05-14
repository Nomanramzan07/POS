<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function add_product()
    {
        return view('admin.add_product');
    }
    public function show_product()
    {
        return view('admin.show_product');
    }

    public function test2()
    {
        return view('admin.test2');
    }
}
