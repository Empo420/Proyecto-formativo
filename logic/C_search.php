<?php 
    session_start();
    if($_SESSION['sesion'])
    {
        require ("../controller/Sentencias.php");


        $sentencias = new Sentencias();
        $listar = $sentencias->listarEmpresa();
    
    
        
    
        $titulo['titulos'] = "Buscar";
        require ("../views/buscar.php");
       
    }
    else{
        header("location: ../index.php"); 
    }
    
?>