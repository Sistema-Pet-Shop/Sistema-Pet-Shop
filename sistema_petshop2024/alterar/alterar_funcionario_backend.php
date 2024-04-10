<?php
error_reporting(0);
include "../conexao.php";

$matricula=$_POST['matricula'];
$funcao_idfuncao=$_POST['funcao_idfuncao'];
$data_admissao=$_POST['data_admissao'];
$data_demissao=$_POST['data_demissao'];
$pessoa_idpessoa=$_POST['pessoa_idpessoa'];
				
$alterar = mysql_query("UPDATE funcionario 
                    SET funcao_idfuncao = '$funcao_idfuncao',
					data_admissao = '$data_admissao', 
					data_demissao = '$data_demissao',
					pessoa_idpessoa = '$pessoa_idpessoa'
					WHERE matricula = '$matricula'")
					or die (mysql_error());
				
// Verificar se a alteração foi bem-sucedida
if ($alterar) {
    echo "<script>alert('Alterado com sucesso! 🎉'); window.location.href='../alterar.html';</script>";
}

mysql_close ($db);
include "../consulta/consulta_funcionario.php";
?>