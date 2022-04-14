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
    <div class="principal">
    <div class="row">
        <div class="col-6">
            <img class="imgsec minhasImagens" src="Imagem/medi.jpg" class="rounded float-left" alt="Imagem Medicina."><br>&nbsp;
            <img class="imgsec minhasImagens" src="Imagem/medicina.jpg"  alt="Imagem Medicina1." >
        </div>
        <div id="divbordaCadastro" class="col-6">
            <form action="#" method="post">
                <h2>Cadastrar</h2>
                <label>
                    <p>Nome:</p>
                    <input placeholder="Digite seu Nome" type="text" name="usuario" id="usuario" required>
                </label><br>
                <label>
                    <p>Email:</p><input placeholder="Digite seu Email" type="email" name="email" id="email">
                </label><br>
                <label>
                    <p>Telefone:</p>
                    <input placeholder="DDD Telefone" type="number" name="Telefone" id="Tel">
                </label><br>  
                <label>
                    <p>Data de Nascimento:</p>
                    <input id="date" type="date">
                </label><br>
                <label>
                    <p>Senha:</p>
                    <input placeholder="Digite sua senha" type="password" name="senha" id="senha" required>
                </label><br>
                <label>
                    <p>Confirmar Senha:</p>
                    <input placeholder="Confirmar sua senha" type="password" name="csenha" id="confirmsenha" required>
                </label><br>
                <a href="Cadastro.php"><input type="button" value="Cadastrar"></a>
                <input type="reset" Value="Cancelar">
            </form>

    
</div>
    </div>
</div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
 
</html>
