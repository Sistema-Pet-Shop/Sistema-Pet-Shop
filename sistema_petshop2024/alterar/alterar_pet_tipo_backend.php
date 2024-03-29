<?php
error_reporting(0);
include "../conexao.php";

$idpet_tipo = $_POST['idpet_tipo'];
$descricao = $_POST['descricao'];


$alterar = mysql_query("UPDATE pet_tipo 
					SET descricao = '$descricao'
					WHERE idpet_tipo = '$idpet_tipo'")
					or die (mysql_error());
mysql_close($db);
include "../consulta/consulta_pet_tipo.php";
?>