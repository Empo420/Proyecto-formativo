<?php require("../includes/header.php"); ?>
<?php require("../includes/navbarCc.php"); ?>
<div class="container bg-light wow fadeInUp">
  <div class="row justify-content-center">
    <div class="col-sm-6 shadow-lg p-3 mb-5 bg-body rounded mt-5">
      <form method="POST">
        <h1 class="text-center mb-5 mt-3">Candidato</h1>
        <table class="table">
          <tbody>
            <?php
            foreach ($listar as $candidato) {
              echo "<tr>";
              echo "<td class='col-md-3'>Identificacion:</td>";
              echo  "<td><input type='number' class='form-control input-sm' name='identificacion' value=" . $candidato['numeroIdentificacion'] . " required></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td class='col-md-3'>Nombre:</td>";
              $nom = $candidato['nombre'];
              echo  "<td><input type='text' class='form-control' name='nombre' value='$nom' required></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td class='col-md-3'>Direccion:</td>";
              $dir = $candidato['direccion'];
              echo  "<td><input type='text' class='form-control input-sm' name='direccion' value='$dir' required></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td class='col-md-3'>Telefono:</td>";
              echo  "<td><input type='number' class='form-control input-sm' name='telefono' value=" . $candidato['telefono'] . " required></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td class='col-md-3'>Cantidad Hijos:</td>";
              echo  "<td><input type='number' class='form-control input-sm' name='hijos' value=" . $candidato['cantidadHijos'] . " required></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td class='col-md-3'>genero:</td>";
              echo  "<td><input type='text' class='form-control input-sm' name='genero' value=" . $candidato['genero'] . " required></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td class='col-md-3'>Estado Civil:</td>";
              echo  "<td><input type='text' class='form-control input-sm' name='estadoCivil' value=" . $candidato['estadoCivil'] . " required></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td class='col-md-3'>Cantidad Mascotas:</td>";
              echo  "<td><input type='number' class='form-control input-sm' name='mascotas' value=" . $candidato['cantidadMascotas'] . " required></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td class='col-md-3'>Nivel Escolaridad:</td>";
              echo  "<td><input type='text' class='form-control input-sm' name='escolaridad' value=" . $candidato['nivelEscolaridad'] . " required></td>";
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