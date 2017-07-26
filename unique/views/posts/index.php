<p>Lista de todas as notícias:</p>

<a href='?controller=posts&action=enviardados'>Enviar</a>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->title; ?>
    <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Ver conteúdo</a>
  </p>
<?php } ?>