<?php
	error_reporting(0);
	include "../conexao.php";
	$idfornecedor=$_POST['idfornecedor'];

	$excluir = mysql_query("DELETE FROM fornecedor 
							WHERE idfornecedor ='$idfornecedor'") 
							or die (mysql_error());
	mysql_close ($db);
	include "../consulta/consulta_fornecedor.php";
?>
