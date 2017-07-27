<p>Digite as informações da postagem</p>

<form action="controllers/posts_controller.php" method="post">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" />
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" />
    </div>
    <div>
        <label for="msg">Mensagem:</label>
        <textarea id="msg" name="mensagem"></textarea>
    </div>
    
    <div class="button">
        <button type="submit">Enviar sua mensagem</button>
    </div>
</form>