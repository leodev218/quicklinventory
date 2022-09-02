<?php include_once 'config/database.php';
?>

<!doctype html>
<html lang="es">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style_login.css">
    

  </head>
  <body>

  <div class="container-fluid">
        <div class="row">
              <div class="col-12 col-sm-2 col-md-3 col-lg-4 col-xl-4"></div>
            
              <div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-4 bg-dark mt-4 rounded-2 shadow">
                    <form action="src/functions/login.php" method="post">
                      <div class="row">
                        <div class="col-2"></div>
                        <div class="col-2"><img class="m-3" src="public/img/Saman.png" alt="" width="72" height="57"></div>
                        <div class="col-8"><h3 class="m-4 text-white">FastFile</h3></div>
                      </div>
                      <h4 class="m-4 fw-normal text-white">Ingrese sus datos por favor</h4>
                      <div class="form-floating">
                        <input type="email" class="form-control mb-3" name="correo" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Correo electronico</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control mb-3" name="contraseña" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Contraseña</label>
                      </div>
                      <button class="w-100 btn btn-lg btn-primary" type="submit">Confirmar</button>
                      <p class="mt-5 m-4 text-white">&copy; 2022</p>
                    </form>
                </div>
              <div class="col-12 col-sm-2 col-md-3 col-lg-4 col-xl-4">
  
              </div>   
            </div>
      </div>
          
          
<!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>