<?php
if (!isset($_SESSION)) 
        {
            session_start();
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
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
                            <a href="http://localhost/principal/pages/index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cadastrar Produtos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-product-hunt fa-fw"></i> Insira aqui as informações do produto
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
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->

                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>

                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="cadastrarusuario.php" autocomplete="on"> 
                                <!--REGISTERUSER-->

                                 
                                <p> 
                                    <label for="usernamesignup" class="username" >Nome do usuário</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="usuário" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="mail"  > Informe o email</label>
                                    <input id="emailsignup" name="mail" required="required" type="email" placeholder="email@servidoremail.com"/> 
                                </p>
                                <p> 
                                    <label for="role" class="role"  > Informe o cargo</label>
                                    <input id="role" name="role" required="required" type="text" placeholder="função"/> 
                                </p>
                                <p> 
                                    <label for="phone" class="phone" >Digite o número do telefone do usuário</label>
                                    <input id="phone" name="phone" required="required" type="tel" placeholder="0349..."/>
                                </p>
                                <p> 
                                    <label for="type" class="usertype"  > Informe o tipo do usuário</label>
                                    <input id="type" name="usertype" required="required" type="number" placeholder="0,1..."/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" >Utilize uma senha forte </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="ex. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" >Por favor confirme a senha </label>
                                    <input id="passwordsignup_confirm" name="password_confirm" required="required" type="password" placeholder="ex. X8df!90EO"/>
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
                            <form  action="cadastrarproduto.php" autocomplete="on"> 
                                <p> 
                                    <label for="name" class="name" >Nome do produto</label>
                                    <input id="name" name="name" required="required" type="text" placeholder="produto" />
                                </p>
                                <p> 
                                    <label for="qtdadeainserir" class="qtdadeainserir"  >Quantidade a inserir:</label>
                                    <input id="qtdadeainserir" name="qtdadeainserir" required="required" type="number" placeholder="1,2,3,4..."/> 
                                </p>
                                <p> 
                                    <label for="validade" class="validade" >Qual a validade desses produtos?</label>
                                    <input id="validade" name="validade" required="required" type="date" placeholder="2017-08-25"/>
                                </p>
                                </p>
                                <p> 
                                    <!-- DISPONIBILIZAR A LISTA DE SETORES EM COMBOBOX PARA EVITAR CADASTRO DE SETOR INEXISTENTE -->
                                    <label for="setor" class="setor" >De qual setor esse produto pertence? </label>
                                    <input id="setor" name="setor" required="required" type="number" placeholder="1,2..."/>
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
