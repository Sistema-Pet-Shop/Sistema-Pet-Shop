<?php
error_reporting(0);
include "../conexao.php";

$idpet = $_POST['idpet'];
$tipo = $_POST['tipo'];
$idade = $_POST['idade'];
$raca_idraca = $_POST['raca_idraca'];
$cliente_idcliente = $_POST['cliente_idcliente'];
$pet_tipo_idpet_tipo = $_POST['pet_tipo_idpet_tipo'];

$alterar = mysql_query("UPDATE pet 
					SET tipo = '$tipo',
					SET idade = '$idade',
					SET raca_idraca = '$raca_idraca',
					SET cliente_idcliente = '$cliente_idcliente',
					SET pet_tipo_idpet_tipo = '$pet_tipo_idpet_tipo'
					WHERE idpet = '$idpet'")
					or die (mysql_error());
mysql_close($db);
include "../consulta/consulta_pet.php";
?>