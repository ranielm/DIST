<?php
//TESTA A CONEXÃO COM O BANCO
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = dist";
   $credentials = "user = postgres password=postgres";

   $db = pg_connect("$host $port $dbname $credentials");
   if(!$db) 
   {
      echo "Erro : Indisponível para abrir a conexão com o banco de dados\n";
   } else 
   {
      $nl=chr(10);
      $texto = "Conexão com o banco de dados aberta com sucesso";
      //echo nl2br($texto);
      echo $nl;
   }

//PEGA AS INFORMAÇÕES ENVIADAS PELO CADASTRAR USUÁRIO
$mail=$_REQUEST['mail']; 
$name=$_REQUEST['username']; 
$permissiontype=$_REQUEST['usertype']; 
$role=$_REQUEST['role']; 
$phone=$_REQUEST['phone']; 
$password=$_REQUEST['password']; 
$password_confirm=$_REQUEST['password_confirm']; 

//VERIFICA SE AS SENHAS DIGITADAS SÃO IGUAIS
if ($permissiontype == 1 OR $permissiontype == 0) 
{

  if ($password == $password_confirm) 
  {
  //VERIFICA SE JÁ EXISTE UM COM O MESMO USERNAME OU MESMO EMAIL
    $result=pg_query($db, "SELECT * FROM USERS WHERE NAME = '$name' OR MAIL = '$mail';");
    //SE EXISTE VAI PARA A PÁGINA JAEXISTE.PHP
    if (pg_num_rows($result)>=1)
    {
      $redirect = "jaexiste.php";
       header("location:$redirect");
    }  
    //SE NÃO EXISTE O USUÁRIO É CADASTRADO NO SISTEMA
    elseif (pg_num_rows($result)==0) {
      pg_query($db, "INSERT INTO USERS(MAIL, NAME, PERMISSIONTYPE, ROLE, PHONE, PASSWORD) 
                            VALUES('$mail', '$name', '$permissiontype', '$role', '$phone', '$password');");
      $redirect = "usuariocadastrado.php";
      header("location:$redirect");
    }
  }

  //SE AS SENHAS DIGITADAS NÃO FOREM IGUAIS VAI PARA A PÁGINA SENHASNCONFEREM.PHP
  elseif ($password != $password_confirm) {
    $redirect = "senhasnconferem.php";
      header("location:$redirect");
  }
}
elseif ($permissiontype != 1 AND $permissiontype != 0) 
{
  $redirect = "tipoinvalido.php";
      header("location:$redirect");
}
/*
$sql =<<<EOF
    CREATE TABLE SECTOR   
    (ID SERIAL PRIMARY KEY     NOT NULL,
    NAME              NAME      NOT NULL);
EOF;

$ret = pg_query($db, $sql);
    if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Tabela setor criada com sucesso\n";
   }
  // pg_close($db);

$sql =<<<EOF
  CREATE TABLE USERS
  (ID SERIAL PRIMARY KEY     NOT NULL,
  MAIL              TEXT     NOT NULL,
  NAME              TEXT     UNIQUE,
  PERMISSIONTYPE    INT      NOT NULL,
  ROLE              TEXT, 
  PHONE             CHAR(13),
  PASSWORD          CHAR(32) NOT NULL);
EOF;

$ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Tabela usuário criada com sucesso\n";
   }
   //pg_close($db);

$sql =<<<EOF
    CREATE TABLE PRODUCT
    (ID SERIAL PRIMARY KEY     NOT NULL,
    NAME              TEXT      NOT NULL,
    AMOUNSTINSTOCK    INT,
    EXPIRATIONALERT   INT,
    EXPIRATIONDATE    DATE,
    ISPERISHABLE      BOOLEAN,
    MANUFACTURE       TEXT,
    MINIMUMSTOCK      INT,
    SECTOR             SERIAL REFERENCES SECTOR(ID),
    TYPE              TEXT);
EOF;

$ret = pg_query($db, $sql);
    if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Tabela produto criada com sucesso\n";
   }
   //pg_close($db);

pg_query($db, "INSERT INTO USERS(MAIL, NAME, PERMISSIONTYPE, ROLE, PHONE, PASSWORD) 
                          VALUES('ranieel@outlook.com', 'raniel', 0, 'Administrador', '034992322116', '102030');");