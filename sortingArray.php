<?php

$numbers = [50,15,30,5,20,10,35,45,25,40];
// $numbers = [50];

function sorting($numbers) {
    if(empty($numbers)) return ['message' => 'There is no array'];
    if (count($numbers) <= 1) return $numbers;
    $n = count($numbers);
    for($i = 0; $i < $n - 1; $i++) {
        echo "for i". "\n";
        echo $i. "\n";
        $swapped = false;
        for($j = 0; $j < $n-$i-1; $j++){
            if($numbers[$j] < $numbers[$j+1]) {
                [$numbers[$j],$numbers[$j+1]] = [$numbers[$j+1],$numbers[$j]];
                $swapped = true;
            }
        }
        if(!$swapped) break;
    }
    return $numbers;
}

$result = sorting($numbers);

var_dump($numbers);
?>