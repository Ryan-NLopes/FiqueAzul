<?php

include_once("conexao.php");

$nome_user = mysqli_real_escape_string($conn, $_POST['Nome_User']);
$email_user = mysqli_real_escape_string($conn, $_POST['Email_User']);
$senha_user = mysqli_real_escape_string($conn, $_POST['Senha_User']);

	$query = "INSERT INTO usuarios (id, nome, email, senha) 
	VALUES (default, '$nome_user', '$email_user', '$senha_user')";
	$busca = mysqli_query($conn, $query);

	$_SESSION['msg_cad'] = "<p style='color:green; font-weight: bold;'>USUÁRIO CADASTRADO COM SUCESSO!</p>";
	header("Location: index.php");

