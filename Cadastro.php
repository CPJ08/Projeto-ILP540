<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" media="screen" />
        <link href="css/background.css">
		<link rel="stylesheet" href="css/button.css">
		<link rel="stylesheet" href="css/Ftela.css">
        <link rel="stylesheet" href="css/Cadastro.css">
</head>
<body>
    <div class="row">
        <div class="col-6"><img class="imgsec" src="Imagem/medi.jpg" class="rounded float-left" alt="Imagem Medicina." width="500px"></div>
    <div id="divbordaCadastro" class="col-6" >
        <p class="h1"><u>Cadastrar</u></p>
        <br><br>
        <label>
            <p class="h5"><u>Nome:</u></p><input placeholder="Digite seu Nome" type="text" name="usuario" id="usuario" required>
        </label>
        <br>

        <label>
            <p class="h5"><u>Email:</u></p><input placeholder="Digite seu Email" type="email" name="email" id="email">
        </label>
        <br>
        <label>
            <p class="h5"><u>Telefone:</u></p><input placeholder="DDD Telefone" type="number" name="Telefone" id="Tel">
        </label>
        <br>
        <label><p class="h5"><u>Data de Nascimento:</u></p></label><br>
         <input id="date" type="date" >
        <br>
        <label>
            <p class="h5"><u>Senha:</u></p><input placeholder="Digite sua senha" type="password" name="senha" id="senha" required>
        </label>
        <br>
        <label>
            <p class="h5"><u>Confirmar Senha:<br></u></H5><input placeholder="Confirmar sua senha" type="password" name="csenha" id="confirmsenha" required>
        </label>
        <br><br>
	<a href="Login.php"><button class="button">Cancelar</button></a>
	<a href="Logado.php"><button class="button">Cadastrar</button></a>
        <br>
    </div> 
    <div class="col-6"><img class="imgsec" src="Imagem/medicina.jpg"  alt="Imagem Medicina1." width="500px"></div>
</div>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
 
</html>
