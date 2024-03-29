<?php
error_reporting(0);
include "conexao.php";

$idpet_raca = $_POST['idpet_raca'];
$descricao = $_POST['descricao'];


$inserir = mysql_query("UPDATE pet_raca 
					SET descricao = '$descricao'
					WHERE idpet_raca = '$idpet_raca'")
					or die (mysql_error());
mysql_close($db);
include "consulta_pet_raca.php";
?>