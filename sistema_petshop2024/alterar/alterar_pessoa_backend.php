<?php
error_reporting(0);
include "../conexao.php";

$idpessoa = $_POST['idpessoa'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];

$alterar = mysql_query("UPDATE pessoa 
					SET nome = '$nome',
					SET idade = '$idade',
					SET telefone = '$telefone'
					WHERE idpessoa = '$idpessoa'")
					or die (mysql_error());
mysql_close($db);
include "../consulta/consulta_pessoa.php";
?>