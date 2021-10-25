<?php
session_start();

include_once("conexao2.php");

$nome_user = $_POST['nome'];
$email_user =  $_POST['email'];
$senha_user = $_POST['senha'];


	$query = "INSERT INTO usuarios(id, nome, email, senha) 
	VALUES (default, '$nome_user', '$email_user', '$senha_user')";
	$busca = mysqli_query($conexao, $query);

	$_SESSION['msg_cad'] = "<p style='color:green; font-weight: bold;'>USUÁRIO CADASTRADO COM SUCESSO!</p>";
	header("Location: ../index.php");
