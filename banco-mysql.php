<?php
$servername = "localhost";
$username = "id2007186_root";
$password = "banco";
$dbname = "id2007186_dist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} 

// sql to create table
$usuarios = "CREATE TABLE usuarios (
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
)";

if ($conn->query($usuarios) === TRUE) {
    echo "A tabela usuários foi criada com sucesso.\n";
} else {
    echo "Erro ao criar a tabela usuários: " . $conn->error;
}

$setores = "CREATE TABLE setores (
(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nomesetor VARCHAR(30) NOT NULL
reg_date TIMESTAMP
)";

if ($conn->query($setores) === TRUE) {
    echo "A tabela setores foi criada com sucesso.\n";
} else {
    echo "Erro ao criar a tabela setores " . $conn->error;
}

$insereusetores = "INSERT INTO setores (nomesetor)
VALUES ('Principal')";

if ($conn->query($insereusetores) === TRUE) {
    echo "Nova gravação persistida com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$produtos = "CREATE TABLE produtos (
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
)";

if ($conn->query($produtos) === TRUE) {
    echo "A tabela produtos foi criada com sucesso.";
} else {
    echo "Erro ao criar a tabela produtos: " . $conn->error;
}

$insereprodutos = "INSERT INTO produtos (nomeproduto, qtdadeestoque, alertaexpiracao, dataexpiracao, perecivel, fabricante, estoqueminimo, setor, tipo)
VALUES ('Caneta', 5, 7, 0, 'bic', 30, 1, 'canetas')";

if ($conn->query($insereprodutos) === TRUE) {
    echo "Nova gravação persistida com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>