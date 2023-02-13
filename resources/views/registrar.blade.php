@extends('Estructura.layout')

@section('title', 'Registro')

@section('diseno')

@endsection

@section('content')
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de registro</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container py-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">Formulario de registro</div>
                <div class="card-body">
                    <form action="{{url('/pdf')}}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" id="ApellidoPaterno" name="ApellidoPaterno"
                                    required>
                            </div>
                            <div class="col">
                                <label for="apellido_materno" class="form-label">Apellido Materno</label>
                                <input type="text" class="form-control" id="ApellidoMaterno" name="ApellidoMaterno"
                                    required>
                            </div>
                            <div class="col">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="curp" class="form-label">CURP</label>
                                <input type="text" class="form-control" id="CURP" name="CURP" required>
                            </div>
                            <div class="col">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" id="Ciudad" name="Ciudad" required>
                            </div>
                            <div class="col">
                                <label for="colonia" class="form-label">Colonia</label>
                                <input type="text" class="form-control" id="Colonia" name="Colonia" required>
                            </div>
                            <div class="col">
                                <label for="codigo_postal" class="form-label">Código postal</label>
                                <input type="text" class="form-control" id="CodigoPostal" name="CodigoPostal" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="Telefono" name="Telefono" required>
                            </div>
                            <div class="col">
                                <label for="telefono_padre" class="form-label">Teléfono del padre</label>
                                <input type="tel" class="form-control" id="TelefonoTutor" name="TelefonoTutor"
                                    required>
                            </div>
                            <div class="col">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="Email" name="Email" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="especialidad1">Primera Especialidad:</label>
                                <select id="fEspecialidad" name="fEspecialidad" required>
                                    <option value="">Seleccionar especialidad</option>
                                    <option value="Informatica">Informática</option>
                                    <option value="Contabilidad">Contabilidad</option>
                                    <option value="Electronica">Electrónica</option>
                                    <option value="Adminrh">Administración de RH</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="especialidad2">Segunda Especialidad:</label>
                                <select id="sEspecialidad" name="sEspecialidad" required>
                                    <option value="">Seleccionar especialidad</option>
                                    <option value="Informatica">Informática</option>
                                    <option value="Contabilidad">Contabilidad</option>
                                    <option value="Electronica">Electrónica</option>
                                    <option value="Adminrh">Administración de RH</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="promedio">Promedio:</label>
                                <input type="number" id="Promedio" name="Promedio" step="0.01" required>
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-auto">
                                <button type="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    @endsection()
