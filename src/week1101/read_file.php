<?php

$csvFile = 'example.csv'; // Path to your CSV file

// Check if the file exists
if (!file_exists($csvFile)) {
    die("CSV file not found.");
}

// Open the file for reading
if (($handle = fopen($csvFile, "r")) !== false) {

    echo "<h3>Reading CSV File:</h3>";

    // Loop through rows
    while (($row = fgetcsv($handle, 1000, ",")) !== false) {

        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }

    // Close the file
    fclose($handle);

} else {
    echo "Failed to open the file.";
}

?>