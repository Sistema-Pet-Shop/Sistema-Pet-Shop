<?php
error_reporting(0);
include "../conexao.php";

$idfornecedor = $_POST['idfornecedor'];
$idpessoa = $_POST['idpessoa'];
$nomefantasia = $_POST['nomefantasia'];
$razaosocial = $_POST['razaosocial'];

				
$alterar = mysql_query("UPDATE fornecedor 
                    SET idpessoa = '$idpessoa',
					nomefantasia = '$nomefantasia', 
					razaosocial = '$razaosocial'
					WHERE idfornecedor = '$idfornecedor'")
					or die (mysql_error());

// Verificar se a alteração foi bem-sucedida
if ($alterar) {
    echo "<script>alert('Alterado com sucesso! 🎉'); window.location.href='../alterar.html';</script>";
}

mysql_close ($db);
include "../consulta/consulta_fornecedor.php";
?>