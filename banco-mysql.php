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
    echo "A tabela usuários foi criada com sucesso.";
} else {
    echo "Erro ao criar a tabela usuários: " . $conn->error;
}

$insereusuarios = "INSERT INTO usuarios (primeironome, segundonome, email, tipopermissao, cargo, phone, nomeusuario, senha)
VALUES ('Raniel', 'Mendonça', 'ranieel@outlook.com', 0, 'administrador', '+55034992322116', 'raniel','102030')";

if ($conn->query($insereusuarios) === TRUE) {
    echo "Nova gravação persistida com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
