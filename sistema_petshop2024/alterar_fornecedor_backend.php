<?php
error_reporting(0);
include "conexao.php";

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
mysql_close ($db);
include "consulta_fornecedor.php";
?>