<?php
$host = "127.0.0.1";     // IMPORTANT: avoid localhost (socket issues)
$port = 3306;            // change if needed
$username = "cosc213";
$password = "pass";
$dbname = "mydb";

// 1. Create connection
$conn = new mysqli($host, $username, $password, $dbname, $port);

// 2. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!<br>";

// 3. Run SELECT query
$sql = "SELECT * FROM example";
$result = $conn->query($sql);

// 4. Display results
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
} else {
    echo "No rows found.";
}

// 5. Close connection
$conn->close();
?>