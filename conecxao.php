<?php

$conecxao = new mysqli('localhost', 'root', '', 'banco_virtual');

if (mysqli_connect_errno()) {

	die("houve o seguinte erro:".mysqli_connect_errno());
}else{
	echo "banco conectado";
}

?>