<!DOCTYPE html>
<html>
<body>

<br>
<form action="http://10.15.109.203/unique/controllers/insert_controller.php" method="post">
    <fieldset>
    <legend>Digite as informações da postagem</legend>
    Título:<br>
    <input type="text" id="title" name="title" />
    <br>
    Conteúdo:<br>
    <textarea id="content" name="content"></textarea>
    <br>
    Autor:<br>
    <input type="author" id="author" name="author" />
    <br><br>
    <div class="button">
        <button type="submit">Inserir postagem</button>
    </fieldset>
</form>

</body>
</html>