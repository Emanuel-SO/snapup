@extends('layouts.master-dashboard')
@section('content')
    <div class="container-fluid">
        <div class="container card shadow mb-4">
            <div class="row card-header py-3">
                <h6 class="col m-0 font-weight-bold text-primary">Usuarios</h6>
            </div>
            <div class="card-body">
                {{-- data-algo, ese algo es debe ser lo que se especifica en el dataset del componente --}}
                <div id="tabla-usuarios" data-usuarios="{{json_encode($usuarios)}}"></div>
            </div>
        </div>
    </div>
@endsection