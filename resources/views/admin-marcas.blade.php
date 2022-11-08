@extends('layouts.master-dashboard')
@section('content')
    <div class="container-fluid">
        <div class="container card shadow mb-4">
            <div class="row card-header py-3">
                <h6 class="col m-0 font-weight-bold text-primary">Marcas</h6>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">{{-- agregar a este btn la funcion para agregar nuevos producstos --}}
                    <button class="btn btn-success" type="button" id="agregar">Agregar</button>
                </div>
            </div>
            <div class="card-body">
                {{-- data-algo, ese algo es debe ser lo que se especifica en el dataset del componente --}}
                <div id="tabla-marcas" data-marcas="{{json_encode($marcas)}}"></div>
            </div>
        </div>
    </div>
@endsection 