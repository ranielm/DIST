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
    
    public static function inserir() {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $title = "titulo"; 
      $content = "conteudo"; 
      $author = "autor"; 
      $req = $db->query("INSERT INTO posts (title, content, author) VALUES ('$title', '$content', '$author')");
      // the query was prepared, now we replace :id with our actual $id value
      //$req->execute(array('id' => $id));
      //$post = $req->fetch();
      //return new Post($post['id'], $post['title'], $post['content'], $post['author']);
    }
  }
?>