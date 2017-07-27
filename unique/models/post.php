<?php
class Post {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $title;
    public $content;
    public $author;

    public function __construct($id, $title, $content, $author) {
      $this->id      = $id;
      $this->title   = $title;
      $this->content = $content;
      $this->author  = $author;
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

    //MEMENTO
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
  }
?>