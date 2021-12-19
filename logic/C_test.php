<?php 
 session_start();
 if($_SESSION['sesion'])
    {
        require ("../controller/Sentencias.php");
 

        $sentencias = new Sentencias();

        $candidato = $_SESSION['sesion'];
        $nit = $_GET['nit'];


        if(isset($_POST['finalizar'])){

            $test = new Test($_POST['respuesta1'], $_POST['respuesta2'], $_POST['respuesta3'], $_POST['respuesta4'], $_POST['respuesta5'], $_POST['respuesta6'], $_POST['respuesta7'], $_POST['respuesta8'], $_POST['respuesta9'], $_POST['respuesta10'],
            $_POST['respuesta11'], $_POST['respuesta12'], $_POST['respuesta13'], $_POST['respuesta14'], $_POST['respuesta15'], $_POST['respuesta16'], $_POST['respuesta17'], $_POST['respuesta18'], $_POST['respuesta19'], $_POST['respuesta20'], $candidato, $nit);
            
            $resultado =  $sentencias->insertTest($test);

            if( $resultado === true )
            {
                echo "<script>alert('Usted ha terminado el Test y se ha registrado');
                window.location.href='C_perfilCandidato.php';</script>";
               
            }

        }
    
    $titulo['titulos'] = "Test";

    require("../views/test.php");
    }
    else{
        header("location: ../index.php");  
    }
 
?>