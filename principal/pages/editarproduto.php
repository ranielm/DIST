<?php
if (!isset($_SESSION)) 
        {
            session_start();
        }
        $id = $_REQUEST['id'];

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

        $sql = "SELECT * FROM produtos WHERE id = $id;";
        $result = mysqli_query($db, $sql);
        $row1 = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DIST - PRODUTOS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">DIST</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> Quantidade atualizada
                                    <span class="pull-right text-muted small">13:26 PM</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Empréstimo realizado
                                    <span class="pull-right text-muted small">12:32 AM</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-warning fa-fw"></i> Renove o produto "cola"
                                    <span class="pull-right text-muted small">10:57 AM</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-shopping-cart fa-fw"></i> Novo produto cadastrado
                                    <span class="pull-right text-muted small">09:49 PM</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-money fa-fw"></i> Preço alterado
                                    <span class="pull-right text-muted small">Ontem</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Gerar relatório</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Raniel</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Procurar por produto...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="http://10.15.109.203/principal/pages/index.php"><i class="fa fa-home fa-fw"></i> Principal</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuários<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://10.15.109.203/principal/pages/cadastrarusuarios.php">Cadastrar usuário</a>
                                </li>
                                <li>
                                    <a href="http://10.15.109.203/principal/pages/exibirusuarios.php">Exibir usuários</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-product-hunt fa-fw"></i> Produtos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://10.15.109.203/principal/pages/cadastrarprodutos.php">Cadastrar produto</a>
                                </li>
                                <li>
                                    <a href="http://10.15.109.203/principal/pages/exibirprodutos.php">Exibir produtos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar fa-fw"></i> Relatórios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://10.15.109.203/principal/pages/diatoexcelpdf.php">Escolha um dia</a>
                                </li>
                                <li>
                                    <a href="http://10.15.109.203/principal/pages/intervalotoexcelpdf.php">Entre intervalos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-industry fa-fw"></i> Setores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://10.15.109.203/principal/pages/cadastrarsetores.php">Cadastrar setor</a>
                                </li>
                                <li>
                                    <a href="http://10.15.109.203/principal/pages/exibirsetores.php">Exibir setores</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Produtos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-product-hunt fa-fw"></i> Insira aqui as informações do produto
                            <div class="pull-right">
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->

                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>

                    <div id="wrapper">

                        <!--REGISTERPRODUCT-->
                        <div id="register" class="animate form">
                            <form  action="inserirprodutos.php" method="post" autocomplete="on"> 
                                <p> 
                                    <label for="id" class="id" >ID do produto</label>
                                    <input id="id" name="id" required="required" type="text" placeholder="id" value="<?php echo $row1['id']; ?>" readonly="readonly"/>
                                </p>
                                <p> 
                                    <label for="nome" class="nome" >Nome do produto:</label>
                                    <input id="nome" name="nome" required="required" type="text" placeholder=" Nome" value="<?php echo $row1['nome']; ?>" />
                                </p>
                                
                                <p> 
                                    <label for="quantidadetotal" class="quantidadetotal"  >Quantidade a inserir:</label>
                                    <input max="9999999999" min="1" id="quantidadetotal" name="quantidadetotal" required="required" type="number" placeholder=" 1" value="<?php echo $row1['quantidadetotal']; ?>" /> 
                                </p>
                                
                                <p> 
                                    <label for="alertadeexpiracao" class="alertadeexpiracao"  >Alerta de expiração em dias:</label>
                                    <input max="25" min="15" id="alertadeexpiracao" name="alertadeexpiracao" required="required" type="number" placeholder=" 15" value="<?php echo $row1['alertadeexpiracao']; ?>" /> 
                                </p>
                                
                                <p> 
                                    <label for="datadeexpiracao" class="datadeexpiracao" >Qual a validade desses produtos?</label>
                                    <input id="datadeexpiracao" min="2017-07-17" max="2060-01-01" name="datadeexpiracao" required="required" type="date" placeholder="2017-07-17" value="<?php echo $row1['datadeexpiracao']; ?>" />
                                </p>
                                
                                <p> 
                                <label>É perecível?</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ehperecivel" id="ehperecivelsim" value="1" checked>Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="ehperecivel" id="ehperecivelnao" value="0">Não
                                    </label>
                                </p>
                                
                                <p> 
                                    <label for="fabricante" class="fabricante" >Nome do fabricante:</label>
                                    <input id="fabricante" name="fabricante" type="text" placeholder=" Fabricante" value="<?php echo $row1['fabricante']; ?>" />
                                </p>
                                
                                <p> 
                                    <label for="estoqueminimo" class="estoqueminimo"  >Quantidade em estoque mínimo:</label>
                                    <input max="99999999" min="1" id="estoqueminimo" name="estoqueminimo" required="required" type="number" placeholder=" 1" value="<?php echo $row1['estoqueminimo']; ?>" /> 
                                </p>
                                
                                <p> 
                                <!-- DISPONIBILIZAR A LISTA DE SETORES EM COMBOBOX PARA EVITAR CADASTRO DE SETOR INEXISTENTE -->
                                <label for="setor" class="setor" >A qual setor esse produto pertence? </label>
                                <select id="setor" name="setor">
                                <option value="principal">Principal</option>
                                <option value="escritorio">Escritório</option>
                                <option value="esportes">Esportes</option>
                                <option value="alimenticio">Alimentício</option>
                                </select>
                                </p>
  
                                <p> 
                                    <label for="tipo" class="tipo" >Tipo do produto:</label>
                                    <input name="tipo" id="tipo" tipo="tipo" type="text" placeholder=" Tipo" value="<?php echo $row1['tipo']; ?>" />
                                </p>

                                </p>
                                <!--<p class="signin button"> 
									<input type="submit" value="Cadastrar"/> 
                                </p>-->
                                

                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                                <a class="btn btn-info" href="index.php" role="button">Voltar ao início</a>

                                <!--
                                <p class="change_link">  
									Deseja voltar a página inicial?
									<a href="index.php" class="to_inicio"> Início </a>
								</p>
                                <p class="change_link">
                                    <input type="submit" value="Cadastrar produto">
                                    <input type="button" href="index.php" value="Voltar ao início">
                                    <a href="index.php" class="to_inicio"> Início </a>
                                    <a href="inserirprodutos.php" class="to_register">Cadastrar produto</a>
                                <p>-->
                                				
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>                                </div>
                                <!-- /.col-lg-4 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
