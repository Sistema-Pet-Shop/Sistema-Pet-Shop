<?php
	error_reporting(0);
	include "../conexao.php";
	$idatendimento=$_POST['idatendimento'];

	$excluir = mysql_query("DELETE FROM atendimento 
							WHERE idatendimento ='$idatendimento'") 
							or die (mysql_error());
	mysql_close ($db);
	include "../consulta/consulta_atendimento.php";
?>

