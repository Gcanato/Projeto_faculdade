<?php
	include "conexao.php";

	$nome = $_REQUEST['txtnome'];
	$email = $_REQUEST['txtemail'];
	$senha = $_REQUEST['txtsenha'];
	
	$insereDados = mysqli_query($conn, "INSERT INTO funcionario (nome, Email, senha) 
	VALUES ('$nome', '$email', '$senha')") or die (mysql_error());
	if($insereDados != ""){

		echo 'Cadastrado com sucesso!!!';

	}else{

		echo 'Não cadastrado!!!';
	}
?>