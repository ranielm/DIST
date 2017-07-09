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
$mail=$_REQUEST['mail']; 
$name=$_REQUEST['username']; 
$permissiontype=$_REQUEST['usertype']; 
$role=$_REQUEST['role']; 
$phone=$_REQUEST['phone']; 
$password=$_REQUEST['password']; 
$password_confirm=$_REQUEST['password_confirm'];
$id = $_REQUEST['id'];

$sql =   "UPDATE USERS
          SET   MAIL            ='$mail',
                NAME            ='$name',
                PERMISSIONTYPE  ='$permissiontype',
                ROLE            ='$role',
                PHONE           ='$phone',
                PASSWORD        ='$password'
          WHERE ID ='$id';";

//VERIFICA SE AS SENHAS DIGITADAS SÃO IGUAIS
if ($permissiontype == 1 OR $permissiontype == 0) 
{

  if ($password == $password_confirm) 
  {
  //VERIFICA SE JÁ EXISTE UM COM O MESMO USERNAME OU MESMO EMAIL
    $result=mysqli_query($db, "SELECT * FROM USERS WHERE NAME = '$name' OR MAIL = '$mail';");
    //SE EXISTE VAI PARA A PÁGINA JAEXISTE.PHP
    if (mysqli_num_rows($result)>1)
    {
      $redirect = "jaexiste.php";
       header("location:$redirect");
    }  
    //SE NÃO EXISTE O USUÁRIO É CADASTRADO NO SISTEMA
    else {
      mysqli_query($db, $sql);
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
