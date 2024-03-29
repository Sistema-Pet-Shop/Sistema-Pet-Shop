<?php
error_reporting(0);
include "conexao.php";

$idcliente = $_POST['idcliente'];
$idpessoa = $_POST['idpessoa'];
$cpf_cnpj = $_POST['cpf_cnpj'];

$inserir = mysql_query("UPDATE cliente 
					SET idpessoa = '$idpessoa',
					cpf_cnpj = '$cpf_cnpj'
					WHERE idcliente = '$idcliente'")
					or die (mysql_error());
mysql_close($db);
include "../consulta/consulta_cliente.php";
?>