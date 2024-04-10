<?php
error_reporting(0);
include "../conexao.php";

$idpessoa = $_POST['idpessoa'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];

$alterar = mysql_query("UPDATE pessoa 
					SET nome = '$nome',
					idade = '$idade',
					telefone = '$telefone'
					WHERE idpessoa = '$idpessoa'")
					or die (mysql_error());

// Verificar se a alteração foi bem-sucedida
if ($alterar) {
    echo "<script>alert('Alterado com sucesso! 🎉'); window.location.href='../alterar.html';</script>";
}

mysql_close($db);
include "../consulta/consulta_pessoa.php";
?>