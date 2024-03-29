<?php
error_reporting(0);
include "../conexao.php";

$idatendimento = $_POST['idatendimento'];
$pet_idpet = $_POST['pet_idpet'];
$idcliente = $_POST['idcliente'];
$funcionario_veterinario = $_POST['funcionario_veterinario'];
$funcionario_entrada = $_POST['funcionario_entrada'];
$funcionario_saida = $_POST['funcionario_saida'];
$data_hora_entrada = $_POST['data_hora_entrada'];
$data_hora_saida = $_POST['data_hora_saida'];
$descricao = $_POST['descricao'];
				
$alterar = mysql_query("UPDATE atendimento 
                    SET pet_idpet = '$pet_idpet',
						idcliente = '$idcliente', 
						funcionario_veterinario = '$funcionario_veterinario',
						funcionario_entrada = '$funcionario_entrada',
						funcionario_saida = '$funcionario_saida',
						data_hora_entrada = '$data_hora_entrada',
						data_hora_saida = '$data_hora_saida',
						descricao = '$descricao'
					
					WHERE idatendimento = '$idatendimento'")
					or die (mysql_error());
mysql_close ($db);
include "../consulta/consulta_compra_venda.php";
?>