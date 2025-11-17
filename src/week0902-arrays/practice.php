<?php
    // We aim to write a code that find the element that has the highest frequency
    function get_array_max($array):int{
        $max_value = 0;
        $max_key = 1;
        foreach($array as $key => $value){
            if($array[$key] > $max_value){
                $max_value = $array[$key];
                $max_key = $key;
            }
        }
        return $max_key;
    }
    $frequency_array = array(1,1,1,1,1,1,1,1,1,2,3,4, 2, 2, 1, 1, 4, 4, 4, 4, 4, 3);
    $result = array();
    # iterate over frequency array and check if the value exists in result
    for ($i = 0; $i < count($frequency_array); $i++) {
        if (array_key_exists($frequency_array[$i], $result)) {
            $result[$frequency_array[$i]] = $result[$frequency_array[$i]] + 1;
        }
        else {
            $result[$frequency_array[$i]] = 1;
        }

    }
    echo get_array_max($result);
   

    //Lets find the element that has maximum frequency
?>