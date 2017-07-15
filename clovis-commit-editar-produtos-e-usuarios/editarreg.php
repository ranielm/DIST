<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>DIST SHOPPING PARK</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/reset2.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/reset.js"></script>
  <script src="css/bootstrap.min.js"></script>
         <link rel="stylesheet" type="css" href="reset.css">

         <?php 

        //TESTA A CONEXÃO COM O BANCO
        $host        = "localhost";
        $dbname      = "TESTE";
        $user        = "root";
        $pass        = "nikito123";

        $id = $_GET['id'];

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
        // PRODUTOS
        $sql = "SELECT * FROM PRODUCT WHERE ID ='$id';";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);

        // USUARIOS
        $sql1 = "SELECT * FROM USERS WHERE ID ='$id';";
        $result1 = mysqli_query($db, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        ?>
		
    </head>
    <body>
        <div class="container">
           
            <header>
                <h1>DIST ESTOQUE SHOPPING PARK</h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->

                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>

                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="editarusuario.php" autocomplete="on"> 
                                <!--REGISTERUSER-->

                                <h1>EDITAR USUÁRIO</h1> 
                                <p> 
                                    <label for="id" class="id" >ID do usuário</label>
                                    <input id="id" name="id" required="required" type="text" placeholder="id" value="<?php echo $row1['ID']; ?>" readonly="readonly"/>
                                </p> 
                                <p> 
                                    <label for="usernamesignup" class="username" >Nome do usuário</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="usuário" value="<?php echo $row1['NAME']; ?>"/>
                                </p>
                                <p> 
                                    <label for="emailsignup" class="mail"  > Informe o email</label>
                                    <input id="emailsignup" name="mail" required="required" type="email" placeholder="email@servidoremail.com" value="<?php echo $row1['MAIL']; ?>"/> 
                                </p>
                                <p> 
                                    <label for="role" class="role"  > Informe o cargo</label>
                                    <input id="role" name="role" required="required" type="text" placeholder="função" value="<?php echo $row1['ROLE']; ?>"/> 
                                </p>
                                <p> 
                                    <label for="phone" class="phone" >Digite o número do telefone do usuário</label>
                                    <input id="phone" name="phone" required="required" type="tel" placeholder="0349..." value="<?php echo $row1['PHONE']; ?>"/>
                                </p>
                                <p> 
                                    <label for="type" class="usertype"  > Informe o tipo do usuário</label>
                                    <input id="type" name="usertype" required="required" type="number" placeholder="0,1..." value="<?php echo $row1['PERMISSIONTYPE']; ?>"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" >Utilize uma senha forte </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="ex. X8df!90EO" value="<?php echo $row1['PASSWORD']; ?>"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" >Por favor confirme a senha </label>
                                    <input id="passwordsignup_confirm" name="password_confirm" required="required" type="password" placeholder="ex. X8df!90EO" value="<?php echo $row1['PASSWORD']; ?>"/>
                                </p>
                                <p class="signin button"> 
                                    <input type="submit" value="Cadastrar"/> 
                                </p>

                                <p class="change_link">
                                    Terminou?
                                    <a href="#toregister" class="to_register">Cadastrar produto</a>
                                </p>
                            </form>
                        </div>

                        <!--REGISTERPRODUCT-->
                        <div id="register" class="animate form">
                            <form  action="editarproduto.php" autocomplete="on"> 
                                <h1> EDITAR PRODUTO </h1>
                                <p> 
                                    <label for="id" class="id" >ID do produto</label>
                                    <input id="id" name="id" required="required" type="text" placeholder="id" value="<?php echo $row['ID']; ?>" readonly="readonly"/>
                                </p> 
                                <p> 
                                    <label for="name" class="name" >Nome do produto</label>
                                    <input id="name" name="name" required="required" type="text" placeholder="produto" value="<?php echo $row['NAME']; ?>"/>
                                </p>
                                <p> 
                                    <label for="qtdadeainserir" class="qtdadeainserir"  >Quantidade a inserir:</label>
                                    <input id="qtdadeainserir" name="qtdadeainserir" required="required" type="number" placeholder="1,2,3,4..." value="<?php echo $row['AMOUNSTINSTOCK']; ?>"/> 
                                </p>
                                <p> 
                                    <label for="validade" class="validade" >Qual a validade desses produtos?</label>
                                    <input id="validade" name="validade" required="required" type="date" placeholder="2017-08-25" value="<?php echo $row['EXPIRATIONDATE']; ?>"/>
                                </p>
                                </p>
                                <p> 
                                    <!-- DISPONIBILIZAR A LISTA DE SETORES EM COMBOBOX PARA EVITAR CADASTRO DE SETOR INEXISTENTE -->
                                    <label for="setor" class="setor" >De qual setor esse produto pertence? </label>
                                    <input id="setor" name="setor" required="required" type="number" placeholder="1,2..." value="<?php echo $row['SECTOR']; ?>" />
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Cadastrar"/> 
								</p>
                                <p class="change_link">  
									Deseja voltar a página inicial?
									<a href="login.html" class="to_register"> Início </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
