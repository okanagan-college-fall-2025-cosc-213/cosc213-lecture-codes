<?php
$someVariable = 5;
function changeValue(&$arg) {
    global $someVariable;
    echo "Inside the function". $someVariable;
    $arg = $arg + 100;
    return $arg;
}

echo "the output of the function ". changeValue($someVariable);
echo "\nthe value of someVariable $someVariable";


?>
