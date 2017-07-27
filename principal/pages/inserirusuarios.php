<?php

$usuario = $_POST['username'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['mail'];
$role = $_POST['role'];
$phone = $_POST['phone'];
$usertype = $_POST['usertype'];
$senha = $_POST['password'];
$conf_senha = $_POST['password_confirm'];
$ativo = $_POST['ativo'];
$id = $_POST['idusu'];

//EXIBE O ARRAY COM OS DADOS PASSADOS
//var_dump($_POST);


//DEFINE OS PARAMETROS PARA A CONEXAO COM O BANCO DE DADOS
$servername = "localhost";
$username = "root";
$password = "banco";
$dbname = "dist";

// CRIA A CONEXÃO
$mysqli = new mysqli($servername, $username, $password, $dbname);
// CHECA A CONEXAO
if ($mysqli->connect_error) 
{

    echo "<script>alert('Falha ao conectar ao banco.');</script>";

} else {
    $buscausu = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $buscamail = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultadousu = $mysqli->query($buscausu);
    $resultadomail = $mysqli->query($buscamail);
    $row1 = $resultadousu->fetch_assoc();
    $row2 = $resultadomail->fetch_assoc();
    $erro = 0;


    if($resultadousu->num_rows > 0) {
        echo "<script>alert('Usuário $usuario já existe.');window.location='http://10.15.109.203/principal/pages/cadastrarusuarios.php';</script>";
        $erro = 1;
    } else if($resultadomail->num_rows > 0) {
        echo "<script>alert('Email $email já existe.');window.location='http://10.15.109.203/principal/pages/cadastrarusuarios.php';</script>";
        $erro = 1;
    } else if($senha != $conf_senha) {
         echo "<script>alert('Senhas não conferem.');window.location='http://10.15.109.203/principal/pages/cadastrarusuarios.php';</script>";
        $erro = 1;
    }

	//print_r($resultado);
    if(isset($id) && $erro == 0)
    {
        /*$buscanome = "SELECT * FROM usuarios WHERE id = '$idusu'";
        $resultado = $mysqli->query($buscanome);
    	$row = $resultado->fetch_assoc();
    	$total1 = $row["quantidadetotal"] + $quantidadetotal; 
    	$total2 = $row["insercoestotais"] + $quantidadetotal; 
    	$total3 = $row["insercoesnodia"] + $quantidadetotal; 
      $id = $row["id"];*/

      $atualiza = "UPDATE usuarios SET usuario = $usuario, primeironome = $fname, segundonome = $lname, 
      senha = $senha, email = $email, nivel = $usertype, cargo = $role, telefone = $phone, ativo = $ativo
      WHERE id = $id";

      if($mysqli->query($atualiza) === TRUE)
      {
       echo "<script>alert('Usuário $usuario atualizado.');window.location='http://10.15.109.203/principal/pages/exibirusuarios.php';</script>";      
   }
    	//echo $row["id"];
		//echo "<script>alert('Nome do produto já cadastrado.');window.location='http://10.15.109.203/principal/pages/cadastrarprodutos.php';</script>";      
		//$sql = "UPDATE produtos SET lastname='Doe' WHERE id=2";

} else if ($erro == 0) {
    $sql = "INSERT INTO usuarios (usuario, primeironome, segundonome, senha, email, nivel, cargo, telefone, ativo) VALUES ('$usuario', '$fname', '$lname', '$senha', '$email', '$usertype', '$role', '$phone', '$ativo')";
 if($mysqli->query($sql) === TRUE)
 {
   echo "<script>alert('Usuário cadastrado.');window.location='http://10.15.109.203/principal/pages/exibirusuarios.php';</script>";      
} else {
    /*echo "<script>alert('Erro no cadastro do usuário.');window.location='http://10.15.109.203/principal/pages/exibirusuarios.php';</script>"; */
}
}    
}
?>