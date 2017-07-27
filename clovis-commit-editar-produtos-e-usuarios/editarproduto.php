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
      $texto = "Conexão com o banco de dados aberta com sucesso";
      //echo nl2br($texto);
      echo $nl;
   }

//PEGA AS INFORMAÇÕES ENVIADAS PELO CADASTRAR USUÁRIO
$productname=$_REQUEST['name']; 
$incramount=$_REQUEST['qtdadeainserir']; 
$expirationdate=$_REQUEST['validade']; 
$sector=$_REQUEST['setor']; // VERIFICAR SE SETOR DE ENTRADA EXISTE
$id = $_REQUEST['id'];

$sql =   "UPDATE PRODUCT
          SET   NAME            ='$productname',
                AMOUNSTINSTOCK  ='$incramount',
                EXPIRATIONDATE  ='$expirationdate',
                SECTOR          ='$sector'
          WHERE ID ='$id';";

//INSERE O PRODUTO NO BANCO
  mysqli_query($db, $sql);
      $redirect = "produtocadastrado.php";
      header("location:$redirect");
  
