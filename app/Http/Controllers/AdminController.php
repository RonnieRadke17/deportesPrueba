<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){//muestra todas sus acciones
        return view('admin.show');
    }

    public function profile()
    {
        return view('admin.profile');
    }


}
