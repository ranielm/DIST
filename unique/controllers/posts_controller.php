<?php
  class PostsController {
    public function index() {
      // we store all the posts in a variable
      $posts = Post::all();
      require_once('views/posts/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $post = Post::find($_GET['id']);
      require_once('views/posts/show.php');
    }

    public function enviardados() {
      // we store all the posts in a variable
      if (!isset($_GET['title']))
        return call('pages', 'error');
      $title = $_GET['title'];
      $content = $_GET['content'];
      $author = $_GET['author'];
  
      $post = Post::inserir($title, $content, $author);
      $this->index();
    }

    public function inserir() {
      require_once('views/posts/inserir.php');
    }
  }
?>