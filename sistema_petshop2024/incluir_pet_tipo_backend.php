<?php
error_reporting(0);
include "conexao.php";

$idpet_tipo = $_POST['idpet_tipo'];
$descricao = $_POST['descricao'];

$inserir = mysql_query("INSERT INTO pet_tipo 
                (idpet_tipo,descricao) 
		        VALUES('$idpet_tipo','$descricao')") or die(mysql_error());
mysql_close($db);
?>