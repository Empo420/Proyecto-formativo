<?php 

session_start();
if($_SESSION['sesion'])
{
    require ("../controller/Sentencias.php");

    $sentencias = new Sentencias();



    $nit = $_SESSION['sesion'];

    $lista = $sentencias->mostrarPostulados($nit);

    $titulo['titulos'] = "Postulados";

    require("../views/postulados.php");
}
else{
    header("location: ../index.php");  
}

?>