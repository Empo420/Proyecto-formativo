<?php 

class Candidato {

    private $numeroIdentificacion;
    private $nombre; 
    private $direccion; 
    private $telefono; 
    private $cantidadHijos;
    private $genero; 
    private $estadoCivil; 
    private $cantidadMascotas; 
    private $nivelEscolaridad;  
    private $contrasenia;
    private $estado;

    public function __construct($numeroIdentificacion, $nombre, $direccion, $telefono, $cantidadHijos, $genero, $estadoCivil, $cantidadMascotas, $nivelEscolaridad, $contrasenia){
        $this->numeroIdentificacion = $numeroIdentificacion;
        $this->nombre = $nombre;
        $this->direccion=$direccion;
        $this->telefono = $telefono;
        $this->cantidadHijos=$cantidadHijos;
        $this->genero=$genero;
        $this->estadoCivil=$estadoCivil;
        $this->cantidadMascotas=$cantidadMascotas;
        $this->nivelEscolaridad=$nivelEscolaridad;
        $this->contrasenia=$contrasenia;
        $this->estado = 1;
    }


    public function getNumeroIdentificacion(){
        return $this->numeroIdentificacion;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getDireccion(){
        return $this->direccion;
    }
    
    public function getTelefono(){
        return $this->telefono;
    }

    public function getCantidadHijos(){
        return $this->cantidadHijos;
    }
    

    public function getGenero(){
        return $this->genero;
    }

    public function getEstadoCivil(){
        return $this->estadoCivil;
    }

    public function getCantidadMascotas(){
        return $this->cantidadMascotas;
    }
    

    public function getNivelEscolaridad(){
        return $this->nivelEscolaridad;
    }


    public function getContrasenia(){
        return $this->contrasenia;
    }

    public function getEstado(){
        return $this->estado;
    }





}



?>