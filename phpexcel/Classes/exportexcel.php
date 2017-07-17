<?php  
//export.php  

$data = date('d/m/Y');
$nome = "Relatorio do dia ";

$connect = mysqli_connect("localhost", "root", "banco", "dist");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM produtos";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  

        <tr><th>'.$nome.'</th><th>'.$data.'</th></tr>
                  
        <th>Nome do produto</th>  
        <th>Quantidade total</th>  
        <th>Insercoes no dia</th>  
        <th>Remocoes no dia</th>
        <th>Data de validade</th>
        <th>Setor</th>
        </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
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
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=RELATORIO.xls');
  echo $output;
 }
}
?>