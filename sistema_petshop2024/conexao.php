<?php
// $db = mysql_connect("root");
// mysql_select_db("sistema_petshop2024", $db);

$hostname = "localhost";
$username = "root";
$password = "vertrigo";
$database = "sistema_petshop2024";

// Conexão com o banco de dados usando mysql
$db = mysql_connect($hostname, $username, $password);

// Verificando se a conexão foi estabelecida
if (!$db) {
    die("Erro ao conectar ao banco de dados: " . mysql_error());
}

// Selecionando o banco de dados
$db_selected = mysql_select_db($database, $db);

// Verificando se o banco de dados foi selecionado corretamente
if (!$db_selected) {
    die("Erro ao selecionar o banco de dados: " . mysql_error());
}
?>
