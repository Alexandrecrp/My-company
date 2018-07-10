<?php
	session_start();
	
	include("../lib/conexao.php");
	
	If ($_SESSION['conectado']!=true)
	{
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Administrador</title>

		<!-- Bootstrap core CSS -->
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="style.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="assets/js/ie-emulation-modes-warning.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		
		
		
		
		
		<script type="text/javascript">
		function loginsuccessfully(){
			setTimeout("window.location='promocao_lista.php'",100);
		}
		</script>
	</head>

	<body>

		<!-- Fixed navbar -->
		
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home.php">Administrador</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
					<!--    <li><a href="aovivo_lista.php">Ao Vivo</a></li>-->
					<!--	<li><a href="programacao_lista.php">Programação</a></li>-->
					<!--	<li><a href="equipe_lista.php">Equipe</a></li>-->
					<!--	<li><a href="promocao_lista.php">Promoções</a></li>-->
					<!--	<li><a href="galeria_lista.php">Galeria</a></li>-->
					<!--	<li><a href="anuncie_lista.php">Anuncie</a></li>-->
						<li><a href="contato_lista.php">Contatos</a></li>
					<!--	<li><a href="noticia_lista.php">Noticias</a></li>-->
					<!--	<li><a href="banner_lista.php">Banner</a></li>-->
					<!--	<li><a href="topdez_lista.php">Top 10</a></li>-->
					<!--	<li><a href="blitz_lista.php">Blitz 98</a></li>-->
					    <li><a href="index.php?sair=1">Sair</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>