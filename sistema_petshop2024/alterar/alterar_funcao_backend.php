<?php
error_reporting(0);
include "../conexao.php";

$idfuncao = $_POST['idfuncao'];
$descricao = $_POST['descricao'];
				
$alterar = mysql_query("UPDATE funcao 
                    SET descricao = '$descricao'
					WHERE idfuncao = '$idfuncao'")
					or die (mysql_error());

// Verificar se a alteração foi bem-sucedida
if ($alterar) {
    echo "<script>alert('Alterado com sucesso! 🎉'); window.location.href='../alterar.html';</script>";
}

mysql_close ($db);
include "../consulta/consulta_funcao.php";
?>