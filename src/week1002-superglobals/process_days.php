<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Server received the following data:</h2>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

if (isset($_GET['day'])) {
    echo "<h3>Debug Output:</h3>";

    // If "day" is an array, list all selected days
    if (is_array($_GET['day'])) {
        echo "You selected multiple days:<br>";
        foreach ($_GET['day'] as $d) {
            echo htmlspecialchars($d) . "<br>";
        }
    } else {
        // Otherwise, it's just a single string
        echo "You selected only one day: " . htmlspecialchars($_GET['day']);
    }
} else {
    echo "<p>No day selected.</p>";
}
?>