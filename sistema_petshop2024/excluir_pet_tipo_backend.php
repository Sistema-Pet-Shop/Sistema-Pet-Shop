<?php
	error_reporting(0);
	include "conexao.php";
	$idpet_tipo=$_POST['idpet_tipo'];

	$inserir = mysql_query("DELETE FROM pet_tipo
							WHERE idpet_tipo ='$idpet_tipo'") 
							or die (mysql_error());
	mysql_close ($db);
	include "../consulta/consulta_pet_tipo.php";
?>
