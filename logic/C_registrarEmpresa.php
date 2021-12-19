<?php
    

    require ("../controller/Sentencias.php");


    $sentencias = new Sentencias();

    if (isset($_REQUEST['registrar'])){

        $empresa = new Empresa($_POST['nit'],$_POST['nombre'],$_POST['representante'],$_POST['direccion'],$_POST['telefono'],$_POST['descripcion'],$_POST['contrasenia']);
            
        $resultado = $sentencias->insertEmpresa($empresa);

        if($resultado)
        {
            echo "<script>alert('Usted ha sido registrado correctamente puede acceder');
            window.location.href='../index.php';</script>";
           
        }
          
           
    }

    $titulo['titulos'] = "Registro";

    require ("../views/registroEmpresa.php");

?>