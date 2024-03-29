<?php
	error_reporting(0);
	include "../conexao.php";
	$idfinanceiro=$_POST['idfinanceiro'];

	$excluir = mysql_query("DELETE FROM financeiro 
							WHERE idfinanceiro ='$idfinanceiro'") 
							or die (mysql_error());
	mysql_close ($db);
	include "../consulta/consulta_financeiro.php";
?>
