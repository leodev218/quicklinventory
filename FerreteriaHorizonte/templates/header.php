<!doctype html>
<html lang="es">
  <head>
    <title>ferreteria horizonte</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../style/style.css"> 
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
 <!-- BARRA DE NAVEGACION-->    
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
</nav>
<!-- MENU OFFCANVAS-->
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
</div>

<!-- CONTENIDO-->
<div class="container" id="container">
  <!-- ETIQUETAS-->  
  <ul class="nav justify-content-center bg-dark" id="secciones">
        <li class="nav-item dropdown">
              <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Producto
              </a>
              <ul class="dropdown-menu bg-dark table-hover">
                <li><a class="dropdown-item text-primary bg-dark" href="#">crear producto</a></li>
                <li><a class="dropdown-item text-primary bg-dark" href="#">ver producto</a></li>
                <li><a class="dropdown-item text-primary bg-dark" href="#">modificar producto</a></li>
                <li><a class="dropdown-item text-primary bg-dark" href="#">borrar producto</a></li>
              </ul>
        </li>
        <li class="nav-item dropdown">
              <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Inventario
              </a>
              <ul class="dropdown-menu bg-dark">
                <li><a class="dropdown-item text-primary bg-dark" href="#">crear orden</a></li>
                <li><a class="dropdown-item text-primary bg-dark" href="#">ver orden</a></li>
                <li><a class="dropdown-item text-primary bg-dark" href="#">modificar orden</a></li>
                <li><a class="dropdown-item text-primary bg-dark" href="#">borrar orden</a></li>
              </ul>
        </li>
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ventas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">crear factura</a></li>
                <li><a class="dropdown-item" href="#">ver factura</a></li>
                <li><a class="dropdown-item" href="#">modificar producto</a></li>
                <li><a class="dropdown-item" href="#">borrar producto</a></li>
              </ul>
        </li>
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Clientes
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">crear cliente</a></li>
                <li><a class="dropdown-item" href="#">crear proveedor</a></li>
                <li><a class="dropdown-item" href="#">ver todo</a></li>
                <li><a class="dropdown-item" href="#">modificar</a></li>
                <li><a class="dropdown-item" href="#">borrar</a></li>
              </ul>
        </li>
    
    </ul>
</div>