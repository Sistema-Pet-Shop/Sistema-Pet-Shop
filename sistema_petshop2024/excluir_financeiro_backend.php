<?php
	error_reporting(0);
	include "conexao.php";
	$idfinanceiro=$_POST['idfinanceiro'];

	$inserir = mysql_query("DELETE FROM financeiro 
							WHERE idfinanceiro ='$idfinanceiro'") 
							or die (mysql_error());
	mysql_close ($db);
	include "consulta_financeiro.php";
?>
