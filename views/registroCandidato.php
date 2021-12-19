<?php require("../includes/header.php"); ?>
<link rel="stylesheet" href="../css/main.css" />
<div>
  <div class=" contenet container-fluid mt-5 shadow p-3 mb-5 bg-body rounded animate__animated animate__backInLeft" style="  max-width: 1000px;">
    <h1 class="text-center" style="font-family:Arial"><b>Registro Candidato</b></h1>
    <form class="row g-3" method="POST">
      <div class="col-md-6">
        <label for="identificacion" class="form-label" style="font-family:Arial"><b>Numero identificación</b></label>
        <input type="number" class="form-control" id="identificacion" name="identificacion" required>
      </div>
      <div class="col-md-6 ">
        <label for="nombre" class="form-label " style="font-family:Arial"><b>Nombre</b></label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="col-12 ">
        <label for="direccion" class="form-label " style="font-family:Arial"><b>Direccion</b></label>
        <input type="text" class="form-control" id="direccion" name="direccion" required>
      </div>
      <div class="col-12 ">
        <label for="telefono" class="form-label " style="font-family:Arial"><b>Telefono</b></label>
        <input type="text" class="form-control" id="telefono" name="telefono" required>
      </div>
      <div class="col-12 ">
        <label for="hijos" class="form-label " style="font-family:Arial"><b>Numero de Hijos</b></label>
        <input type="number" class="form-control" id="hijos" name="hijos" required>
      </div>
      <div class="col-12 " style="font-family:Arial">
        <select class="form-select" aria-label="Default select example" name="genero">
          <option selected><b>Genero</option>
          <option value="masculino"><b>Masculino</b></option>
          <option value="femenino"><b>Femenino</b></option>
          <option value="lgtbi"><b>LGTBI</b></option>
        </select>
      </div>
      <div class="col-12 " style="font-family:Arial">
        <select class="form-select" aria-label="Default select example" name="estadoCivil">
          <option selected><b>Estado Civil</b></option>
          <option value="soltero">Soltero</option>
          <option value="casado">Casado</option>
        </select>
      </div>
      <div class="col-12 " style="font-family:Arial">
        <label for="mascotas" class="form-label"><b>Número de Mascotas</b></label>
        <input type="number" class="form-control" id="mascotas" name="mascotas" required>
      </div>
      <div class="col-12 " style="font-family:Arial">
        <select class="form-select" aria-label="Default select example" name="nivelEscolaridad">
          <option selected><b>Nivel escolaridad</b></option>
          <option value="tecnico"><b>Tecnico</b></option>
          <option value="tecnologo"><b>Tecnologo</b></option>
          <option value="profesional"><b>Profesional</b></option>
          <option value="secundaria"><b>Secundaria</b></option>
          <option value="primaria"><b>Primaria</b></option>
        </select>
      </div>
      <div class="col-12" style="font-family:Arial">
        <label for="contrasenia" class="form-label"><b>contraseña:</b></label>
        <input type="password" class="form-control" id="contrasena" name="contrasenia" required>
      </div>
      <div class="form-group col-12 " style="font-family:Arial">
      </div>
      <div class="d-grid mb-3 " style="font-family:Arial">
        <input type="submit" class="btn btn-success" name="registrar" value="Registrarse">
        <a class="btn btn-warning mb-3" href="../index.php" role="button">Log in <i class="fas fa-sign-in-alt"></i></a>
      </div>
    </form>
  </div>
  <?php require("../includes/public.php"); ?>
  <?php require("../includes/footer.php"); ?>