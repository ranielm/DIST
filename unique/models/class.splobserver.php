<?php
class Post implements \SplSubject{
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $title;
    public $content;
    public $author;
    public $observers = array();
    public $lida;
    /// curtidas
    public function __construct($id, $title, $content, $author) { // receber numero de curtidas do banco
      $this->id      = $id;
      $this->title   = $title;
      $this->content = $content;
      $this->author  = $author;/// setar o estado como bronze, set_curtidas, 
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
    public function __construct(){};
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

$post = new Post('Teste', 'Conteudo', 'Diego');

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
$post->breakOutNews('Teste breakout');

?>
