<?php
//DATA DE HOJE
$hoje = date('d/m/Y');

//DIAS FORMATADOS E NÃO FORMATADOS
$dia2 = $_POST['dia2'];
$dia2formatado = date('d/m/Y', strtotime($_POST['dia2']));

$dia1 = $_POST['dia1'];
$dia1formatado = date('d/m/Y', strtotime($_POST['dia1']));

//SESSION
session_start();
$_SESSION['dia2'] = $dia2;
//$_SESSION['dia2formatado'] = $dia2formatado;

$_SESSION['dia1'] = $dia1;
//$_SESSION['dia1formatado'] = $dia1formatado;

//VERIFICA SE DIA EXISTE
$connect = mysqli_connect("localhost", "root", "banco", "dist");
$query = "SELECT * FROM relatorios WHERE datadodia = '$dia2'";
$result = mysqli_query($connect, $query);

//SE NÃO EXISTE E O DIA FOR O DE HOJE, EXIBE PRODUTOS ATUALMENTE
//SE NÃO EXISTE E NÃO FOR HOJE, SEM DADOS PARA EXIBIR
if(mysqli_num_rows($result) == 0)
{
  if($hoje == $dia2formatado)
  {
    echo "<script>window.location='http://10.15.109.203/principal/pages/exibehoje.php';</script>";      
  }
  echo "<script>alert('Sem dados para exibir nesse dia.');window.location='http://10.15.109.203/principal/pages/diatoexcelpdf.php';</script>";      
}

//CONEXÃO COM O BANCO
$connect = mysqli_connect("localhost", "root", "banco", "dist");
$sql = "SELECT * FROM relatorios WHERE datadodia = '$dia2'";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Estado do banco em <?php echo $data; ?></title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">Estado do banco no dia <?php echo $dia2formatado; ?></h2><br /> 
    <table class="table table-bordered">
    <tr>  
        <th>Nome do produto</th>  
        <th>Quantidade total</th>  
        <th>Inserções no dia</th>  
        <th>Remoções no dia</th>
        <th>Data de validade</th>
        <th>Setor</th>
    </tr>
    <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["nome"].'</td>  
         <td>'.$row["quantidadetotal"].'</td>  
         <td>'.$row["insercoesnodia"].'</td>  
         <td>'.$row["remocoesnodia"].'</td>  
         <td>'.date('d/m/Y', strtotime($row['datadeexpiracao'])).'</td>
         <td>'.$row["setor"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="exportexcel.php">
     <input type="submit" name="export" class="btn btn-success" value="Gerar relatório em Excel" />
    </form>
    <a href="http://10.15.109.203/principal/pages/topdf/intervalotopdf.php" target="_blank"><input type="submit" name="export" class="btn btn-info" value="Gerar relatório em PDF" /></a>
    <p>
    <p>
    <a class="btn btn-danger" href="index.php" role="button">Voltar ao início</a> <a class="btn btn-danger" href="diatoexcelpdf.php" role="button">Voltar aos relatórios</a>
   </div>  
  </div>  
 </body>  
</html>