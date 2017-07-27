<p>Digite as informações da postagem</p>

<form action="http://192.168.0.102/unique/controllers/insert.php" method="post">
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
        <textarea id="mensagem" name="mensagem"></textarea>
    </div>
    
    <div class="button">
        <button type="submit">Enviar sua mensagem</button>
    </div>
</form>