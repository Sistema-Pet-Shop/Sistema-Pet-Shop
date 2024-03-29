<?php
	error_reporting(0);
	include "conexao.php";
	$idpet=$_POST['idpet'];

	$inserir = mysql_query("DELETE FROM pet
							WHERE idpet_raca ='$idpet'") 
							or die (mysql_error());
	mysql_close ($db);
	include "../consulta/consulta_pet.php";
?>
