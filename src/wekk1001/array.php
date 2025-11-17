<?php
function workonArrays($myarray){
    if(array_key_exists(1,$myarray)){
        $myarray[1]='funny';
    }

}
$someArray = array(1,2,3,4,5);
print_r($someArray);
workonArrays($someArray);
print_r($someArray);
?>