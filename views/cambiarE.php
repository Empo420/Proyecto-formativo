<?php require("../includes/header.php"); ?>
<?php require("../includes/navbar3.php"); ?>
<div class="container bg-light">
    <div class="row justify-content-md-center mt-5">
        <div class="col-sm-6 shadow-lg p-3 mb-5 bg-body rounded mt-5">
            <form  method="post">
                <div class="mb-3">
                    <label for="identificacion" class="form-label">Nit:</label>
                    <input type="number" class="form-control" id="nit" name="nit">
                </div>
                <div class="mb-3">
                    <label for="contrasenia" class="form-label">Confirme su contraseña:</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena">
                </div>
                <input type="submit" class="btn btn-outline-success" name="cambiarE" value="Actualizar contraseña">
            </form>
        </div>
    </div>
</div>
<?php require("../includes/footer.php"); ?>