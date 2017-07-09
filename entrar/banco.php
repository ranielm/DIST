<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$quebra = chr(13).chr(10);
//DEFINE OS PARAMETROS PARA A CONEXAO COM O BANCO DE DADOS
$servername = "localhost";
$username = "id2007186_root";
$password = "banco";
$dbname = "id2007186_dist";

// CRIA A CONEXÃO
$mysqli = new mysqli($servername, $username, $password, $dbname);
// CHECA A CONEXAO
if ($mysqli->connect_error) {
    echo "<script>alert('Falha ao conectar ao banco.');</script>";      
} 
else{
    $result = $mysqli->query("SELECT id, primeironome, nivel FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'");
    if($result->num_rows == 1)
    {
        if (!isset($_SESSION)) 
        {
            session_start();
        }
        while($row=mysqli_fetch_array($result))
        {
            $_SESSION['UsuarioID'] = $row['id'];
            $_SESSION['UsuarioNome'] = $row['primeironome'];
            $_SESSION['UsuarioNivel'] = $row['nivel'];
            //print_r($_SESSION);
            $nivel = $row['nivel'];
            if ($nivel == 1) 
            {
                header("Location: http://localhost/dist-2.0/principal/pages/estagiario.php");
            }
            else if ($nivel == 2)
            {
                header("Location: http://localhost/dist-2.0/principal/pages/usuariocomum.php");
            }
            else if ($nivel == 3)
            {
                header("Location: http://dist.000webhostapp.com/principal/pages/index.php");
            }           
        }
    }    
    else if($result->num_rows != 1)
    {
        echo "<script>alert('Usuário e/ou senha inválidos.');window.location="index2.htm";</script>";      
        header("Location: http://dist.000webhostapp.com");
    }
}
?>