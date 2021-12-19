<?php

    session_start();

    if($_SESSION['sesion'])
    {
        require ("../controller/Sentencias.php");


        $id = $_GET['id'];
    
    
        $sentencias = new Sentencias();
    
        $resultado = $sentencias->deleteTest($id);

    
        header("location: C_postulados.php");
    }
    else{
        header("location: ../index.php"); 
    }

   

?>