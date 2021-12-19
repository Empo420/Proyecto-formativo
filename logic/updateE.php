<?php 

    session_start();

    if($_SESSION['sesion'])
    {
        require ("../controller/Sentencias.php");

        $sentencias = new Sentencias();
    
       
    
        if (isset($_REQUEST['cambiarE'])){
            $identificaion = $_POST['nit'];
            $contrasenia = $_POST['contrasena'];
    
            $resultado = $sentencias->cambiarContraseniaEmpresa($identificaion, $contrasenia);
            echo "<script>alert('Se actualizo su contraseña');
            window.location.href='C_perfilEmpresa.php';</script>";
          
              
                
            

    
        }
    
        $titulo['titulos'] = "Actualizar contraseña";
        require("../views/cambiarE.php");
    }
    else{
        header("location: ../index.php"); 
    }

 

?>