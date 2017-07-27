<DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <header>
      <a href='/unique'>Início</a>
      <a href='?controller=posts&action=index'>Notícias</a>
      <a href='?controller=posts&action=inserir'>Criar postagem</a>
    </header>

    <?php require_once('routes.php'); ?>

    <footer>
      <a href='?controller=posts&action=voltarmemento'>Desfazer remoção</a>
      Unique
    </footer>
  <body>
<html>