<?php
session_start();
require 'conexao.php';
$nome = $_POST['nomec'];
$email = $_POST['emailc'];
$senha = $_POST['senhac'];

$cryp = md5($senha);

$insert = "INSERT INTO usuarios(nome,email,senha)VALUES('$nome', '$email', '$cryp')";
$query = $conexao=query($insert);
$_SESSION['cadsucess'] = "Cadastro feito com sucesso";
header("Location: index.php");
?>