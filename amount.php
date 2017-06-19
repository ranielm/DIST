<?php
//TESTA A CONEXÃO COM O BANCO
   $host        = "localhost";
   $dbname      = "TESTE";
   $user        = "root";
   $pass        = "nikito123";

   $db = mysqli_connect($host, $user, $pass, $dbname);
   if(!$db) 
   {
      echo "Erro : Indisponível para abrir a conexão com o banco de dados\n";
   } else 
   {
      $nl=chr(10);
      $texto = "Conexão com o banco de dados aberta com sucesso<br>";
      echo nl2br($texto);
   }

$sql = "SELECT AMOUNSTINSTOCK FROM PRODUCT WHERE NAME LIKE '%gua%';";
$result = mysqli_query($db, $sql);
echo "query: \"SELECT AMOUNSTINSTOCK FROM PRODUCT WHERE NAME LIKE '%gua%' \";<br>";
echo "result: ";

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "AMOUNSTINSTOCK: " . $row["AMOUNSTINSTOCK"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

echo $result;

?>