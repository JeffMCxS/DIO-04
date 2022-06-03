<?php

declare(strict_types=1);

$pdo = null;

try {
    $pdo = new PDO('mysql:host=localhost;dbname=database-pdo', 'root', '');
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

return $pdo;

/*
<?php

$hostname = "localhost";
$bancodedados = "database-pdo";
$usuario = "root";
$senha = "";

$mysql = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysql->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
*/
