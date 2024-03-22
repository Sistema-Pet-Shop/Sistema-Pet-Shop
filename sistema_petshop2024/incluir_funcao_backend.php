<?php
error_reporting(0);
include "conexao.php";
$idfuncao = $_POST['idfuncao'];
$descricao = $_POST['descricao'];

$inserir = mysql_query("INSERT INTO funcao 
                (idfuncao,descricao) 
		        VALUES('$idfuncao','$descricao')") or die(mysql_error());
mysql_close($db);
?>