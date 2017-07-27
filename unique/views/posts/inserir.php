<p>Digite as informações da postagem</p>

<form action="http://192.168.0.102/unique/controllers/insert_controller.php" method="post">
    <div>
        <label for="title">Título:    </label>
        <input type="text" id="title" name="title" />
    </div>
    <div>
        <label for="content">Conteúdo:</label>
        <textarea id="content" name="content"></textarea>
    </div>
    <div>
        <label for="author">Autor:    </label>
        <input type="author" id="author" name="author" />
    </div>
    
    <div class="button">
        <button type="submit">Inserir postagem</button>
    </div>
</form>