<?php  
//export.php  

//SESSION
session_start();
$diasemformatacao = $_SESSION['diasemformatacao'];
$diaformatado = $_SESSION['diaformatado'];

//TÍTULO PADRÃO
$nome = "Relatorio do dia ";

//CONEXÃO COM O BANCO
$connect = mysqli_connect("localhost", "root", "banco", "dist");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM relatorios WHERE datadodia = '$diasemformatacao'";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  

        <tr><th>'.$nome.'</th><th>'.$diaformatado.'</th></tr>
                  
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
         <td>'.$row["setor"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=RELATORIO.xls');
  echo $output;
 }
 if(mysqli_num_rows($result) == 0)
 {
      echo "<script>alert('Sem dados para exibir nesse dia.');window.location='http://http://localhost/principal/pages/diatoexcelpdf.php';</script>";      
 }
}
?>