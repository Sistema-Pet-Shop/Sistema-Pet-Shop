<?php
error_reporting(0);
include "conexao.php";

$idpet = $_POST['idpet'];
$cliente_idcliente = $_POST['cliente_idcliente'];
$raca_idraca = $_POST['raca_idraca'];
$pet_tipo_idpet_tipo = $_POST['pet_tipo_idpet_tipo'];
$tipo = $_POST['tipo'];
$idade = $_POST['idade'];

$inserir = mysql_query("INSERT INTO pet 
                (idpet, cliente_idcliente,raca_idraca, pet_tipo_idpet_tipo, tipo, idade) 
		        VALUES('$idpet','$cliente_idcliente', '$raca_idraca', '$pet_tipo_idpet_tipo', '$tipo', '$idade')") or die(mysql_error());
mysql_close($db);
?>