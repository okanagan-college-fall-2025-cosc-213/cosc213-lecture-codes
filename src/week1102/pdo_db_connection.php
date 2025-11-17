<?php
$host = "127.0.0.1";
$port = 3306;   // change this to your actual MySQL port
$dbname = "mydb";
$username = "cosc213";
$password = "pass";

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully!<br>";

    $stmt = $pdo->prepare("SELECT * FROM example");
    // $stmt = $pdo->prepare("SELECT * FROM example WHERE id = ?");
    // $stmt->bindValue(1, 1, PDO::PARAM_INT);

    $stmt->execute();

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
    $pdo = null;

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>