<!DOCTYPE html>
<html>
<body>

<form action="http://192.168.0.102/unique/controllers/insert_controller.php" method="post">
    <fieldset>
    <legend>Digite as informações da postagem</legend>
    Título:<br>
    <input type="text" id="title" name="title" />
    Conteúdo:<br>
    <textarea id="content" name="content"></textarea>
    Autor:<br>
    <input type="author" id="author" name="author" />
    <br><br>
    <div class="button">
        <button type="submit">Inserir postagem</button>
    </fieldset>
</form>

</body>
</html>