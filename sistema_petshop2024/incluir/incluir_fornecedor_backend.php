<?php
error_reporting(0);
include "../conexao.php";
$idfornecedor = $_POST['idfornecedor'];
$idpessoa = $_POST['idpessoa'];
$nomefantasia = $_POST['nomefantasia'];
$razaosocial = $_POST['razaosocial'];

$inserir = mysql_query("INSERT INTO fornecedor 
                (idfornecedor,idpessoa,nomefantasia,razaosocial) 
		        VALUES('$idfornecedor','$idpessoa','$nomefantasia','$razaosocial')") or die(mysql_error());

// Verificar se a inserção foi bem-sucedida
if ($inserir) {
    echo "<script>alert('Incluído com sucesso! 🎉'); window.location.href='../incluir.html';</script>";
}

mysql_close($db);
?>