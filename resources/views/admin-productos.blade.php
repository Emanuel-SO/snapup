@extends('layouts.master-dashboard')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Productos</h6>
            </div>
            <div class="card-body">
                {{-- data-algo, ese algo es debe ser lo que se especifica en el dataset del componente --}}
                <div id="tabla-productos" data-productos="{{json_encode($productos)}}"></div>
            </div>
        </div>
    </div>
@endsection 