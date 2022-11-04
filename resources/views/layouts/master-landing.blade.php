<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnapUp</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    

    <div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
             <div class="d-flex">
                <a class="navbar-brand" href="{{ url('/') }}">SnapUp</a>
                <form class="d-flex" role="search">
                  <input class="form-control p-2" type="search" placeholder="Search" aria-label="Search">
                </form>
             </div>
             <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SnapUp icono</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('/productos') }}">Productos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ url('/carrito') }}">Carrito</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Contacto</a>
                        </li>
                      </ul>
                      <div>
                          <a href="{{ url('/login') }}">
                            <button class="btn btn-outline-primary mx-2" type="submit">Ingresar</button>
                          </a>
                          <a href="{{ url('/registro') }}">
                            <button class="btn btn-outline-primary mx-2" type="submit">Registrarse</button>
                          </a>
                      </div>
                  
                </div>
              </div>
              
              
              
            </div>
          </nav>
    </div>


    @yield('content')
    @include('layouts.footer')

    <script src="{{asset('js/app.js')}}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>