<?php
error_reporting(0);
include "../conexao.php";
$idcliente = $_POST['idcliente'];
$idpessoa = $_POST['idpessoa'];
$cpf_cnpj = $_POST['cpf_cnpj'];

$inserir = mysql_query("INSERT INTO cliente 
                (idcliente,idpessoa,cpf_cnpj) 
		        VALUES('$idcliente','$idpessoa','$cpf_cnpj')") or die(mysql_error());

// Verificar se a inserção foi bem-sucedida
if ($inserir) {
    echo "<script>alert('Atendimento incluído com sucesso!'); window.location.href='../incluir.html';</script>";
}

mysql_close($db);
?>