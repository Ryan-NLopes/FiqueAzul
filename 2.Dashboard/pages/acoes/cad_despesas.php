<?php
session_start();

include_once("conexao2.php");

$tipo_gasto = $_POST['tipo'];
$valor =  $_POST['valor'];
$descricao = $_POST['descricao'];


	$query = "INSERT INTO gastos(id, tipoGasto, valor, descricao) 
	VALUES (default, '$$tipo_gasto', '$valor', '$descricao')";
	$busca = mysqli_query($conexao, $query);

	$_SESSION['msg_cad'] = "<p style='color:green; font-weight: bold;'>USUÁRIO CADASTRADO COM SUCESSO!</p>";
	header("Location: ../gastos.php");