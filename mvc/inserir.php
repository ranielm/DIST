<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Celke - Crud Create</title>
        <link href="css/bootstrap.css" rel="stylesheet">
    </head>
    <body>   
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Celke</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Artigos</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuários <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="inserir.php">Cadastrar</a></li>
                                <li><a href="#">Listar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container theme-showcase" role="main">
            <div class="page-header">
                <h1>Cadastrar Usuário</h1>
            </div>
            <?php
            require('./conf/Config.inc');
            $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            if (!empty($data['SendPostForm'])):
                unset($data['SendPostForm']);
                $cadastra = new Usuario();
                $cadastra->ExeCreate($data);
                if (!$cadastra->getResult()):
                    echo $cadastra->getMsg();
                else:
                    echo $cadastra->getMsg();
                endif;
            endif;

            //var_dump($data);
            ?>

            <form  class="form-horizontal" name="PostForm" action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="col-sm-2 control-label">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name"  class="form-control" id="inputEmail3" placeholder="Nome Completo" value="<?php if (isset($data)) echo $data['name']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">E-mail:</label>
                    <div class="col-sm-10">
                        <input type="text" name="email"  class="form-control" id="inputEmail3" placeholder="Seu Melhor E-mail" value="<?php if (isset($data)) echo $data['email']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-success" value="Cadastrar Usuário" name="SendPostForm" />
                    </div>
                </div>
                
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>