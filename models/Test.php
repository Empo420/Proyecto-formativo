<?php 

class Test {
    private $Respuestas=array();
    private $respuesta1;
    private $respuesta2; 
    private $respuesta3; 
    private $respuesta4; 
    private $respuesta5;
    private $respuesta6; 
    private $respuesta7; 
    private $respuesta8; 
    private $respuesta9;  
    private $respuesta10;
    private $respuesta11;
    private $respuesta12; 
    private $respuesta13; 
    private $respuesta14; 
    private $respuesta15;
    private $respuesta16; 
    private $respuesta17; 
    private $respuesta18; 
    private $respuesta19;  
    private $respuesta20;
    private $idCandidato;
    private $nitEmpresa;
    private $estado;
    

    public function __construct($respuesta1, $respuesta2, $respuesta3, $respuesta4, $respuesta5, $respuesta6, $respuesta7, $respuesta8, $respuesta9, $respuesta10,
    $respuesta11, $respuesta12, $respuesta13, $respuesta14, $respuesta15, $respuesta16, $respuesta17, $respuesta18, $respuesta19, $respuesta20, $idCandidato, $nitEmpresa){
        $this->respuesta1 = $respuesta1;
        $this->respuesta2 = $respuesta2;
        $this->respuesta3 = $respuesta3;
        $this->respuesta4 = $respuesta4;
        $this->respuesta5 = $respuesta5;
        $this->respuesta6 = $respuesta6;
        $this->respuesta7 = $respuesta7;
        $this->respuesta8 = $respuesta8;
        $this->respuesta9 = $respuesta9;
        $this->respuesta10= $respuesta10;
        $this->respuesta11 = $respuesta11;
        $this->respuesta12 = $respuesta12;
        $this->respuesta13 = $respuesta13;
        $this->respuesta14 = $respuesta14;
        $this->respuesta15 = $respuesta15;
        $this->respuesta16 = $respuesta16;
        $this->respuesta17 = $respuesta17;
        $this->respuesta18 = $respuesta18;
        $this->respuesta19 = $respuesta19;
        $this->respuesta20 = $respuesta20;
        $this->idCandidato = $idCandidato;
        $this->nitEmpresa = $nitEmpresa;
        $this->estado = 1;
    }

    public function getRespuesta1(){
        return $this->respuesta1;
    }

    public function getRespuesta2(){
        return $this->respuesta2;
    }

    public function getRespuesta3(){
        return $this->respuesta3;
    }
    
    public function getRespuesta4(){
        return $this->respuesta4;
    }

    public function getRespuesta5(){
        return $this->respuesta5;
    }
    

    public function getRespuesta6(){
        return $this->respuesta6;
    }

    public function getRespuesta7(){
        return $this->respuesta7;
    }

    public function getRespuesta8(){
        return $this->respuesta8;
    }
    

    public function getRespuesta9(){
        return $this->respuesta9;
    }


    public function getRespuesta10(){
        return $this->respuesta10;
    }

    public function getRespuesta11(){
        return $this->respuesta11;
    }

    public function getRespuesta12(){
        return $this->respuesta12;
    }

    public function getRespuesta13(){
        return $this->respuesta13;
    }
    
    public function getRespuesta14(){
        return $this->respuesta14;
    }

    public function getRespuesta15(){
        return $this->respuesta15;
    }
    

    public function getRespuesta16(){
        return $this->respuesta16;
    }

    public function getRespuesta17(){
        return $this->respuesta17;
    }

    public function getRespuesta18(){
        return $this->respuesta18;
    }
    

    public function getRespuesta19(){
        return $this->respuesta19;
    }


    public function getRespuesta20(){
        return $this->respuesta20;
    }

    public function getIdCandidato(){
        return $this->idCandidato;
    }


    public function getNitEmpresa(){
        return $this->nitEmpresa;
    }
    

    
    public function getEstado(){
        return $this->estado;
    }



}



?>