<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;


class RegistroController extends Controller
{
    public function search()
    {
        $estudiantes = Estudiante::all();

        return view('buscar')->with('estudiantes', $estudiantes);
        
    }

    public function create()
    {
        return view('registrar');
    }
   
}

