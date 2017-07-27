<p>Digite as informações da postagem</p>

<form action="http://192.168.0.102/unique/controllers/insert_controller.php" method="post">
    <div>
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" />
    </div>
    <div>
        <label for="content">Conteúdo:</label>
        <input type="content" id="content" name="content" />
    </div>
    <div>
        <label for="author">Autor:</label>
        <textarea id="author" name="author"></textarea>
    </div>
    
    <div class="button">
        <button type="submit">Inserir postagem</button>
    </div>
</form>