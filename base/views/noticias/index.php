<p>Here is a list of all posts:</p>

<?php foreach($noticias as $noticias) { ?>
  <p>
    <?php echo $noticias->autor; ?>
    <a href='?controller=noticias&action=show&id=<?php echo $noticias->id; ?>'>Ver conteudo</a>
  </p>
<?php } ?>