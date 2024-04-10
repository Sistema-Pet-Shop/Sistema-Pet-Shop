<?php
error_reporting(0);
include "../conexao.php";

$idcliente = $_POST['idcliente'];
$idpessoa = $_POST['idpessoa'];
$cpf_cnpj = $_POST['cpf_cnpj'];

$alterar = mysql_query("UPDATE cliente 
					SET idpessoa = '$idpessoa',
					cpf_cnpj = '$cpf_cnpj'
					WHERE idcliente = '$idcliente'")
					or die (mysql_error());

// Verificar se a alteração foi bem-sucedida
if ($alterar) {
    echo "<script>alert('Alterado com sucesso! 🎉'); window.location.href='../alterar.html';</script>";
}

mysql_close($db);
include "../consulta/consulta_cliente.php";
?>