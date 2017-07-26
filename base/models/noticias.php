<?php
  class Noticias {
    // we define 3 attributes
    // they are public so that we can access them using $noticias->author directly
    public $id;
    public $autor;
    public $conteudo;

    public function __construct($id, $autor, $conteudo) {
      $this->id      = $id;
      $this->autor  = $autor;
      $this->conteudo = $conteudo;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM noticias');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $noticias) {
        $list[] = new Post($noticias['id'], $noticias['autor'], $noticias['conteudo']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM noticias WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $noticias = $req->fetch();

      return new Post($noticias['id'], $noticias['autor'], $noticias['conteudo']);
    }
  }
?>