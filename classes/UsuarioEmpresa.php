<?php

class UsuarioEmpresa extends Usuario{
    private $area;          //string
    private $proximo_evento;//string
    
    public function __construct($string_area){
        $this->area =  $string_area;
    }
    
    public function adicionarEvento($string_titulo, $string_data, $string_horario){
        $this->proximo_evento = $string_titulo . " em " . $string_data . " - " . $string_horario;
    }

    public function getArea(){
        return $this->area;
    }
    
    public function getProximoEvento(){
        return $this->proximo_evento;
    }
    
    public function buscaInteressesComuns(){
        $usuariosInteresseComum = array();
        foreach (parent::$seguindo as $s){
            if($s == $this->area){
                array_push($usuariosInteresseComum, $s);
            }
        }
        return $usuariosInteresseComum;
    }
    
}
