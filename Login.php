<?php
$login = $senha = $check = "";
if (isset($_COOKIE["login"])) {
    $login = $_COOKIE["login"];
    $check = "checked";
}
if (isset($_COOKIE["senha"]))
    $senha = $_COOKIE["senha"];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" media="screen" />
    <link rel="stylesheet" href="css/back.css">
</head>

<body>
    <div id="login-container">
    <form action="Process_Login.php" method="post">
        <h2>Login</h2><br>
        <label>
            <p>Usuario: </p>
            <input placeholder="Digite seu usuario" type="text" name="login" id="login" value="<?= $login ?>">
        </label><br>
        <label>
            <p>Senha:</p>
            <input placeholder="Digite sua senha" type="password" name="senha" id="senha" value="<?= $senha ?>">
        </label><br>
        <div id="checkbox">
        <label>
        
            <input type="checkbox" name="Salvar" <?= $check ?>>
            Salvar Dados de Acesso
        </label><br>
        </div>
        <a href="Cadastro.php"><input type="button" value="Cadastrar"></a>
        <input type="submit" Value="Logar"><br>
        <a href="esqueceu.php">
            <p>Esqueceu a Senha?</p>
        </a>
    </form>
    </div>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>