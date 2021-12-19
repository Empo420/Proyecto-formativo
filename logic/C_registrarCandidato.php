<?php 

    require ("../controller/Sentencias.php");

    $sentencias = new Sentencias();

    if (isset($_REQUEST['registrar'])){

        $candidato = new Candidato($_POST['identificacion'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono'],$_POST['hijos'],$_POST['genero'],$_POST['estadoCivil'],$_POST['mascotas'] ,$_POST['nivelEscolaridad'],$_POST['contrasenia']);
        $resultado = $sentencias->insertCandidato( $candidato );
         
        if($resultado)
        {
            echo "<script>alert('Usted ha sido registrado correctamente puede ingresar');
             window.location.href='../index.php';</script>";
           
        }
          
    }

    $titulo['titulos'] = "Registro";

    require ("../views/registroCandidato.php");


?>