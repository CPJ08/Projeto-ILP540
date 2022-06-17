<?php
include("Conecta.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$datanasc = $_POST["datanasc"];
$senha = $_POST["senha"];
$aux = "Location:";

if(!isset($_SESSION)) {
	session_start();
	
	if(isset($_SESSION["id_usuario"])){
		$id = $_SESSION["id_usuario"];
		
		$location = "Location:Logado.php";
		$sql = "UPDATE `usuarios` SET `nome`='$nome', `email`='$email',`tel`='$tel',`datanasc`='$datanasc', `senha`='$senha' WHERE `id`=$id";
		echo "<script>alert('Usuario Ja Cadastrado!');</script>". $e->getMessage();
	}
	else{
		
		$login = $_POST["nome"];
		$location = "Location:Login.php";
		$sql = "INSERT INTO usuarios (`id`, `nome`, `email`, `tel`,`datanasc`, `senha`) VALUES (NULL, '$nome', '$email', '$tel','$datanasc', '$senha')";
	}
}

try {	
	$conn->exec($sql);		
} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

header($location);


?>