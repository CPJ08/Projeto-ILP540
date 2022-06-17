<?php
include("Conecta.php");

if(!isset($_SESSION)) session_start();

if(isset($_SESSION["id_usuario"])){

	$aux = "disabled";

	$id = $_SESSION["id_usuario"];

	try {
	
		$sql = "SELECT * FROM `usuarios`WHERE `id` = '$id'";
		
		$res = $conn->query($sql)->fetchAll();

		if(count($res) > 0) {
	        foreach ($res as $row) {
	            $nome = $row['nome'];
	            $email = $row['email'];
	            $tel = $row['tel'];
                $datanasc = $row['datanasc'];
	            $senha = $row['senha'];
	        }
	       
    	}	
	} catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$conn = null;

}
else{
	$nome = "";
	$email = "";
	$tel = "";
    $datanasc = "";
	$senha = "";

}
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
        <form action="Process_Cadastro.php" method="post">
            <h2>Editar Dados Pessoais</h2>
                <label>
                    <p>Nome:</p>
                    <input placeholder="Digite seu Nome" type="text" name="nome" id="nome" value="<?=$nome?>" >
                </label><br>
                <label>
                    <p>Email:</p><input placeholder="Digite seu Email" type="email" name="email" id="email" value="<?=$email?>">
                </label><br>
                <label>
                    <p>Telefone:</p>
                    <input placeholder="DDD Telefone" type="number" name="tel" id="tel" value="<?=$tel?>">
                </label><br>  
                <label>
                    <p>Data de Nascimento:</p>
                    <input id="datanasc" type="date" name="datanasc">
                </label><br>
                <label>
                    <p>Senha:</p>
                    <input placeholder="Digite sua senha" type="password" name="senha" id="senha" value="<?=$senha?>">
                </label><br>
            <a href="Logado.php"> <input type="reset" Value="Cancelar" class="butao"></a>
            <?php
                echo ("<p class='butao'><a href='Excluir.php?id=$id'>Excluir a conta</a>");
             ?>
             
            <input type="submit" Value="Editar" class="butao">
        </form>
    </div> 
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
 
</html>
