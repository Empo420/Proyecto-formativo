<?php require("../includes/header.php"); ?>

<?php require("../includes/navbarC1.php"); ?>
<div class="container bg-light">
    <div class="row justify-content-md-center mt-5">
        <div class="col-sm-6 mt-5 shadow-lg p-3 mb-5 bg-body rounded">
            <form method="post">
                <div class="mb-3">
                    <label for="identificacion" class="form-label">Identificacion:</label>
                    <input type="number" class="form-control" id="identificacion" name="identificacion">
                </div>
                <div class="mb-3">
                    <label for="contrasenia" class="form-label">Confirme su contraseña:</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasenia">
                </div>
                <input type="submit" class="btn btn-outline-success" name="cambiar" value="Actualizar contraseña">
            </form>
        </div>
    </div>
</div>
<?php require("../includes/footer.php"); ?>