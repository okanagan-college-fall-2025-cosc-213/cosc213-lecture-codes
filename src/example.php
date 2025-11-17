<?php
$firstName = "Pablo";
$lastName = "Picasso";
echo "<img src='23.jpg' alt='" . $firstName . " " . $lastName . "' >\n";
# outputs:
# <img src='23.jpg' alt='Pablo Picasso' >

$id = "23";
echo "<img src='$id.jpg' alt='$firstName $lastName' >\n";

echo "<img src=\"$id.jpg\" alt=\"$firstName $lastName\" >\n";

echo '<img src="' . $id . '.jpg" alt="' . $firstName . ' ' . $lastName . '" >';
?>