<?php
$quebra = chr(13).chr(10);
//DEFINE OS PARAMETROS PARA A CONEXAO COM O BANCO DE DADOS
$servername = "localhost";
$username = "id2007186_root";
$password = "banco";
$dbname = "id2007186_dist";

// CRIA A CONEXÃO
$conn = new mysqli($servername, $username, $password, $dbname);
// CHECA A CONEXAO
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} 

// CRIA A TABELA USUARIOS
$insere = "CREATE TABLE usuarios (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
primeironome VARCHAR(30) NOT NULL,
segundonome VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL UNIQUE,
tipopermissao INT(1) NOT NULL,
cargo VARCHAR(30),
phone VARCHAR(15),
nomeusuario VARCHAR(30) UNIQUE,
senha VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
);

INSERT INTO usuarios (primeironome, segundonome, email, tipopermissao, cargo, phone, nomeusuario, senha)
VALUES ('Raniel', 'Mendonça', 'ranieel@outlook.com', 0, 'administrador', '+55034992322116', 'raniel','102030');

CREATE TABLE setores (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nomesetor VARCHAR(30) NOT NULL UNIQUE,
reg_date TIMESTAMP
);

INSERT INTO setores (nomesetor)
VALUES ('Principal');

CREATE TABLE produtos (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nomeproduto VARCHAR(60) NOT NULL,
qtdadeestoque INT,
alertaexpiracao INT,
dataexpiracao DATE,
perecivel BOOLEAN,
fabricante VARCHAR(30),
estoqueminimo INT,
setor INT(6) UNSIGNED,
tipo VARCHAR(30),
FOREIGN KEY (setor) REFERENCES setores (ID),
reg_date TIMESTAMP
);

INSERT INTO produtos (nomeproduto, qtdadeestoque, alertaexpiracao, dataexpiracao, perecivel, fabricante, estoqueminimo, setor, tipo)
VALUES ('Caneta', 5, 7, '10/07/17', 0, 'bic', 30, 1, 'canetas')";

if ($conn->query($insere) === TRUE) {
    echo "Sucesso."; 
} else {
    echo "Erro: " . $conn . "<br>" . $conn->error; 
}

//FECHA A CONEXAO COM O BANCO
$conn->close();
?>