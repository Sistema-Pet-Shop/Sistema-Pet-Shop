<?php
	error_reporting(0);
	include "conexao.php";
	$idatendimento=$_POST['idatendimento'];

	$inserir = mysql_query("DELETE FROM atendimento 
							WHERE idatendimento ='$idatendimento'") 
							or die (mysql_error());
	mysql_close ($db);
	include "consulta_atendimento.php";
?>
