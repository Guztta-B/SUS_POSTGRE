
<?php

$host = "aws-0-us-east-1.pooler.supabase.com";
$port = "5432";
$db_name = "postgres";
$username = "postgres.fbeqawwswkygqxsoavys";
$password = "Davi@2014GUGABONA2007";

try {
    $conn = new PDO(
        "pgsql:host=$host;port=$port;dbname=$db_name;sslmode=require",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

} catch (PDOException $exception) {
    error_log("Erro de conexão: " . $exception->getMessage());

    http_response_code(500);
    echo "Erro ao conectar ao banco de dados.";
    exit();
}
?>
