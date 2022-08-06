<!doctype html>
<html lang="es">
  <head>
    <title>ferreteria horizonte</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../style/style.css"> 
    <link rel="stylesheet" href="../style/sidebars.css">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
 <!-- BARRA DE NAVEGACION-->    
 <header>
    <div class="px-3 py-2 text-bg-dark">
     <div class="container">
        <div class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
        
            <a href="#" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <img src="../img/Saman.png" alt="" width="30" height="24" class="d-inline-block align-text-top">FastFile
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>
       <!-- <a href="#" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">

            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>
        -->

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="../sections/inventario.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                Inventario
              </a>
            </li>
            <li>
              <a href="../sections/producto.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                Productos
              </a>
            </li>
            <li>
              <a href="../sections/factura.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                Ventas
              </a>
            </li>
            <li>
              <a href="../sections/asociados.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                Clientes
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-light text-dark me-2">Cerrar sesion</button>
          <button type="button" class="btn btn-primary">Inicio</button>
        </div>
      </div>
    </div>
  </header>

  <div class="b-example-divider"></div>
</main>



<div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-5 fw-semibold">Collapsible</span>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Home
        </button>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Overview</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Updates</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Reports</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Dashboard
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Overview</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Weekly</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Monthly</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Annually</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          Orders
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Processed</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Shipped</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Returned</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
<!-- 
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">
              <img src="../img/Saman.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            FastFile
            </a> 
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Opciones
              </a>
              <ul class="dropdown-menu text-white bg-dark table-hover">
                <li><a class="dropdown-item text-primary" href="#">crear producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">ver producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">modificar producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">borrar producto</a></li>
              </ul>
        </li>
      </ul> 
      <form class="d-flex">
        <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Configuracion</button>
        <input class="form-control me-2 text-dark bg-dark" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark" type="submit">Buscar</button>
        <button class="btn btn-dark" type="submit">Inicio</button>
      </form>
    </div>
  </div>
</nav>-->
<!-- MENU OFFCANVAS-->
<!-- 
<div class="offcanvas offcanvas-bottom bg-dark text-primary" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Offcanvas bottom</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
    Proximamente
    <ul class="navbar-nav me-auto mb-2 mb-lg-0"> <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               configuracion avanzada
              </a>
              <ul class="dropdown-menu text-primary bg-dark table-hover">
                <li><a class="dropdown-item text-primary" href="#">crear producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">ver producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">modificar producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">borrar producto</a></li>
              </ul>
        </li>
      </ul> 
  </div>
</div> -->



<!-- CONTENIDO-->
<!--
<div class="container" id="container">
  
  <ul class="nav justify-content-center bg-dark" id="secciones">


        <li class="nav-item dropdown">
              <a class="nav-link text-white dropdown-toggle" href="../sections/producto.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Producto
              </a>
              <ul class="dropdown-menu text-white bg-dark table-hover">
                <li><a class="dropdown-item text-primary" href="#">crear producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">ver producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">modificar producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">borrar producto</a></li>
              </ul>
        </li>


        <li class="nav-item dropdown">
              <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Inventario
              </a>
              <ul class="dropdown-menu text-white bg-dark table-hover">
                <li><a class="dropdown-item text-primary" href="#">crear producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">ver producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">modificar producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">borrar producto</a></li>
              </ul>
        </li>


        <li class="nav-item dropdown">
              <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Venta
              </a>
              <ul class="dropdown-menu text-white bg-dark table-hover">
                <li><a class="dropdown-item text-primary" href="#">crear factura</a></li>
                <li><a class="dropdown-item text-primary" href="#">ver factura</a></li>
                <li><a class="dropdown-item text-primary" href="#">modificar producto</a></li>
                <li><a class="dropdown-item text-primary" href="#">borrar producto</a></li>
              </ul>
        </li>


        <li class="nav-item dropdown">
              <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Clientes
              </a>
              <ul class="dropdown-menu text-white bg-dark table-hover">
                <li><a class="dropdown-item text-primary" href="#">crear cliente</a></li>
                <li><a class="dropdown-item text-primary" href="#">crear proveedor</a></li>
                <li><a class="dropdown-item text-primary" href="#">ver todo</a></li>
                <li><a class="dropdown-item text-primary" href="#">modificar</a></li>
                <li><a class="dropdown-item text-primary" href="#">borrar</a></li>
              </ul>
        </li>
    
    </ul>
</div> -->

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="../javascript/sidebars.js"></script>