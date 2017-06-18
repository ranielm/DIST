<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bem-vindo a Unique</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Info</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Início</a></li>
        <li><a href="#">Mensagens</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Procurar...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Minha Conta</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">Meu Perfil</a></p>
        <img src="imagens/eu.jpg" class="img-circle" height="65" width="65" alt="Avatar">
      </div>
      <div class="well">
        <p><a href="#">Interesses</a></p>
        <p>
          <span class="label label-primary">POO</span>
          <span class="label label-success">PHP</span>
          <span class="label label-default">PostgreSQL</span>
          <span class="label label-info">Android</span>
          <span class="label label-warning">Jogos</span>
          <span class="label label-danger">Linux</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Bom dia!</strong></p>
        O que tem de novo para compartilhar? Forneça conhecimento!
      </div>
      <p><a href="http://www.diolinux.com.br/">DioLinux</a></p>
      <p><a href="http://www.techtudo.com.br/">TechTudo</a></p>
      <p><a href="https://www.baboo.com.br/">Baboo</a></p>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p contenteditable="true">Novidades: <p><a href="http://www.diolinux.com.br/2017/05/conheca-as-novidades-do-novo-kde-plasma.html">KDE tem alterações em sua nova versão Plasma 5.10.</a></p></p> 
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Diego</p>
           <img src="imagens/diego.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Abro Facebook tem textão sobre Temer, abro o Twitter 140 caracteres sobre Temer, ainda bem que Instagram é só foto.</p>
                <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
                </button>    
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Tiago</p>
           <img src="imagens/tiago.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>O novo Gnome Pie é uma aplicação do tipo "lançador" que você pode usar no seu Desktop Linux. O software é muito versátil, você pode utilizá-lo à partir de teclas de atalho de qualquer janela do seu sistema operacional, a qualquer momento. </p>
                            <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
                </button>    
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Amanda</p>
           <img src="imagens/amanda.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>"O objetivo do Marketing é conhecer e entender o consumidor tão bem que o produto ou serviço se venda sozinho."</p>
                            <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
                </button>    
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Henrique</p>
           <img src="imagens/palmeiras.png" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <!--<p>"Em toda a história da humanidade, prevaleceram aqueles que aprenderam a colaborar e a improvisar com mais eficácia."</p>--><p>Palmeiras não tem mundial :(</p>
                            <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
                </button>    
          </div>
        </div>
      </div>     
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Próximos Eventos:</p>
        <img src="imagens/reuniao.png" alt="Reunião" width="400" height="300">
        <p><strong>Reunião</strong></p>
        
<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>
//DATA CORRENTE: var d = new Date();
var d = new Date("August 23, 2017 14:00:00");
document.getElementById("demo").innerHTML = d;
</script>

</body>
</html>
        
        <button class="btn btn-primary">Info</button>
      </div>      
      <div class="well">
      <img src="imagens/prograd.png" class="img" height="50" width="120" alt="Avatar">
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<!--<footer class="container-fluid text-center">
  <p>Rodapé</p>
</footer>-->

</body>
</html>
