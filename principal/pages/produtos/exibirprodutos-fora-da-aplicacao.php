<!DOCTYPE html>
<html lang="pt-br" style="margin-right: 5; margin-top: 9">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PRODUTOS</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="list-group" style="margin-right: 1%; margin-left: 1%; margin-top: 1%; marker-end: 1%">
        <?php 

        
        //TESTA A CONEXÃO COM O BANCO
        $host        = "localhost";
        $dbname      = "dist";
        $user        = "root";
        $pass        = "banco";

        $db = mysqli_connect($host, $user, $pass, $dbname);

        if(!$db) 
        {
          echo "Erro : Indisponível para abrir a conexão com o banco de dados\n";
        } else 
        {
          $nl=chr(10);
          $texto = "Conexão com o banco de dados aberta com sucesso";
          // echo nl2br($texto);
        }

        $sql = "SELECT * FROM produtos;";
        $result = mysqli_query($db, $sql);
        $count = 0;
        $active1 = "";

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            echo "<a href='editarreg.php?id=" . $row['ID'] . "#toregister' class='list-group-item " . $active1 . "''>" . $row['nome'] . " - ID: " . $row['id'] . "<span class='badge'>" . $row['quantidadetotal'] . "</span></a>";
            $count++;
            if($count % 2 == 0) {
              $active1 = "";
            } else {
              $active1 = "active";
            }
          }
        } else {
          echo "Nenhum produto cadastrado.";
        }
          
     ?>

        <!--<a href="#" class="list-group-item active">Sacola plástica (exemplo estático) - ID: 42<span class="badge">07</span></a>
  </div> -->

        <div style="margin-right: 1%; margin-left: 1%; margin-top: 1%; marker-end: 1%">
            <button type="button" class="btn btn-danger onclick=" onClick="history.go(-1);" btn-default navbar-btn ">Sair</button>
    <button type="button " class="btn btn-info onclick="onClick=" history.go(0); " btn-default navbar-btn">Atualizar</button>
        </div>

        <!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>

</html>