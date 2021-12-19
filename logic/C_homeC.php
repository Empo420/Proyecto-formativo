<?php

    session_start();

    if($_SESSION['sesion'])
    {
        $titulo['titulos'] = "Home";
        require ("../views/homeC.php");
    }
    else{
        header("location: ../index.php"); 
    }

   

?>