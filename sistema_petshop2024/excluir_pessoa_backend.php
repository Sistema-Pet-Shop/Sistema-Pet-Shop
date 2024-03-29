<?php
	error_reporting(0);
	include "conexao.php";
	$idpessoa=$_POST['idpessoa'];

	$inserir = mysql_query("DELETE FROM pessoa 
							WHERE idpessoa ='$idpessoa'") 
							or die (mysql_error());
	mysql_close ($db);
	include "../consulta/consulta_pessoa.php";
?>
