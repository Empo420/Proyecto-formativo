
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css"/>
    <title>Login</title>
</head>
<body class="bg-dark">
  <section>
    <div class="row g-0">
      <div class="col-lg-7 d-none d-lg-block">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item img-1 min-vh-100 active">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="font-weight-bold">Postulate</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 bg-dark d-flex flex-column align-items-end min-vh-100">
        <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
          <h1 class="font-weight-bold mb-4 text-center">Bienvenido</h1>
          <div class="col-md-auto text-center mb-3 mt-5">
            <h3 class="mb-3">Registrarse Como:</h3>
            <a type="button" class="btn btn-outline-primary btn-lg" href="./logic/C_registrarEmpresa.php">Empresa</a>
            <a type="button" class="btn btn-outline-primary btn-lg" href="./logic/C_registrarCandidato.php">Candidato</a>
          </div>
          <form class="mb-5" method="POST" action="./logic/C_login.php">
            <div class="mb-4">
              <label for="exampleInputEmail1" class="form-label font-weight-bold">Identificacion</label>
              <input type="number" class="form-control bg-dark border-0" id="exampleInputEmail1" placeholder="Ingresa tu identificacion o Nit" aria-describedby="emailHelp" name="identificacion">
            </div>
            <div class="mb-4">
              <label for="exampleInputPassword1" class="form-label font-weight-bold">Contraseña</label>
              <input type="password" class="form-control bg-dark border-0 mb-2" placeholder="Ingresa tu contraseña"  name="contrasenia" id="contrasena">
            </div>
            <input class="btn btn-primary w-100" type="submit" value="iniciar" name="iniciar">
          </form>
        </div>
      </div>
    <?php require("./includes/public.php"); ?> 
    <?php require("./includes/footer.php"); ?> 

