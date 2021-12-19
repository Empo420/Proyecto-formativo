<?php require("../includes/header.php") ?>
<link rel="stylesheet" href="../css/main.css"/>
<div class=" contenet container-fluid mt-5 shadow p-3 mb-5 bg-body rounded animate__animated animate__backInLeft " style="  max-width: 1000px;"  >
    <h1 class="text-center"><b>Registro Empresa</b></h1>
    <form  class="row g-3"  method="POST">
      <div class="col-md-6">
        <label for="nit" class="form-label"><b>NIT</b></label>
        <input type="text" class="form-control" id="nit" name="nit" required>
      </div>
      <div class="col-md-6">
        <label for="nombre" class="form-label"><b>Nombre</b></label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="col-12">
        <label for="representante" class="form-label"><b>Representante Legal</b></label>
        <input type="text" class="form-control" id="representante" name="representante" required>
      </div>
      <div class="col-12">
        <label for="direccion" class="form-label"><b>Direccion</b></label>
        <input type="text" class="form-control" id="direccion" name="direccion" required>
      </div>
      <div class="col-md-6">
        <label for="telefono" class="form-label"><b>Telefono</b></label>
        <input type="text" class="form-control" id="telefono" name="telefono" required>
      </div>
      <div class="col-md-6">
        <label for="descripcion" class="form-label"><b>Descripcion:</b></label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
      </div>
      <div class="col-12">
        <label for="contrasenia" class="form-label"><b>contraseña:</b></label>
        <input type="password" class="form-control" id="contrasena" name="contrasenia" required>
      </div>
      <input type="submit" class="btn btn-primary" name="registrar" value="Registrarse">
      <a href="../index.php"  type="submit" class="btn btn-success">Log in <i class="fas fa-sign-in-alt"></i></a>
    </form>
  </div>
  <?php require("../includes/public.php") ?>
    
<?php require("../includes/footer.php") ?>