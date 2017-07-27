<?php
class Post implements \SplSubject{
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $title;
    public $content;
    public $author;
    public $observers = array();
    public $estado;
    public $curtidas;
    
    public function __construct($id, $title, $content, $author, $curtidas, $estado) {
      $this->id      = $id;
      $this->title   = $title;
      $this->content = $content;
      $this->author  = $author;
      $this->curtidas  = $curtidas;
      $this->estado = new StateBronze(); 
    }

    public function incrementaCurtidas(){
            $this->estado.incrementaCurtidas();
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM posts');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['id'], $post['title'], $post['content'], $post['author']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['id'], $post['title'], $post['content'], $post['author']);
    }
    
    public static function inserir($title, $content, $author) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      //$title = "titulo"; 
      //$content = "conteudo"; 
      //$author = "autor"; 
      $req = $db->query("INSERT INTO posts (title, content, author) VALUES ('$title', '$content', '$author')");
      // the query was prepared, now we replace :id with our actual $id value
      //$req->execute(array('id' => $id));
      //$post = $req->fetch();
      //return new Post($post['id'], $post['title'], $post['content'], $post['author']);      
      /*session_start();
      $_SESSION['title'] = $title;
      $_SESSION['content'] = $content;
      $_SESSION['author'] = $author;
      $memento = new Caretaker;
      $memento->addMemento();*/
      //$req = $db->query("DELETE FROM posts WHERE id = '$id'");            
      return;
    }

    public static function excluirpost($title, $content, $author) {
      //$_SESSION['id'] = $id;
      //$id = intval($id);
      $db = Db::getInstance();
      //$req = $db->query("INSERT INTO posts (title, content, author) VALUES ('$title', '$content', '$author')");    
      session_start();
      $_SESSION['title'] = $title;
      $_SESSION['content'] = $content;
      $_SESSION['author'] = $author;
      $memento = new Caretaker;
      $memento->addMemento();
      //$delete = "'";
      //$db->query($delete);
      return;
    }

    public static function voltarmemento() {
      $memento = new Caretaker;
      $memento->getMemento();
      return;
    }

  }

  //MEMENTO
  class Caretaker
  {
    private $title;
    private $content;
    private $author;
      
    public function addMemento($id)
    {
      $title = $_SESSION['title'];
      $content = $_SESSION['content'];
      $author = $_SESSION['author'];
      //$id = $_SESSION['id'];
      //$id = intval($id);
      $db = Db::getInstance();
      //$originais = "SELECT * FROM posts WHERE id = '$id'";
      /*foreach ($db->query($originais) as $row) 
      {
        $title = $row['title'];
        $content = $row['content'];
        $author = $row['author'];
      */
      $req = $db->query("INSERT INTO memento (title, content, author) VALUES ('$title', '$content', '$author')");
      $delete = $db->query("DELETE FROM posts WHERE title = '$title', content = '$content', author = '$author'");
     
      return;
    }
      
    public function getMemento()
    {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM memento');

      foreach ($db->query($req) as $row) 
      {
        $title = $row['title'];
        $content = $row['content'];
        $author = $row['author'];

        $insere = "INSERT INTO posts (title, content, author) VALUES ('$title', '$content', '$author')";
        $db->query($insere);

        $delete = "DELETE FROM memento";
        $db->query($delete);
      }
      return;      
    }

//OBSERVER 
    //add observer
    public function attach(\SplObserver $observer) {
        $this->observers[] = $observer;
    }

    //remove observer
    public function detach(\SplObserver $observer) {
        
        $key = array_search($observer,$this->observers, true);
        if($key){
            unset($this->observers[$key]);
        }
    }

    //set breakouts news
    public function breakOutNews($content) {
        $this->content = $content;
        $this->notify();
    }

    public function getContent() {
        return $this->content." ({$this->name})";
    }

    //notify observers(or some of them)
    public function notify() {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}

abstract class Comando{
    abstract protected function executar();
}

class NaoExibir extends Comando{
    private $post;
    private $nome;
    
    public function __construct($post,$nome){
        $this->post = $post;
        $this->nome = $nome;
    }
    public function executar(){
        $this->$post.detach($this->nome);
    }
}

class ControleRemoto{
    private $comando;
    public function __construct(){}
    public function setComando($comando){
        $this->comando = $comando;
    }
    public function pressionarBotao(){
        $this->comando.executar();
    }
}
/*
COMO DEVE SER UTILIZADO O PADRAO COMMAND > 

$controle_remoto = new ControleRemoto();
$post = new Post(...);
$comando_naoexibir = new NaoExibir($post,'nome_do_usuario');
$controle->setComando($comando_naoexibir);

PRESSIONAR O BOTAO NO HTML DA VIEW, EXECUTA O SEGUINTE>
$controle->pressionarBotao();

*/


class Reader implements SplObserver{
    
    private $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function update(\SplSubject $subject) {
        echo $this->name.' is reading breakout news <b>'.$subject->getContent().'</b><br>';
    }

    /*public function update(\SplSubject $subject) {
        $subject->getContent();
        
    }*/
}

$post = new Post('Create');

$allen = new Reader('Allen');
$jim = new Reader('Jim');
$linda = new Reader('Linda');

//add reader
$post->attach($allen);
$post->attach($jim);
$post->attach($linda);

//remove reader
$post->detach($linda);

//set break outs
$post->breakOutNews('Novidades Unique');

  }


    abstract class State{
        public $post;
        public $limiteSuperior;
        public $limiteInferior;
        
        public function __construct($post) {
            $this->post = $post;
            setLimites(); 
        }
        
        public abstract function setLimites();
        
        public function incrementaCurtidas(){
            verificarAlteracaoDeEstado();  
        }
        
        public abstract function verificarAlteracaoDeEstado();
    }


class StateBronze implements State{
        
        public function __construct($post) {
            super($post);
        }
        
        public function setLimites(){
            $this->limiteInferior = 0;
            $this->limiteSuperior = 30;
        }
        
        //curtidas = curtidas do post.
        public function incrementaCurtidas(){
            curtidas ++;//incremento das curtidas do post. 
            verificarAlteracaoEstado();
            //chow com cor vermelha
        }
        
        public function verificarAlteracaoEstado(){
            if(curtidas > $this->limiteSuperior)
                $this->estado = new StatePrata($this->post);   
        }
    }


class StatePrata implements State{
        
        public function __construct($post) {
            super($post);
        }
        
        public function setLimites(){
            $this->limiteInferior = 30;
            $this->limiteSuperior = 80;
        }
        
        //curtidas = curtidas do post.
        public function incrementaCurtidas(){
            curtidas ++;//incremento das curtidas do post. 
            verificarAlteracaoEstado();
            //show com cor amarela
        }
        
        public function verificarAlteracaoEstado(){
            if(curtidas > $this->limiteSuperior)
                $this->estado = new StateOuro($this->post);
            else
                if(curtidas < $this->limiteInferior) {
                    $this->estado = new StateBronze ($this->post);
            }   
        }
    }

        class StateOuro implements State
        {
            
            public function __construct($post) {
                super($post);
            }
            
            public function setLimites(){
                $this->limiteInferior = 80;
                $this->limiteSuperior = 10000;
            }
            
            //curtidas = curtidas do post.
            public function incrementaCurtidas(){
                curtidas ++;//incremento das curtidas do post. 
                verificarAlteracaoEstado();
                //show com cor verde
            }
            
            public function verificarAlteracaoEstado(){
                if(curtidas < $this->limiteInferior)
                    $this->estado = new StatePrata($this->post);
            }
        }   
    

?>