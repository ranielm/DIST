<p>Lista de todas as notícias:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->title; ?>
    <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Ver conteúdo</a>
  </p>
<?php } ?>

<footer>
<a href='?controller=posts&action=voltarmemento'>Desfazer remoção</a>
<p>
</footer>