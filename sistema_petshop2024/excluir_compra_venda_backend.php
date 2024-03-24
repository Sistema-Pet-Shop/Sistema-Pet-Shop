<?php
	error_reporting(0);
	include "conexao.php";
	$idcompra_venda=$_POST['idcompra_venda'];

	$inserir = mysql_query("DELETE FROM compra_venda 
							WHERE idcompra_venda ='$idcompra_venda'") 
							or die (mysql_error());
	mysql_close ($db);
	include "consulta_compra_venda.php";
?>
