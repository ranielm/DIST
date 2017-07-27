<p>Lista de todos os usuários:</p>

<?php foreach($users as $user) { ?>
  <p>
    <?php echo $user->name; ?>
    <a href='?controller=users&action=show&id=<?php echo $user->id; ?>'>Ver ficha</a>
  </p>
<?php } ?>