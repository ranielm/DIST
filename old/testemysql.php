<?php
      $conecta = mysqli_connect("localhost","root","nikito123");
           if (!$conecta){
                      die('Impossivel conectar: ' . mysqli_error());
          }
            else{
                      echo "Conexao estabelecida com sucesso.";
          }
      mysqli_close($conecta);
?>
