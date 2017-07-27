<p>Lista de todas as notícias:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->title; ?>
    <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Ver conteúdo</a>
    <a href='?controller=posts&action=excluirpost&title=<?php echo $post->title; ?>&content=<?php echo $post->content; ?>author=<?php echo $post->author; ?>'>Excluir</a>
    
  </p>
<?php } ?>

<footer>
<a href='?controller=posts&action=voltarmemento'>Desfazer mudanças</a>
<p>
</footer>