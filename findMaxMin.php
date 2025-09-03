<?php

$numbers = [57, 91, 66, 84, 65, 62, 69, 71, 25, 73,32, 64, 20, 60, 15, 30, 37, 46, 21, 19];
// $numbers = [];

function findMaxMin($numbers) {
    
    if(empty($numbers)) {
        return [
            'max' => null,
            'min' => null
        ];
    }

    $maxNumber = $numbers[0];
    $minNumber = $numbers[0];


    foreach($numbers as $eachNumber) {
        if($eachNumber < $minNumber) {
            $minNumber = $eachNumber;
        }
        if($eachNumber > $maxNumber) {
            $maxNumber = $eachNumber;
        }
    }
    return [
       'max' => $maxNumber,
        'min' => $minNumber
    ];
}

$getMaxMinNumber = findMaxMin($numbers);
echo "Max Number is " .$getMaxMinNumber['max']. "\n";
echo "Min Number is ".$getMaxMinNumber['min'];

?>