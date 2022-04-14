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
        <form action="#" method="post">
            <h2>Editar Dados Pessoais</h2>
            <br>
            <label>
                <p>Usuario:</p>
                <input placeholder="Digite seu Usuario" type="text" name="usuario" id="usuario" required>
            </label><br>
            <label>
                <p>Email:</p>
                <input placeholder="Digite seu Email" type="email" name="email" id="email">
            </label><br>
            <label>
                <p>Telefone:</p>
                <input placeholder="DDD Telefone" type="number" name="Telefone" id="Tel">
            </label><br>
            <label>
                <p>Data de Nascimento:</p>
                <input id="date" type="date" >
            </label><br>
            <input type="button" Value="EditSenha">
            <br>
            <input type="reset" Value="Cancelar">
            <input type="submit" Value="Editar">
            <br>
            <a href="">Esqueceu a Senha?</a>
        </form>
    </div> 
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
 
</html>
