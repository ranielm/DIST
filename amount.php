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
      echo nl2br($texto);
   }
$result=pg_query($db, "SELECT AMOUNSTINSTOCK FROM PRODUCT WHERE NAME = 'azeitona';");

echo $result;

?>