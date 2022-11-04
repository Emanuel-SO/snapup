@extends('layouts.master-landing')
@section('content')

<section class="section my-5 ">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-lg-6">
                <form>
                    <div class="mb-3">
                        <label for="inputNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="inputNombre" aria-describedby="nombreHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputApellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="inputApellido" aria-describedby="apellidoHelp">
                    </div>
                    <div class="mb-3">
                      <label for="inputCorreo" class="form-label">Correo Electronico</label>
                      <input type="email" class="form-control" id="inputCorreo" aria-describedby="correoHelp">
                      <div id="correoHelp" class="form-text">Nunca compartiremos tu correo con alguien más.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword2">
                    </div>
                    <div class="mb-3">
                        <label for="inputTelefono" class="form-label">Teléfono</label>
                        <input type="phone" class="form-control" id="inputTelefono">
                    </div>
                    <div class="mb-3">
                        <label for="inputDireccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="inputDireccion">
                    </div>
                    <div class="mb-3">
                        <label for="inputCP" class="form-label">Código Postal</label>
                        <input type="text" class="form-control" id="inputCP">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                  </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    
</section>
@endsection