<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SnapUp</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    {{-- la clase active en el li me permite marcar en que pestaña estoy--}}
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/perfil') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Opciones
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- Se muestra solo en usuario normal --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCompras"
            aria-expanded="true" aria-controls="collapseCompras">
            <i class="fas fa-fw fa-cog"></i>
            <span>Compras</span>
        </a>
        <div id="collapseCompras" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Opciones Compras:</h6>
                <a class="collapse-item" href="buttons.html">Ver Compras</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMensajes"
            aria-expanded="true" aria-controls="collapseMensajes">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Mensajes</span>
        </a>
        <div id="collapseMensajes" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Opciones Mensajes:</h6>
                <a class="collapse-item" href="utilities-color.html">Ver Mensajes</a>
                <a class="collapse-item" href="utilities-border.html">Escribir Mensaje</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Opciones Admin
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProductos"
            aria-expanded="true" aria-controls="collapseProductos">
            <i class="fas fa-fw fa-folder"></i>
            <span>Productos</span>
        </a>
        <div id="collapseProductos" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Opciones Productos:</h6>
                <a class="collapse-item" href="login.html">Ver Productos</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Opciones Categorias:</h6>
                <a class="collapse-item" href="404.html">Ver Categorias</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Opciones Marcas:</h6>
                <a class="collapse-item" href="404.html">Ver Marcas</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagina"
            aria-expanded="true" aria-controls="collapsePagina">
            <i class="fas fa-fw fa-folder"></i>
            <span>Configuración</span>
        </a>
        <div id="collapsePagina" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Opciones Página:</h6>
                <a class="collapse-item" href="login.html">Configuración</a>
                
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->