<?php
	error_reporting(0);
	include "../conexao.php";
	$idservico=$_POST['idservico'];

	$excluir = mysql_query("DELETE FROM atendimento_itens 
							WHERE idservico ='$idservico'") 
							or die (mysql_error());
	mysql_close ($db);
	include "../consulta/consulta_atendimento_itens.php";
?>
