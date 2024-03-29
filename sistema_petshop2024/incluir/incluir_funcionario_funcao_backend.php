<?php
error_reporting(0);
include "../conexao.php";
$funcionario_matricula = $_POST['funcionario_matricula'];
$funcao_idfuncao = $_POST['funcao_idfuncao'];

$inserir = mysql_query("INSERT INTO funcionario_funcao 
                (funcionario_matricula,funcao_idfuncao) 
		        VALUES('$funcionario_matricula','$funcao_idfuncao')") or die(mysql_error());
mysql_close($db);
?>