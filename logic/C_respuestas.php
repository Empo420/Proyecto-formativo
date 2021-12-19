<?php 

session_start();
if($_SESSION['sesion'])
{
    require ("../controller/Sentencias.php");

    $sentecias = new Sentencias();

    $identificaion = $_GET['numeroIdentificacion'];
    $nit = $_SESSION['sesion'];

    $listar = $sentecias->mostaraRespuestas($nit, $identificaion);
    $lista = $sentecias->listarCandidato($identificaion);

    $titulo['titulos'] = "Respuestas";
    require("../views/respuestas.php");
}
else{
    header("location: ../index.php"); 
}

?>