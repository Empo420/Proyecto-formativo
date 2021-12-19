<?php require("../includes/header.php"); ?>
<?php require("../includes/navbarEe.php"); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-6 shadow-lg p-3 mb-5 bg-body rounded mt-5">
      <form method="POST">
        <h1 class="text-center mb-5 mt-3">Empresa</h1>
        <table class="table">
          <tbody>
            <?php foreach ($listar as $empresa) {
              echo "<tr>";
              echo "<td class='col-md-3'>Nit:</td>";
              echo  "<td><input type='number' class='form-control input-sm' name='nit' value=" . $empresa['nit'] . " required></td>";
              echo "</tr>";
              echo "<tr>";
              $nom =  $empresa['nombre'];
              echo "<td class='col-md-3'>Nombre:</td>";
              echo  "<td><input type='text' class='form-control input-sm' name='nombre' value='$nom' required></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td class='col-md-3'>Representante:</td>";
              $repre = $empresa['representante'] ;
              echo  "<td><input type='text' class='form-control input-sm' name='representante' value='$repre' required></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td class='col-md-3'>Direccion:</td>";
              $dir =  $empresa['direccion'];
              echo  "<td><input type='text' class='form-control input-sm' name='direccion' value='$dir' required></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td class='col-md-3'>Telefono:</td>";
              echo  "<td><input type='text' class='form-control input-sm' name='telefono' value=" . $empresa['telefono'] . " required></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td class='col-md-3'>Direccion:</td>";
              echo  "<td><input type='text' class='form-control input-sm' name='descripcion' value=" . $empresa['descripcion'] . " required></td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
        <div class="panel-footer text-center">
          <input type="submit" class="btn btn-success" name="modificar" value="Actualizar Perfil">
          <input type="submit" class="btn btn-danger" id="delete" name="eliminar" value="Eliminar cuenta">
        </div>
      </form>
    </div>
  </div>
</div>
<?php require("../includes/footer.php"); ?>