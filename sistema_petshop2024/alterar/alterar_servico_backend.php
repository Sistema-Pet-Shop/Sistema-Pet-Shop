<?php
error_reporting(0);
include "../conexao.php";

$idservico = $_POST['idservico'];
$nome = $_POST['nome'];


$alterar = mysql_query("UPDATE servico 
					SET nome = '$nome'
					WHERE idservico = '$idservico'")
					or die (mysql_error());
mysql_close($db);
include "../consulta/consulta_servico.php";
?>