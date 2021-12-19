<?php 

    session_start();

    if($_SESSION['sesion'])
    {
        require ("../controller/Sentencias.php");

        $sentencias = new Sentencias();

        $listar = $sentencias->perfilEmpresa($_SESSION['sesion']);

        if (isset($_REQUEST['eliminar'])){
            $empresa = new Empresa($_REQUEST['nit'],"","","","","", "");
            $resultado = $sentencias->deleteEmpresa($empresa);
             if($resultado)
            {
                echo "<script>confirm('Desea eliminar su cuenta?');
                window.location.href='../index.php';</script>";
                
            }
        
        }

        if (isset($_REQUEST['modificar'])){
            $empresa = new Empresa($_REQUEST['nit'],$_REQUEST['nombre'],$_REQUEST['representante'],$_REQUEST['direccion'],$_REQUEST['telefono'],$_REQUEST['descripcion'], "");
            $resultado = $sentencias->updateEmpresa($empresa);
            if($resultado == true)
            {
                echo "<script>alert('Se actualiaron sus datos');
                window.location.href='C_perfilEmpresa.php';</script>";
                
            }
        }
        $titulo['titulos'] = "Empresa";

        require ("../views/perfilE.php");
        
    }
    else{
        header("location: ../index.php");  
    }
    



?>