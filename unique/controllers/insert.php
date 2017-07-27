<?php
    $title = $_POST['nome'];
    $content = $_POST['email'];
    $author = $_POST['mensagem'];
    echo $title;
?>
<a href='?controller=posts&action=enviardados&title=<?php echo $title; ?>&content=<?php echo $content; ?>&author=<?php echo $author; ?>'>Ver conteúdo</a>
