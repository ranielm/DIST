<?php

$data = date('d/m/Y');

$connect = mysqli_connect("localhost", "root", "banco", "dist");
$sql = "SELECT * FROM produtos";  
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
    <h2 align="center">Estado do banco no dia <?php echo $data; ?></h2><br /> 
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
         <td>'.$row["tipo"].'</td>
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="exportexcel.php">
     <input type="submit" name="export" class="btn btn-success" value="Gerar relatório em Excel" />
    </form>
   </div>  
  </div>  
 </body>  
</html>