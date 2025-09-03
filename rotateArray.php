<?php
$numbers = [57, 32, 64, 20, 60, 15, 30, 37, 46, 21, 19];
// $numbers = [];

function rotateArray($numbers) {
    if(empty($numbers)) {
        return [ 
            "msg" => "Array is empty"
        ];
    }

    $lastValue = $numbers[count($numbers) - 1];

    // for($i = count($numbers) - 1 ; $i > 0 ; $i--) {
    //     $numbers[$i] = $numbers[$i -1];
    // }
    // $numbers[0] = $lastValue;
    // return $numbers;
    
    
    array_pop($numbers);
    array_unshift($numbers,$lastValue);
    return $numbers;
}

$result = rotateArray($numbers);
var_dump($result)

?>