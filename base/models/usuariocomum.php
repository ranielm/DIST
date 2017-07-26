<?php
  class UsuarioComum {
    // we define 3 attributes
    // they are public so that we can access them using $usuariocomum->author directly
    public $id;
    public $autor;
    public $conteudo;

    public function __construct($id, $autor, $conteudo) {
      $this->id      = $id;
      $this->author  = $autor;
      $this->content = $conteudo;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM noticias');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $usuariocomum) {
        $list[] = new Post($usuariocomum['id'], $usuariocomum['autor'], $usuariocomum['conteudo']);
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
      $usuariocomum = $req->fetch();

      return new Post($usuariocomum['id'], $usuariocomum['autor'], $usuariocomum['conteudo']);
    }
  }
?>