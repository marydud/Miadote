<?php

if (isset($_POST['submit']) && !empty($_POST['senha']) && !empty($_POST['senha']))
{
    include_once('conexao.php');
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);
} else {
    header('Location: login.php');
}
?>
