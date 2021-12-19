<?php 

class Empresa {

    private $nit;
    private $nombre; 
    private $representante; 
    private $direccion; 
    private $telefono; 
    private $descripcion; 
    private $contrasenia;
    private $estado;

    public function __construct($nit, $nombre, $representante, $direccion, $telefono, $descripcion, $contrasenia){
        $this->nit = $nit;
        $this->nombre = $nombre;
        $this->representante = $representante;
        $this->direccion=$direccion;
        $this->telefono = $telefono;
        $this->descripcion=$descripcion;
        $this->contrasenia=$contrasenia;
        $this->estado = 1;
    }

    public function getNit(){
        return $this->nit;
    }

    public function getNombre(){
        return $this->nombre;
    }

  
    public function getRepresentante(){
        return $this->representante;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }
    
    public function getContrasenia(){
        return $this->contrasenia;
    }

 
    public function getEstado(){
        return $this->estado;
    }



}



?>