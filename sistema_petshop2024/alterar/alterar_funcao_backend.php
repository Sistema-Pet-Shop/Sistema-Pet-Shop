<?php
error_reporting(0);
include "../conexao.php";

$idfuncao = $_POST['idfuncao'];
$descricao = $_POST['descricao'];
				
$alterar = mysql_query("UPDATE funcao 
                    SET descricao = '$descricao'
					WHERE idfuncao = '$idfuncao'")
					or die (mysql_error());
mysql_close ($db);
include "../consulta/consulta_funcao.php";
?>