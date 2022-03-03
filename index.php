<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" media="screen" />
        <link href="css/background.css">
</head>
<body>
	<div>
		<ul>
			<li><a href="#login" accesskey="1">[1] Login</a></li>
			<li><a href="#menu" accesskey="2">[2] Menu</a></li>	
			<li><a href="#principal" accesskey="3">[3] Principal</a></li>
			<li><a href="#rodape" accesskey="4">[4] Rodape</a></li>
		</ul>
	</div>
	<header>
		<h1>Meu App</h1>
		<div id="login">
			<form action="#" method="post">
				<label>
					Usuario:<input type="text" name="usuario" id="usuario">
				</label>
				<label>
					Senha:<input type="password" name="senha" id="senha">
				</label>
			</form>
		</div>
		<nav id="menu"> 
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="contato.html">Contato</a></li>
			</ul>
		</nav>
	</header>
	<main id="principal">
		  <div class="alert alert-primary" role="alert">
		    Um simples alerta primary. Olha só!
		  </div>
		  <div class="alert alert-secondary" role="alert">
		    Um simples alerta secondary. Olha só!
		  </div>
		  <div class="alert alert-success" role="alert">
		    Um simples alerta success. Olha só!
		  </div>
		  <div class="alert alert-danger" role="alert">
		    Um simples alerta danger. Olha só!
		  </div>
		  <div class="alert alert-warning" role="alert">
		    Um simples alerta warning. Olha só!
		  </div>
		  <div class="alert alert-info" role="alert">
		    Um simples alerta info. Olha só!
		  </div>
		  <div class="alert alert-light" role="alert">
		    Um simples alerta light. Olha só!
		  </div>
		  <div class="alert alert-dark" role="alert">
		    Um simples alerta dark. Olha só!
		  </div>
	</main>
	<footer id="rodape">
		<p>Copyright © 2022</p>
	</footer>
		    <script src="js/jquery-3.3.1.slim.min.js" ></script>
		    <script src="js/popper.min.js" ></script>
		    <script src="js/bootstrap.min.js" ></script>
</body>
</html>
