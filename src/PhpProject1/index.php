<?php
    class Usuario{
        private $id; //integer
        private $nome; //string
        private $publicacoes = array(); // array de Postagens
        private $seguidores = array(); // array de Usuarios
        private $seguindo = array(); // array de Usuarios
        
        public function __construct($array_seguidores,$array_seguindo,$array_publicacoes) {
            $this->publicacoes = $array_publicacoes;
            $this->seguidores = $array_seguidores;
            $this->seguindo = $array_seguindo;
        }
        
        /************SEGUIDOR***********/
        public function registrarSeguidores($usuario){
            array_push($this->$seguidores, $usuario);
        }
        public function removerSeguidor($usuario){
            foreach ($this->$seguidores as $u) {
                if($u = $usuario){
                    unset($u);
                }
            }
        }
        /*******************************/
        
        /************SEGUINDO************/
        public function registrarSeguindo($usuario){
            array_push($this->$seguindo, $usuario);
        }
        public function removerSeguindo($usuario){
            foreach ($this->$seguindo as $u) {
                if($u = $usuario){
                    unset($u);
                }
            }
        }        
        /********************************/
           
        /***********PUBLICACOES**********/
        public function registrarPublicacao($postagem){
            array_push($this->$publicacoes, $postagem);
        }
        public function removerPublicacao($postagem){
            foreach ($this->$publicacoes as $p) {
                if($p = $postagem){
                    unset($p);
                }
            }
        }   
        /********************************/
        
        
        
        
        
        /*
        public function notificarSeguidor(){
            foreach($this->seguidores as $se) {
                
            }
        }
        public function logout(){
        }
        */
    }
?>
