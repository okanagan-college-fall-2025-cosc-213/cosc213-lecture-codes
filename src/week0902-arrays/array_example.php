<?php
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

    $frequency_array = array(1,2,1,4,4,4,4,5,3,7,3, 1);
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
    echo "max key is " . get_array_max($result);
    
    

?>