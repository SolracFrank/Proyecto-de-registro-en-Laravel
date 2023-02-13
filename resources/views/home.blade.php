@extends('Estructura.layout')

@section('title','Home')

@section('diseno')
.principal
{
    background-color:#f8f8f8;
}
@endsection

@section('content')
    <section class="principal">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <img src="images/portada-simbolo.jpg" alt="Logo">
                </div>
            </div>
        </div>
    </section>
@endsection()