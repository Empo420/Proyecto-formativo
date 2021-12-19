<?php

    include "../models/Empresa.php";
    include "../models/Candidato.php";
    include "../models/Test.php";
    include "../models/database.php";

    class Sentencias
    {
        private $numero;
        private $db;
        

        public function __construct()
        {
            $this->db = new Conexion();
            $this->db = $this->db->conectar();
        }

        public function insertEmpresa(Empresa $empresa)
        {
            $sql ="INSERT INTO empresa(nit, nombre, representante, direccion, telefono, descripcion, contrasenia, estado ) 
            VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
        
            try{
                $query = $this->db->prepare($sql);
                $datos = array($empresa->getNit(), $empresa->getNombre(), $empresa->getRepresentante(), $empresa->getDireccion(),$empresa->getTelefono(), $empresa->getDescripcion(), $empresa->getContrasenia(), $empresa->getEstado());
                $query->execute($datos);
                return true;
            } catch (Exception $e){
                echo "EL error es: ".$e->getMessage();
            }
            return false;
        }


        public function updateEmpresa($empresa)
        {
            $sql = "UPDATE empresa SET nit = ?, nombre = ?, representante = ?, direccion = ?, telefono = ?, descripcion = ?, contrasenia = ? WHERE nit = '".$empresa->getNit()."'";
            try{
                $query = $this->db->prepare($sql);
                $datos = array($empresa->getNit(), $empresa->getNombre(), $empresa->getRepresentante(), $empresa->getDireccion(),$empresa->getTelefono(), $empresa->getDescripcion(), $empresa->getContrasenia() );
                $query->execute($datos);
                return true;
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
           return false;
        }


        public function listarEmpresa()
        {
            $sql = "SELECT * FROM empresa WHERE estado = 1";
            $registro = array();

            try{
                $query = $this->db->prepare($sql);
                $query->execute();
                while($row =  $query->fetch(PDO::FETCH_ASSOC)){
                    $registro[] = $row;
                }
            
            } catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $registro;
        }

     


        public function perfilEmpresa($nit)
        {
            $sql = "SELECT * FROM empresa WHERE nit = '".$nit."' AND estado = 1";
            $registro = array();
            
            try{
                $query = $this->db->prepare($sql);
                $query->execute();
                $row =  $query->fetch(PDO::FETCH_ASSOC);
                $registro[] = $row;

            }catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $registro;
 
        }

      

        public function cambiarContraseniaEmpresa($nit, $contrasena)
        {
            $sql = "UPDATE empresa SET contrasenia = ".$contrasena." WHERE nit = '".$nit."' AND estado = 1";
           
            try{
                $query = $this->db->prepare($sql);
                $query->execute();
                return 1;
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
            return 0;
        }

        public function deleteEmpresa($empresa)
        {
            $sql =  "UPDATE empresa SET estado = 0 WHERE  nit = '".$empresa->getNit()."'" ;
            
            try{
                $query = $this->db->prepare($sql);
                $query->execute();
                return true;
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
            return false;
        }


        public function buscarEmpresaNombreNit($nit){
            $sql = "SELECT nit, nombre FROM empresa WHERE nit = '".$nit."' AND estado = 1";
            $resultado = array();
            try{
                $query = $this->db->prepare($sql);
                $query->execute();
                while ($registro =  $query->fetch(PDO::FETCH_ASSOC)) {
                    $resultado[] = $registro;
                }
            } catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $resultado;
        }


        ////////////////////////   CANDIDATO /////////////////////////////////////////////

        public function insertCandidato( Candidato $candidato)
        {
            $sql = "INSERT INTO candidato(numeroIdentificacion, nombre, direccion, telefono, cantidadHijos, genero, estadoCivil, cantidadMascotas, nivelEscolaridad, contrasenia, estado)
            VALUES(?,?,?,?,?,?,?,?,?,?,?)";
      
            try{
                $query = $this->db->prepare($sql);
                $datos = array($candidato->getNumeroIdentificacion(),$candidato->getNombre(),$candidato->getDireccion(),$candidato->getTelefono(),$candidato->getCantidadHijos(),$candidato->getGenero(),$candidato->getEstadoCivil(),$candidato->getCantidadMascotas(), $candidato->getNivelEscolaridad(), $candidato->getContrasenia(), $candidato->getEstado() );
                $query->execute($datos);
                return true;
            } catch (Exception $e){
                echo "EL error es: ".$e->getMessage();
            }
            return false;
        }

        public function listarCandidato($numero)
        {
            $sql = "SELECT * FROM candidato WHERE numeroIdentificacion = '".$numero."' AND estado = 1" ;
            
            $registro = array();
            try{
                $query = $this->db->prepare($sql);
                $query->execute();
                $row =  $query->fetch(PDO::FETCH_ASSOC);
                $registro[] = $row; 
            
            } catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $registro;
        }
       

        public function updateCandidato( $candidato)
        {
            $sql = "UPDATE candidato SET numeroIdentificacion = ?, nombre = ?, direccion = ?, telefono = ?, cantidadHijos = ?, genero = ?, estadoCivil = ?, cantidadMascotas = ?, nivelEscolaridad = ? WHERE numeroIdentificacion = '".$candidato->getNumeroIdentificacion()."'";
            try{
                $query = $this->db->prepare($sql);
                $datos = array($candidato->getNumeroIdentificacion(),$candidato->getNombre(),$candidato->getDireccion(),$candidato->getTelefono(),$candidato->getCantidadHijos(),$candidato->getGenero(),$candidato->getEstadoCivil(),$candidato->getCantidadMascotas(), $candidato->getNivelEscolaridad() );
                $query->execute($datos);
                return true;
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
           return false;
        }

        public function deleteCandidato($candidato)
        {
            $sql = "UPDATE candidato SET estado = 0 WHERE  numeroIdentificacion = '".$candidato->getNumeroIdentificacion()."'";
            
            try{
                $query = $this->db->prepare($sql);
                $query->execute();
                return true;
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
            return false;
        }

        
        

        public function consultarCandidato($candidato){
            $consultarCandidato = "SELECT * FROM candidato WHERE numeroIdentificacion = '".$candidato->getNumeroIdentificacion()."' AND contrasenia = '".$candidato->getContrasenia()."' AND estado = 1";
            
            try {
                    $query = $this->db->prepare($consultarCandidato);
                    $query->execute();
                    while ($query->fetch(PDO::FETCH_ASSOC)){
                        return 1;
                }
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
            return 0;
        }

        public function consultarEmpresa($empresa){
            $consultarEmpresa =" SELECT * FROM empresa WHERE nit = '".$empresa->getNit()."' AND contrasenia = '".$empresa->getContrasenia()."' AND estado = 1" ;
            
            try {
                $query = $this->db->prepare($consultarEmpresa);
                $query->execute();
                while ($query->fetch(PDO::FETCH_ASSOC)){
                    return 1;
                }
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
            return 0;
        }

        public function cambiarContraseniaCandidato($identificacion, $contrasenia)
        {
            $sql = "UPDATE candidato SET contrasenia = ".$contrasenia." WHERE numeroIdentificacion = '".$identificacion."' AND estado = 1";
           
            try{
                $query = $this->db->prepare($sql);
                $query->execute();
                return true;
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
            return false;
        }

        public function buscarCandidatoNombreNumero($Numero){
            $sql = "SELECT * FROM candidato WHERE numeroIdentificacion = '".$Numero."' AND estado = 1";
            $resultado = array();
            try{
                $query = $this->db->prepare($sql);
                $query->execute();
                while ($registro =  $query->fetch(PDO::FETCH_ASSOC)) {
                    $resultado[] = $registro;
                }
            } catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $resultado;
        }




        ////////////////////////////// TEST ///////////////////////////


        public function insertTest( Test $test)
        {
            $sql = "INSERT INTO registro(pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6, pregunta7, pregunta8, pregunta9, pregunta10, 
            pregunta11, pregunta12, pregunta13, pregunta14, pregunta15, pregunta16, pregunta17, pregunta18, pregunta19, pregunta20,idCandidato, nitEmpresa, estado)
            VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
      
            try{
                $query = $this->db->prepare($sql);
                $datos = array($test->getRespuesta1(),$test->getRespuesta2(),$test->getRespuesta3(),$test->getRespuesta4(),$test->getRespuesta5(),$test->getRespuesta6(),$test->getRespuesta7(),$test->getRespuesta8(), $test->getRespuesta9(), $test->getRespuesta10(),
                $test->getRespuesta11(),$test->getRespuesta12(),$test->getRespuesta13(),$test->getRespuesta14(),$test->getRespuesta15(),$test->getRespuesta16(),$test->getRespuesta17(),$test->getRespuesta18(), $test->getRespuesta19(), $test->getRespuesta20(), $test->getIdCandidato(), $test->getNitEmpresa(), $test->getEstado() );
                $query->execute($datos);
                return true;
            } catch (Exception $e){
                echo "EL error es: ".$e->getMessage();
            }
            return false;
        }

    
        public function mostrarPostulados($nit){
            $sql = "SELECT candidato.numeroIdentificacion, candidato.nombre, registro.id
            FROM registro
            INNER JOIN candidato
            ON registro.idCandidato = candidato.numeroIdentificacion
            AND registro.nitEmpresa = '".$nit."'
            AND registro.estado = 1";

            $resultado = array();
            try{
                $query = $this->db->prepare($sql);
                $query->execute();
                while ($registro =  $query->fetch(PDO::FETCH_ASSOC)) {
                    $resultado[] = $registro;
                }
            } catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $resultado;
        }

        public function mostaraRespuestas($nit, $identificacion){
            $sql = "SELECT * FROM registro WHERE idCandidato = '".$identificacion."' AND nitEmpresa = '".$nit."'";

            $resultado = array();
            try{
                $query = $this->db->prepare($sql);
                $query->execute();
                $registro =  $query->fetch(PDO::FETCH_ASSOC); 
                $resultado[] = $registro;
            } catch (Exception $ew){
                echo "El error es: ".$ew->getMessage();
            }
            return $resultado;
        }
        

        public function deleteTest($id)
        {
            $sql ="UPDATE registro SET estado = 0 WHERE  id = '".$id."'";

            try{
                $query = $this->db->prepare($sql);
                $query->execute();
                return true;
            } catch (Exception $e){
                echo "El error es: ".$e->getMessage();
            }
            return false;
        }
        

        public function setNumero($numero)
        {
            $this->numero = $numero;
        }
        

        public function getNumero()
        {
            return $this->numero;
        }

        
    }

?>