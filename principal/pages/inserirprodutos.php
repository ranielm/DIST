<?php

$nome = $_POST['nome'];
$quantidadetotal = $_POST['quantidadetotal'];
$alertadeexpiracao = $_POST['alertadeexpiracao'];
$datadeexpiracao = $_POST['datadeexpiracao'];
$ehperecivel = $_POST['ehperecivel'];
$fabricante = $_POST['fabricante'];
$estoqueminimo = $_POST['estoqueminimo'];
$setor = $_POST['setor'];
$tipo = $_POST['tipo'];
$id = $_POST['id'];

//EXIBE O ARRAY COM OS DADOS PASSADOS
//var_dump($_POST);

switch ($setor) {
    case "principal":
    	$setor = 1;
    	//echo "<script>alert('O setor é o principal.');</script>";      
        break;
    case "escritorio":
    	$setor = 2;
    	//echo "<script>alert('O setor é o escritório.');</script>";      
    case "esportes":
    	$setor = 3;
    	//echo "<script>alert('O setor é o de esportes.');</script>";      
        break;
 	case "alimenticio":
    	$setor = 4; 	
    	//echo "<script>alert('O setor é o alimentício.');</script>";      
           break;
}

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
} 

else {

	/*$buscanome = "SELECT * FROM produtos WHERE nome = '$nome'";
	$resultado = $mysqli->query($buscanome);*/

	if(isset($id))
    {
    	/*$row = $resultado->fetch_assoc();
    	$total1 = $row["quantidadetotal"] + $quantidadetotal; 
    	$total2 = $row["insercoestotais"] + $quantidadetotal; 
    	$total3 = $row["insercoesnodia"] + $quantidadetotal; 
		$id = $row["id"];*/

    	$atualiza = "UPDATE produtos SET nome = '$nome',
                            quantidadetotal = '$quantidadetotal',
                            alertadeexpiracao = '$alertadeexpiracao',
                            datadeexpiracao = '$datadeexpiracao',
                            ehperecivel = '$ehperecivel',
                            fabricante = '$fabricante',
                            estoqueminimo = '$estoqueminimo',
                            setor = '$setor',
                            tipo = '$tipo'
                     WHERE id = $id";

		if($mysqli->query($atualiza) === TRUE)
    	{
			echo "<script>alert('$nome atualizado.');window.location='http://10.15.109.203/principal/pages/exibirprodutos.php';</script>";      
		}
    	//echo $row["id"];
		//echo "<script>alert('Nome do produto já cadastrado.');window.location='http://10.15.109.203/principal/pages/cadastrarprodutos.php';</script>";      
		//$sql = "UPDATE produtos SET lastname='Doe' WHERE id=2";

	} else {
    	$sql = "INSERT INTO produtos (nome, quantidadetotal, alertadeexpiracao, datadeexpiracao, ehperecivel, fabricante, estoqueminimo, setor, tipo, descricao, lote, insercoestotais, remocoestotais, insercoesnodia, remocoesnodia, emprestado) VALUES ('$nome', '$quantidadetotal', '$alertadeexpiracao', '$datadeexpiracao', '$ehperecivel', '$fabricante', '$estoqueminimo', '$setor', '$tipo', '$descricao', '1', '1', '0', '1', '0', '0')";
    	if($mysqli->query($sql) === TRUE)
    	{
			echo "<script>alert('Produto cadastrado.');window.location='http://10.15.109.203/principal/pages/exibirprodutos.php';</script>";      
		} else {
            echo "<script>alert('Erro no cadastro do produto.');window.location='http://10.15.109.203/principal/pages/cadastrarprodutos.php';</script>";
        }
    }    
}
?>