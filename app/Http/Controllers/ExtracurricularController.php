<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    //
    public function index(){//muestra todas las extracurriculares registradas
        return view('extracurricular.show');
    }

    public function create(){//manda a form de registro de una extracurricular nueva
        return view('extracurricular.create');
    }
}
