<?php
// function must_return_stirng(): string{
//     return "hello";
// }
// echo must_return_stirng();
function getNiceTime($message, $showSeconds =true) {
    if($showSeconds == true)
        {return date("H:i:s");}
    else 
        {return date("H:i");}
    
}
echo getNiceTime(false);
// $someVar = 2;
// function manipulateVar(&$var) {
//     $var +=1;
// }
// echo manipulateVar($someVar);
// echo "\n";
// echo $someVar;
?>