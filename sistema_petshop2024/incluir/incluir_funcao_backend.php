<?php
error_reporting(0);
include "../conexao.php";
$idfuncao = $_POST['idfuncao'];
$descricao = $_POST['descricao'];

$inserir = mysql_query("INSERT INTO funcao 
                (idfuncao,descricao) 
		        VALUES('$idfuncao','$descricao')") or die(mysql_error());

// Verificar se a inserção foi bem-sucedida
if ($inserir) {
    echo "<script>alert('Incluído com sucesso! 🎉'); window.location.href='../incluir.html';</script>";
}

mysql_close($db);
?>