<?php 

session_start();

    require ("../controller/Sentencias.php");
    


    $sentecias = new Sentencias();
   
       
            if(isset($_POST['iniciar'])){
            
           
                

            $candidato = new Candidato($_POST['identificacion'],"","","","","","","","",$_POST['contrasenia']);
            $empresa = new Empresa($_POST['identificacion'],"","","","", "",$_POST['contrasenia']);
    
            
            $resultadoCandidato = $sentecias->consultarCandidato($candidato);
            $resultadoEmpresa = $sentecias->consultarEmpresa($empresa);
            
           
            if ($resultadoCandidato == 1)
            {
                $nombre = $sentecias->buscarCandidatoNombreNumero($_POST['identificacion']);
                $nombreCompleto;
                foreach ($nombre as $valor) {
                    echo $valor['numeroIdentificacion']."  ".$valor['nombre']." ".$valor['direccion']."  ".$valor['telefono']."  ".$valor['cantidadHijos']."  ".$valor['genero']."  ".$valor['estadoCivil']."  ".$valor['cantidadMascotas']."  ".$valor['nivelEscolaridad'] ;
                    $nombreCompleto = $valor['numeroIdentificacion'] ;
                    
                }
                    $_SESSION['sesion'] = $nombreCompleto; 
                    
                    header("location: C_homeC.php");    
            } 
            
            
            else if($resultadoEmpresa == 1)
            {
               
                $nombre = $sentecias->buscarEmpresaNombreNit($_POST['identificacion']);
                $nombreCompleto;
                foreach ($nombre as $valor) {
                    echo $valor['nit']." ".$valor['nombre'];
                    $nombreCompleto  = $valor['nit'];
                }
                    $_SESSION['sesion'] = $nombreCompleto;
                    header("location:  C_homeE.php"); 
            }

            else {
                echo "<script>alert('identificacion o contraseña incorrecto');
                window.location.href='../index.php';</script>";
                
                
            }
            

        }
        

        require ("../index.php");
        
?>