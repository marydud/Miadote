<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<header>
		<h1>Agradecemos por seu Cadastro</h1>
		<h3></h3>
	</header>

    <?php


include_once('conexaoo.php');

$nome = filter_input(INPUT_POST,'name' FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST,'lastname' FILTER_SANITIZE_STRING);
$email =  filter_input(INPUT_POST,'email' FILTER_SANITIZE_EMAIL); 
$numero = filter_input(INPUT_POST,'number' FILTER_SANITIZE_INTEGER);
$senha = filter_input(INPUT_POST,'password' FILTER_SANITIZE_STRING);
$ConfirmarSenha = filter_input(INPUT_POST,'confirmpassword' FILTER_SANITIZE_STRING);

echo "Nome: $nome <br>";
echo "Sobrenome: $sobrenome <br>";
echo "E-mail: $email <br>";
echo "Número: $numero <br>";
echo "Senha: $senha <br>";
echo "ConfirmarSenha: $confirmarsenha <br>";

$result_usuario"INSERT INTO usuarios (nome, sobrenome, email, numero, senha, confirmarsenha) VALUES ('$nome', '$sobrenome', '$email', '$numero', '$senha', '$confirmarsenha' NOW())";
?>

<section>
	<h2> Muito obrigado por seu cadastro </h2><br><br>
	<a href="login.html"> << VOLTAR </a>
    <a href="cadastro.html"> << VOLTAR </a>

</section>
</body>
</html>
