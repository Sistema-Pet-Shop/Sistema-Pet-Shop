<?php
error_reporting(0);
include "../conexao.php";

$funcionario_matricula = $_POST['funcionario_matricula'];
$funcao_idfuncao = $_POST['funcao_idfuncao'];

$alterar = mysql_query("UPDATE funcionario_funcao 
					SET funcao_idfuncao = '$funcao_idfuncao'
					WHERE funcionario_matricula = '$funcionario_matricula'")
					or die (mysql_error());
mysql_close($db);
include "../consulta/consulta_funcionario_funcao.php";
?>