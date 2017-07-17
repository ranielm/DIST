<?Php
require "banco.php"; // connection to database 
	
$originais = "SELECT * FROM produtos";
$data = date('Y/m/d');
foreach ($dbo->query($originais) as $row) 
{
    $nome = $row['nome'];
    $quantidadetotal = $row['quantidadetotal'];
    $datadeexpiracao = $row['datadeexpiracao'];
    $setor = $row['setor'];
    $insercoestotais = $row['insercoestotais'];
    $remocoestotais = $row['remocoestotais'];
    $insercoesnodia = $row['insercoesnodia'];
    $remocoesnodia = $row['remocoesnodia'];

    $insere = "INSERT INTO relatorios (nome, quantidadetotal, datadeexpiracao, setor, insercoestotais, 
    remocoestotais, insercoesnodia, remocoesnodia, datadodia) VALUES ('$nome', '$quantidadetotal', '$datadeexpiracao', 
    '$setor', '$insercoestotais', '$remocoestotais', '$insercoesnodia', '$remocoesnodia', '$data')";

    $dbo->query($insere);
}

//A PARTIR DAQUI ZERAR OS CAMPOS INSERCOESNODIA, REMOCOESNODIA

//$zerar = "UPDATE produtos SET insercoesnodia = 0, remocoesnodia = 0";