<?php

if(isset($_POST['continue-button']))

{
	include_once('conexaoo.php');

		$nome = $_POST['name'];
		$sobrenome =  $_POST['lastname'];
		$email = $_POST['email']; 
		$numero = $_POST['number'];
		$senha = $_POST['password'];
		$confirmarsenha = $_POST['confirmpassword'];
		$genero = $_POST['gender'];

	$result = mysqli_query($conexao, "INSERT INTO usuarios (nome, sobrenome, email, numero, senha, confirmarsenha, genero) VALUES ('$nome', '$sobrenome', '$email', '$numero', '$senha', '$confirmarsenha', '$genero')");
}

?>
