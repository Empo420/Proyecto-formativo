<?php 

    session_start();

    if($_SESSION['sesion'])
    {
        require ("../controller/Sentencias.php");

        $sentencias = new Sentencias();

        if (isset($_REQUEST['cambiar'])){
            $identificaion = $_POST['identificacion'];
            $contraseia = $_POST['contrasenia'];

            $resultado = $sentencias->cambiarContraseniaCandidato($identificaion, $contraseia);
        
            if($resultado)
            {
                echo "<script>alert('Se ha cambiado la contraseña correctamente');
                window.location.href='C_perfilCandidato.php';</script>";
               
            }


        }

    
        $titulo['titulos'] = "Actualizar contraseña";

        require("../views/cambiar.php");
    }
    else{
        header("location: ../index.php");  
    }
    

?>