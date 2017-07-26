<?php

class UsuarioPessoa extends Usuario{
    private $idade;             //integer
    private $profissao;         //string
    private $maxPostagens = 5;  //integer
    private $lembrete;          //string
    
    public function __construct($int_idade, $string_profissao){
        $this->idade =  $int_idade;
        $this->profissao = $string_profissao;
    }
    
    public function adicionarLembrete($string_lembrete, $string_data, $string_horario){
        $this->lembrete = $string_lembrete . " em " . $string_data. " - " . $string_horario;
    }
    
    public function setMaxPostagens($int_max){
        $this->maxPostagens = $int_max;
    }
    
    /****GETTERS****/
    public function getIdade(){
        return $this->idade;
    }
    
    public function getProfissao(){
        return $this->profissao;
    }
    
    public function getMaxPostagens(){
        return $this->maxPostagens;
    }
    
    public function getLembrete(){
        return $this->lembrete;
    }
}
