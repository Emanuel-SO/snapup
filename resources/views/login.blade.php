@extends('layouts.master-landing')
@section('content')

<section class="section my-5 ">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="h2 pb-5">Ingresar</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-lg-6">
                <form>
                    <div class="mb-3">
                      <label for="inputCorreo" class="form-label">Correo Electronico</label>
                      <input type="email" class="form-control" id="inputCorreo" aria-describedby="correoHelp">
                      <div id="correoHelp" class="form-text">Nunca compartiremos tu correo con alguien más.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                  </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    
</section>
@endsection