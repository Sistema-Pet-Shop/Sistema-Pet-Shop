<?php
	error_reporting(0);
	include "conexao.php";
	$idcliente=$_POST['idcliente'];

	$inserir = mysql_query("DELETE FROM cliente 
							WHERE idcliente ='$idcliente'") 
							or die (mysql_error());
	mysql_close ($db);
	include "consulta_cliente.php";
?>
