<?php
$host = "127.0.0.1";     // IMPORTANT: avoid localhost (socket issues)
$port = 3306;            // change if needed
$username = "cosc213";
$password = "pass";
$dbname = "mydb";

// 1. Create connection
$conn = mysqli_connect($host, $username, $password, $dbname, $port);

// 2. Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully!<br>";

// 3. Run SELECT query
$sql = "SELECT * FROM example";
$result = mysqli_query($conn, $sql);

// 4. Display results
if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
} else {
    echo "No rows found.";
}

// 5. Close connection
mysqli_free_result($result);
mysqli_close($conn);
?>