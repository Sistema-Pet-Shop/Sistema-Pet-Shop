<?php
error_reporting(0);
include "conexao.php";

$idatendimento = $_POST['idatendimento'];
$data_hora_entrada = $_POST['data_hora_entrada'];
$data_hora_saida = $_POST['data_hora_saida'];
$descricao = $_POST['descricao'];
$pet_idpet = $_POST['pet_idpet'];

$alterar = mysql_query("UPDATE atendimento 
                    SET idatendimento = '$idatendimento1',
					data_hora_entrada = '$data_hora_entrada',
					data_hora_saida = '$data_hora_saida', 
					descricao= '$descricao',
					pet_idpet= '$pet_idpet',

					WHERE idatendimento = '$idatendimento'")
	or die(mysql_error());
mysql_close($db);
include "consulta_orcamento.php";
