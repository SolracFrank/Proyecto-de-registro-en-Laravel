@extends('Estructura.layout')

@section('title', 'Registro')

@section('diseno')

@endsection

@section('content')

<div class="container py-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">Formulario de registro</div>
        <div class="card-body">
            <form action="{{route('pdf.index') }}" method="get">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="curps" class="form-label">CURP</label>
                        <input type="text" class="form-control"  id="texto" name="texto" value=""
                            required>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                       
                            <input type="hidden" name="estudiante" value="a">
                            <button type="submit">Enviar</button>
                       
                    </div>
                </div>
            </form>
        </div>
        </div>
     

@endsection()
