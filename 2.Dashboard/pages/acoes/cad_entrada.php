<?php
session_start();

include_once("conexao2.php");

$valor =  $_POST['valor'];
$descricao = $_POST['descricao'];

	$valor_corrigido = str_replace(",",".",$valor);
	$query = "INSERT INTO entrada(id, descricao, valor) 
	VALUES (default,  '$descricao','$valor_corrigido')";
	$busca = mysqli_query($conexao, $query);

	$_SESSION['msg_cad'] = "<p style='color:green; font-weight: bold;'>ENTRADA CADASTRADO COM SUCESSO!</p>";
	header("Location: ../gastos.php");