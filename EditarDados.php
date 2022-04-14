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


    <div id="divbordaCadastro" >
        <p class="h1"><u>Editar Dados Pessoais</u></p>
        <br><br>
        <label>
            <p class="h5"><u>Usuario:</u></p><input placeholder="Digite seu Usuario" type="text" name="usuario" id="usuario" required>
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
        <br><br>
        <button class="button">Trocar Senha</button>
        <br><br>
        <a href="Logado.html"><button class="button">Cancelar</button></a>
        <a href="Logado.html"><button class="button">Editar</button></a>
        <br>
        <a href="">Esqueceu a Senha?</a>
        
    </div> 
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
 
</html>