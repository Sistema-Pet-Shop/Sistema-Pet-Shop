<?php
	error_reporting(0);
	include "conexao.php";
	$idorcamento=$_POST['idorcamento'];

	$inserir = mysql_query("DELETE FROM orcamento 
							WHERE idorcamento ='$idorcamento'") 
							or die (mysql_error());
	mysql_close ($db);
	include "../consulta/consulta_orcamento.php";
?>
