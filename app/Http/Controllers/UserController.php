<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function name($id, $name)
    {
        return view('user.name', ['id' => $id, 'name' => $name]);
    }
}
