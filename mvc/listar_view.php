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
        <div class="container theme-showcase" role="main">
            
            <?php
            require('./conf/Config.inc');
            $read = new Read;            
            $read->ExeRead('usuarios', 'WHERE name = :name AND email = :email LIMIT :limit', 'name=Cesar&email=cesar@celke.com.br&limit=3');
            
            View::Load('conf/view/usuario');
            
            foreach ($read->getResult() as $user):
                extract($user);
                //echo str_replace(array('#name#', '#email#'), array($name, $email), $arquivo_view);
                //$link_view = explode( '&', '#' . implode("#&#", array_keys($user)) . '#');
                //echo str_replace($link_view, array_values($user), $arquivo_view);
            
                View::Show($user);
            endforeach;
            ?>
            
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>