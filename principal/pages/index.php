<?php
if (!isset($_SESSION)) 
        {
            session_start();
        }
        header('Content-Type: text/html; charset=utf-8');

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
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DIST - PRINCIPAL</title>

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
                <a class="navbar-brand" href="index.php">DIST</a>
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
                            <a href="http://localhost/principal/pages/index.php"><i class="fa fa-home fa-fw"></i> Principal</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuários<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/principal/pages/cadastrarusuarios.php">Cadastrar usuário</a>
                                </li>
                                <li>
                                    <a href="http://localhost/principal/pages/exibirusuarios.php">Exibir usuários</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-product-hunt fa-fw"></i> Produtos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/principal/pages/cadastrarprodutos.php">Cadastrar produto</a>
                                </li>
                                <li>
                                    <a href="http://localhost/principal/pages/exibirprodutos.php">Exibir produtos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-calendar fa-fw"></i> Relatórios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/principal/pages/diatoexcelpdf.php">Relatório diário de produtos</a>
                                </li>
                                <li>
                                    <a href="http://localhost/principal/pages/intervalotoexcelpdf.php">Relatório por datas de produtos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-industry fa-fw"></i> Setores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="http://localhost/principal/pages/cadastrarsetores.php">Cadastrar setor</a>
                                </li>
                                <li>
                                    <a href="http://localhost/principal/pages/exibirsetores.php">Exibir setores</a>
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
                    <h1 class="page-header">Shopping Park</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php 
                                        $sql = "SELECT * FROM usuarios;";
                                        $result = mysqli_query($db, $sql);

                                        if (mysqli_num_rows($result) > 0) 
                                        {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) 
                                            {
                                                $totalusers = $totalusers + 1;
                                            }
                                        } else {
                                                    echo "Nenhum produto cadastrado.";
                                        }
                                    ?>
                                    <div class="huge"><?php echo $totalusers; ?></div>
                                    <div>Usuários cadastrados</div>
                                </div>
                            </div>
                        </div>
                        <a href="exibirusuarios.php">
                            <div class="panel-footer">
                                <span class="pull-left">Veja os detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-product-hunt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php 
                                        $sql = "SELECT quantidadetotal FROM produtos;";
                                        $result = mysqli_query($db, $sql);

                                        if (mysqli_num_rows($result) > 0) 
                                        {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) 
                                            {
                                                $total = $row['quantidadetotal'] + $total;
                                            }
                                        } else {
                                                    echo "Nenhum produto cadastrado.";
                                        }
                                    ?>
                                    <div class="huge"><?php echo $total; ?></div>
                                    <div> Produtos armazenados</div>
                                </div>
                            </div>
                        </div>
                        <a href="exibirprodutos.php">
                            <div class="panel-footer">
                                <span class="pull-left">Veja os detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                $totalacab = 0;
                $sql = "SELECT * FROM produtos WHERE quantidadetotal < estoqueminimo;";
                $result = mysqli_query($db, $sql);

                if (mysqli_num_rows($result) > 0) 
                {
                                            // output data of each row
                    while($row = mysqli_fetch_assoc($result)) 
                    {
                        $totalacab = $totalacab + 1;
                    }
                }
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-sort-amount-desc fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $totalacab; ?></div>
                                    <div>Produto(s) acabando</div>
                                </div>
                            </div>
                        </div>
                        <a href='exibirprodutos.php?exibprod=acbd'>
                            <div class="panel-footer">
                                <span class="pull-left">Veja os detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-calendar-times-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php
                                        $totalvcndo = 0;
                                        $sql = "SELECT * FROM produtos WHERE datadeexpiracao <= NOW() + INTERVAL 15 DAY;";
                                        $result = mysqli_query($db, $sql);

                                        if (mysqli_num_rows($result) > 0) 
                                        {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) 
                                            {
                                                $totalvcndo = $totalvcndo + 1;
                                            }
                                        } 
                                    ?>
                                    <div class="huge"><?php echo $totalvcndo; ?></div>
                                    <div>Produto(s) vencendo</div>
                                </div>
                            </div>
                        </div>
                        <a href='exibirprodutos.php?exibprod=vcd'>
                            <div class="panel-footer">
                                <span class="pull-left">Veja os detalhes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Informações sobre os produtos
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Ações
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Ver últimos inseridos</a>
                                        </li>
                                        <li><a href="#">Mais próximos do vencimento</a>
                                        </li>
                                        <li><a href="#">Registrar empréstimo</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Ver todos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Código</th>
                                                    <th>Nome</th>
                                                    <th>Data de entrada</th>
                                                    <th>Hora</th>
                                                    <th>Inserções no dia</th>
                                                    <th>Quantidade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $sql = "SELECT * FROM produtos;";
                                                $result = mysqli_query($db, $sql);

                                                if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                  while($row = mysqli_fetch_assoc($result)) {
                                                    echo "<tr>
                                                            <td>" . $row['id'] .  "</td>
                                                            <td>" . $row['nome'] .  "</td>
                                                            <td>" . date('d/m/Y', strtotime($row['reg_date'])) .  "</td>
                                                            <td>" . date('h:i A', strtotime($row['reg_date'])) .  "</td>
                                                            <td>" . $row['insercoesnodia'] .  "</td>
                                                            <td>" . $row['quantidadetotal'] .  "</td>
                                                        </tr>";

                                              }
                                          } else {
                                              echo "Nenhum produto cadastrado.";
                                          }


                                          ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Painel de notificações
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> Quantidade atualizada
                                    <span class="pull-right text-muted small"><em>13:26 PM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Empréstimo realizado
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Renove o produto "cola"
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> Novo produto cadastrado
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Preço alterado
                                    <span class="pull-right text-muted small"><em>Ontem</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-default btn-block">Gerar relatório</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-4 -->
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
