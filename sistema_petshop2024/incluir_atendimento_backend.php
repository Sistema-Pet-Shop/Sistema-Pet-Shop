<?php
error_reporting(0);
include "conexao.php";

$idatendimento = $_POST['idatendimento'];
$pet_idpet = $_POST['pet_idpet'];
$idcliente = $_POST['idcliente'];
$funcionario_veterinario = $_POST['funcionario_veterinario'];
$funcionario_entrada = $_POST['funcionario_entrada'];
$funcionario_saida = $_POST['funcionario_saida'];
$data_hora_entrada = $_POST['data_hora_entrada'];
$data_hora_saida = $_POST['data_hora_saida'];
$descricao = $_POST['descricao'];

$inserir = mysql_query("INSERT INTO atendimento
                (idatendimento, pet_idpet,idcliente, funcionario_veterinario, funcionario_entrada, funcionario_saida,data_hora_entrada,data_hora_saida) 
		        VALUES('$idatendimento','$pet_idpet', '$idcliente', '$funcionario_veterinario', '$funcionario_entrada', '$funcionario_saida','$data_hora_entrada','$data_hora_saida')") or die(mysql_error());
mysql_close($db);
?>