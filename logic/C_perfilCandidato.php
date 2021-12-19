<?php 

    session_start();

    require ("../controller/Sentencias.php");
  
    if($_SESSION['sesion'])
    {
        $sentencias = new Sentencias();
        $identificacion = $_SESSION['sesion'];
    
        $listar = $sentencias->listarCandidato($identificacion);
        if (isset($_REQUEST['eliminar'])){
            $candidato = new Candidato($_POST['identificacion'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono'],$_POST['hijos'],$_POST['genero'],$_POST['estadoCivil'],$_POST['mascotas'] ,$_POST['escolaridad'],"");
            $resultado = $sentencias->deleteCandidato($candidato);
            if($resultado)
            {
                echo "<script>confirm('Desea eliminar su cuenta?');
                window.location.href='../index.php';</script>";
                
            }
            
        }
    
        if (isset($_REQUEST['modificar'])){
           
            $candidato = new Candidato($_POST['identificacion'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono'],$_POST['hijos'],$_POST['genero'],$_POST['estadoCivil'],$_POST['mascotas'] ,$_POST['escolaridad'],"");
            $resultado =  $sentencias->updateCandidato($candidato);
            
            if($resultado)
            {
                echo "<script>alert('Se actualizaron sus datos');
                window.location.href='C_perfilCandidato.php';</script>";
            }
                
            
        
            
         
               
        }
        $titulo['titulos'] = "Mi perfil";

        require ("../views/perfil.php");
    }
    else{
        header("location: ../index.php");
    }
  


    


?>