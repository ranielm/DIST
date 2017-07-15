/*
//POPULA A TABELA USUARIOS
$insereusuarios = "INSERT INTO usuarios (primeironome, segundonome, email, tipopermissao, cargo, phone, nomeusuario, senha)
VALUES ('Raniel', 'Mendonça', 'ranieel@outlook.com', 0, 'administrador', '+55034992322116', 'raniel','102030')";

/*VERIFCA SE A POPULACAO FOI FEITA COM SUCESSO
if ($conn->query($insereusuarios) === TRUE) {
    echo "Usuários persistida com sucesso."; 
} else {
	    echo "Erro: " . $conn . "<br>" . $conn->error; 
}*/

//VERIFICA SE A TABELA USUARIOS FOI CRIADA COM SUCESSO
if ($conn->query($usuarios) === TRUE) {
    echo "A tabela usuários foi criada com sucesso.\n"; 
} else {
    echo "Erro ao criar a tabela usuários: " . $conn->error; 
}

//CRIA A TABELA SETORES
$setores = "CREATE TABLE setores (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nomesetor VARCHAR(30) NOT NULL UNIQUE,
reg_date TIMESTAMP
);
";

//VERIFICA SE A TABELA SETORES FOI 	CRIADA COM SUCESSO
if ($conn->query($setores) === TRUE) {
    echo "A tabela setores foi criada com sucesso.\n"; 
} else {
    echo "Erro ao criar a tabela setores " . $conn->error; 
}

//POPULA A TABELA SETORES
$insereusetores = "INSERT INTO setores (nomesetor)
VALUES ('Principal')";

//VERIFCA SE A POPULACAO FOI FEITA COM SUCESSO
if ($conn->query($insereusetores) === TRUE) {
    echo "Setores persistida com sucesso."; 
} else {
	    echo "Erro: " . $conn . "<br>" . $conn->error; 
}

//CRIA A TABELA PRODUTOS
$insereprodutos = "CREATE TABLE produtos (
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

//VERIFICA SE A TABELA PRODUTOS FOI CRIADA COM SUCESSO
if ($conn->query($insereprodutos) === TRUE) {
    echo "A tabela produtos foi criada com sucesso."; 
} else {
    echo "Erro ao criar a tabela produtos: " . $conn->error; 
}

//POPULA A TABELA PRODUTOS
$insereprodutos = "INSERT INTO produtos (nomeproduto, qtdadeestoque, alertaexpiracao, dataexpiracao, perecivel, fabricante, estoqueminimo, setor, tipo)
VALUES ('Caneta', 5, 7, '10/07/17', 0, 'bic', 30, 1, 'canetas')";

//VERIFICA SE A TABELA PRODUTOS FOI POPULADA COM SUCESSO
if ($conn->query($insereprodutos) === TRUE) {
    echo "Sucesso."; 
} else {
    echo "Erro: " . $conn . "<br>" . $conn->error; 
}