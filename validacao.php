<?php

if(isset($_POST['submit']))

{
	include_once('conexao.php');

		$nome = $_POST['name'];
		$sobrenome = $_POST['lastname'];
		$email = $_POST['email']; 
		$numero = $_POST['number'];
		$senha = $_POST['password'];
		$confirmar_senha = $_POST['password'];
		$genero = $_POST['gender'];

	$result = mysqli_query($conexao, "INSERT INTO usuarios (nome, sobrenome, email, numero, senha, confirmarsenha, genero) VALUES ('$nome', '$sobrenome', '$email', '$numero', '$senha', '$confirmar_senha', '$genero')");
}

?>
