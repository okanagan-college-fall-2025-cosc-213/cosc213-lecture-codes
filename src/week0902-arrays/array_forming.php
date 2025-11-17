<?php
$days = array(); 
$days["a"] = "Mon"; //set 0th key’s value to “Mon”
$days["b"] = "Tue";
$days[] = "something";
// also alternate approach
$daysB = array();
$daysB[] = "Mon"; //set the next sequential value to “Mon”
$daysB[] = "Tue";


print_r($days);
?>