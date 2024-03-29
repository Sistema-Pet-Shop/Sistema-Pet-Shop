<?php
	error_reporting(0);
	include "conexao.php";
	$funcionario_matricula=$_POST['funcionario_matricula'];

	$inserir = mysql_query("DELETE FROM funcionario_funcao 
							WHERE funcionario_matricula ='$funcionario_matricula'") 
							or die (mysql_error());
	mysql_close ($db);
	include "../consulta/consulta_funcionario_funcao.php";
?>
