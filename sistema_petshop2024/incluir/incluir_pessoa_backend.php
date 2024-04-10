<?php
error_reporting(0);
include "../conexao.php";
$idpessoa = $_POST['idpessoa'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];

$inserir = mysql_query("INSERT INTO pessoa 
                (idpessoa,nome,idade,telefone) 
		        VALUES('$idpessoa','$nome','$idade','$telefone')") or die(mysql_error());

// Verificar se a inserção foi bem-sucedida
if ($inserir) {
    echo "<script>alert('Incluído com sucesso! 🎉'); window.location.href='../incluir.html';</script>";
}

mysql_close($db);
?>