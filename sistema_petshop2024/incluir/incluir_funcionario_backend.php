<?php
error_reporting(0);
include "../conexao.php";
$matricula = $_POST['matricula'];
$pessoa_idpessoa = $_POST['pessoa_idpessoa'];
$funcao_idfuncao = $_POST['funcao_idfuncao'];
$data_admissao = $_POST['data_admissao'];
$data_demissao = $_POST['data_demissao'];

$inserir = mysql_query("INSERT INTO funcionario 
                (matricula,pessoa_idpessoa,funcao_idfuncao,data_admissao,data_demissao) 
		        VALUES('$matricula','$pessoa_idpessoa','$funcao_idfuncao',
				'$data_admissao','$data_demissao')") or die(mysql_error());

// Verificar se a inserção foi bem-sucedida
if ($inserir) {
    echo "<script>alert('Incluído com sucesso! 🎉'); window.location.href='../incluir.html';</script>";
}

mysql_close($db);
?>