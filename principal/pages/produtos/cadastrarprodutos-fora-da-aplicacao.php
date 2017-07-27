<!DOCTYPE html>
<html>
<head>
<title>Cadastrar produto</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Steppy Account Create Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Advent+Pro:100,200,300,400,500,600,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font --> 
</head>
<body>
	<!-- main -->
	<div class="main-agileits">
		<h1>Cadastre um novo produto</h1>
		<div class="main-row">
			<ul class="steps">
				<li class="is-active">Passo 1</li>
				<li>Passo 2</li>
				<li>Passo 3</li>
			</ul>
			<form class="form-wrapper" action="#" method="post">
				<fieldset class="section is-active"> 
					<h3>Informações básicas</h3>
					<input type="text" name="nomeusuario" id="nomeusuario" placeholder="Código do produto" required="">
					<input type="text" name="email" id="email" placeholder="Quantidade" required="">
					<div class="button">Próximo</div> 
				</fieldset>
				<fieldset class="section">
					<h3>Validade e descrição</h3>
					<input type="text" name="nomeusuario" id="nomeusuario" placeholder="Data de validade" required="">
					<input type="text" name="email" id="email" placeholder="Descrição" required="">
					<div class="button">Próximo</div>
				</fieldset>
				<fieldset class="section">
					<h3>Informações adicionais</h3>
					<input type="text" name="senha" id="senha" placeholder="Tipo Unitário">
					<input type="text" name="senha2" id="senha2" placeholder="Fornecedor">
					<input class="submit button" type="submit" value="Cadastrar">
				</fieldset>
				<fieldset class="section">
					<h3>Produto cadastrado!</h3>
					<p>O produto foi cadastrado com sucesso. </p>
					<div class="button">Cadastrar novo produto</div>
				</fieldset>
			</form>
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
	<div class="w3copyright-agile">
	</div>
	<!-- //copyright --> 
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script> 
	<script>
		$(document).ready(function(){
		  $(".form-wrapper .button").click(function(){
			var button = $(this);
			var currentSection = button.parents(".section");
			var currentSectionIndex = currentSection.index();
			var headerSection = $('.steps li').eq(currentSectionIndex);
			currentSection.removeClass("is-active").next().addClass("is-active");
			headerSection.removeClass("is-active").next().addClass("is-active");

			$(".form-wrapper").submit(function(e) {
			  e.preventDefault();
			});

			if(currentSectionIndex === 3){
			  $(document).find(".form-wrapper .section").first().addClass("is-active");
			  $(document).find(".steps li").first().addClass("is-active");
			}
		  });
		});
	</script> 	
	<!-- //js --> 
</body>
</html>