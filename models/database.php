<?php 


    class Conexion
    {

        private $conexion;

        public function __construct(){

        }

        public function conectar(){
            $url ="mysql:host=localhost;dbname=proyecto";
            try{
                $this->conexion = new PDO($url, "root", "");
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } 
            catch(PDOException  $e){
                echo "El error es: "+$e->getMessage();
            }
            return $this->conexion;
        }

    }

?>