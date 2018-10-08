<?php

include('conecxao.php');

$nome = $_POST['nomec'];
$email = $_POST['emailc'];
$senha = $_POST['senhac'];

$insert = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email','$senha')";

$resultado = mysqli_query ($conecxao, $insert); 
	if ($insert) {
			echo "Deu certo o salvamento";
	}

?>