<?php
error_reporting(0);
include "conexao.php";

$idpet_raca = $_POST['idpet_raca'];
$descricao = $_POST['descricao'];

$inserir = mysql_query("INSERT INTO pet_raca 
                (idpet_raca,descricao) 
		        VALUES('$idpet_raca','$descricao')") or die(mysql_error());
mysql_close($db);
?>      