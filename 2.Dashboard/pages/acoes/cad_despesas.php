<?php
session_start();

include_once("conexao2.php");

$tipo = $_POST['tipo'];
$valor =  $_POST['valor'];
$descricao = $_POST['descricao'];

	$valor_corrigido = str_replace(",",".",$valor);
	$query = "INSERT INTO gastos(id, tipo, valor, descricao) 
	VALUES (default, '$tipo', '$valor_corrigido', '$descricao')";
	$busca = mysqli_query($conexao, $query);

	$_SESSION['msg_cad'] = "<p style='color:green; font-weight: bold;'>DESPESA CADASTRADO COM SUCESSO!</p>";
	header("Location: ../gastos.php");