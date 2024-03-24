<?php
	error_reporting(0);
	include "conexao.php";
	$idfornecedor=$_POST['idfornecedor'];

	$inserir = mysql_query("DELETE FROM fornecedor 
							WHERE idfornecedor ='$idfornecedor'") 
							or die (mysql_error());
	mysql_close ($db);
	include "consulta_fornecedor.php";
?>
