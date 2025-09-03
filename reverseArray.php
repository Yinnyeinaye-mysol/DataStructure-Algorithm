<?php
$numbers = [57, 32, 64, 20, 60,   15,   30, 37, 46, 21, 19];


function reverseArray($numbers) {
    if(empty($numbers)) {
        return [ 
            "msg" => "Array is empty"
        ];
    }

    $left = 0;
    $right = count($numbers) - 1;

    while($left < $right) {
        // $temp = $numbers[$left];
        // $numbers[$left] = $numbers[$right];
        // $numbers[$right] = $temp;
        [$numbers[$left],$numbers[$right]] = [$numbers[$right],$numbers[$left]];
        $left++;
        $right--;
    }
    return $numbers;
}
$result = reverseArray($numbers);
var_dump($result)

?>