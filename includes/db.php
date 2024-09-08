<?php
$host = 'myazprosvr.mysql.database.azure.com'; // Database host
$dbname = 'documnet_collaboration_system'; // Database name
$username = 'rani'; // Database username
$password = 'Server@1'; // Database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
