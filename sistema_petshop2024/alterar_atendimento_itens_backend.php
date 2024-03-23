<?php
error_reporting(0);
include "conexao.php";

$idservico = $_POST['idservico'];
$idatendimento = $_POST['idatendimento'];
$descricao = $_POST['descricao'];

				
$alterar = mysql_query("UPDATE atendimento_itens 
                    SET idatendimento = '$idatendimento',
					descricao = '$descricao', 
					idservico = '$idservico'")
					or die (mysql_error());
mysql_close ($db);
include "consulta_atendimento_itens.php";
?>