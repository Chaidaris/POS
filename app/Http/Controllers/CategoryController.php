<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function food()
    {
        return view('category.food');
    }

    public function beauty()
    {
        return view('category.beauty');
    }

    public function baby()
    {
        return view('category.baby');
    }

    public function home()
    {
        return view('category.home');
    }
}
