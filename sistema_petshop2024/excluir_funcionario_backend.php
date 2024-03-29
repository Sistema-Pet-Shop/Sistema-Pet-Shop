<?php
	error_reporting(0);
	include "conexao.php";
	$matricula=$_POST['matricula'];

	$inserir = mysql_query("DELETE FROM funcionario 
							WHERE matricula ='$matricula'") 
							or die (mysql_error());
	mysql_close ($db);
	include "../consulta/consulta_funcionario.php";
?>
