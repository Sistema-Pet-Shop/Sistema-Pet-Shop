<?php
#$db = mysql_connect("root");
#mysql_select_db("sistema_petshop2024", $db);

// Configurações de conexão com o banco de dados
$hostname = "localhost";  // Endereço do servidor MySQL
$username = "root";       // Nome de usuário do MySQL
$password = "";   // Senha do MySQL
$database = "sistema_petshop2024";  // Nome do banco de dados

// Conectando ao banco de dados usando mysqli
$db = new mysql($hostname, $username, $password, $database);

// Verificar a conexão
if ($db->connect_error) {
    die("Falha ao conectar ao MySQL: " . $db->connect_error);
}

// Exemplo de consulta
$query = "SELECT * FROM atendimento";
$result = $db->query($query);

// Verificar se a consulta foi bem-sucedida
if ($result) {
    // Processar os resultados
    while ($row = $result->fetch_assoc()) {
        // Fazer algo com os dados
    }
} else {
    echo "Erro na consulta: " . $db->error;
}

// Fechar a conexão
$db->close();

?>

