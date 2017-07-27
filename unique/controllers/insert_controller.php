<?php echo $title = $_POST['title']; ?>
<p><?php echo $content = $_POST['content']; ?>
<p><?php echo $author = $_POST['$author']; ?>
<p>
<p><a href='/unique/?controller=posts&action=enviardados&title=<?php echo $title = $_POST['title']; ?>&content=<?php echo $content = $_POST['content']; ?>&author=<?php echo $author = $_POST['author']; ?>'>Confirmar</a>