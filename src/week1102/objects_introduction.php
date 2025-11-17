<?php
class Car {
    public $brand; // property

    public function drive() { // method
        echo "Driving...";
    }
}

$car = new Car(); // create object
$car->brand = "Toyota"; // set property
echo $car->brand." \n";       // Output: Toyota
$car->drive();          // Output: Driving...

$car2 = $car;

echo "\nchecking the brand of car2: ".$car2->brand;
echo "\nchecking the brand of car: ".$car->brand;

echo "\nLets change the brand of second car\n";
$car2->brand = "Nisan";

echo "\nchecking the brand of car2: ".$car2->brand;
echo "\nchecking the brand of car: ".$car->brand;

?>