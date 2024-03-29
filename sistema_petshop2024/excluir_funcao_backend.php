<?php
	error_reporting(0);
	include "conexao.php";
	$idfuncao=$_POST['idfuncao'];

	$inserir = mysql_query("DELETE FROM funcao 
							WHERE idfuncao ='$idfuncao'") 
							or die (mysql_error());
	mysql_close ($db);
	include "../consulta/consulta_funcao.php";
?>
