@extends('layouts.master-dashboard')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ejemplo</h6>
            </div>
            <div class="card-body">
                <div id="table" data-roles="{{json_encode($roles)}}"></div>
            </div>
        </div>
    </div>
@endsection    