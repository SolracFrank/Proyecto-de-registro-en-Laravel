<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
 
    public function store(Request $request)
    {
        $estudiante = request()->except('_token');
        Estudiante::insert($estudiante);

        return view('registrar');
    }

    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));

        $estudiantes=DB::table('estudiantes')
        ->select('*')
        ->where('CURP','=',$texto);

        $pdf = Pdf::loadView('pdfs.pdf', ['estudiantes' => $estudiantes]);
        
       
        return $pdf->stream();
    }
    public function show()
    {
        $CURP = request('CURP');
     //   $datos['estudiantes'] = Estudiante::paginate(1);
       // $estudiantes = App\Models\Estudiante::find($CURP);
       $estudiantes = Estudiante::where('CURP', $CURP)->firstOrFail();
       // return view('tareas.show', ['tarea' => $tarea]);
        
        $pdf = Pdf::loadView('pdfs.pdf', ['estudiantes' => $estudiantes]);
        
       
        return $pdf->stream();
    }

    public function getPDF(Request $request)
    {
      
        
        $pdf = Pdf::loadView('pdfs.pdf');
        
       
        return $pdf->stream();

        
    }
}
