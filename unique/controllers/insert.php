<?php
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
?>
<a href='?controller=posts&action=enviardados&title=<?php echo $title; ?>&content=<?php echo $content; ?>&author=<?php echo $author; ?>'>Ver conteúdo</a>
