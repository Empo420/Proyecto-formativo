<!DOCTYPE html>
<html lang="en">

<?php require("../includes/header.php"); ?>
<?php require("../includes/navbarC2.php"); ?>
    <div class="container">
        <div class="row justify-content">
            <?php
            foreach ($listar as $empresa) {
                echo "<div class='col-sm-3 mt-3  p-2 mb-2'>";
                echo "<div class='p-3'>";
                echo "<p class='text-center fw-bold'>Nit: " . $empresa['nit'] . "</p>";
                echo "<p class='text-lg-start'>Nombre: " . $empresa['nombre'] . "</p>";
                echo "<p class='text-xl-start'>Representante Legal: " . $empresa['representante'] . "</p>";
                echo "<p class='text-xl-start'>Direccion: " . $empresa['direccion'] . "</p>";
                echo "<p class='text-xl-start'>Telefono: " . $empresa['telefono'] . "</p>";
                echo "<p class='text-xl-start'>Descripcion: " . $empresa['descripcion'] . "</p>";
                echo "<div class='d-grid gap-2'>";
                echo "<a class='btn btn-primary' type='submit' href='C_test.php?nit=" . $empresa['nit'] . "' >Hacer test <i class='fas fa-edit'></i></a>";
                echo  "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
<?php require("../includes/footer.php"); ?>