<?php
// 1️⃣ array_values()
function demo_array_values() {
    $person = ["name" => "Mohamad", "age" => 35, "city" => "Kelowna"];
    $values = array_values($person);
    print_r($values[1]);
}


// 2️⃣ array_rand()
function demo_array_rand() {
    $colors = ["red", "green", "blue", "yellow"];
    $randKey = array_rand($colors);
    echo "Random color: " . $colors[$randKey] . "\n";
}


// 3️⃣ array_reverse()
function demo_array_reverse() {
    $numbers = [1, 2, 3, 4, 5];
    $reversed = array_reverse($numbers);
    print_r($reversed);
}


// 4️⃣ array_walk()
function demo_array_walk() {
    $person = ["name" => "Mohamad", "age" => 35, "city" => "Kelowna"];

    // Callback function to display key/value pairs
    function showValue($value, $key) {
        echo "$key => $value\n";
    }

    array_walk($person, "showValue");
}


// 5️⃣ in_array()
function demo_in_array() {
    $fruits = ["apple", "banana", "cherry"];

    if (in_array("banana", $fruits)) {
        echo "Yes, banana is in the array!\n";
    } else {
        echo "No, banana is not in the array.\n";
    }
}


// 6️⃣ shuffle()
function demo_shuffle() {
    $nums = [1, 2, 3, 4, 5];
    shuffle($nums);
    print_r($nums);
}


// 🔹 Run each demo
// echo " array_values():\n";
// demo_array_values();

// echo "\n array_rand():\n";
// demo_array_rand();

// echo "\n array_reverse():\n";
// demo_array_reverse();

// echo "\n array_walk():\n";
// demo_array_walk();

// echo "\n in_array():\n";
// demo_in_array();

echo "\n shuffle():\n";
demo_shuffle();
?>