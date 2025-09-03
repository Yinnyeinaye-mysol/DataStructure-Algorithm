<?php

// $num = [1,5,1,3,5,1,9,2,7,7,7];
// $unique = array_count_values($num);
//     foreach($unique as $value => $num){
//         if($num > 1) {
//             $dupArray[] = $value;
//         }
//     }
// var_dump($dupArray);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// var_dump($num);
// sort($num);
// // var_dump($num);
// $i = 0;
// $num = [1,1,1,2,3,5,5,7,7,7,9];
// while ($i < count($num)) {
//     $first = array_search($num[$i],$num);
//     $last = count($num) -1 - array_search($num[$i],array_reverse($num));
//     echo "number =>".$num[$i]. "\n";
//     echo "first => ".$first. "\n";
//     echo "last => ".$last. "\n";
//     if($last > $first) {
//         $result[] = $num[$i];
//     }
//     $i = $last + 1;
// }
// var_dump($result);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// $result = [];
// $num = [1,5,1,3,5,1,9,2,7,7,7];
// for($i = 0; $i < count($num); $i++){
//     // echo "for i \n";
//     // echo $i."\n";
//     for($j = $i + 1; $j < count($num); $j++){
//         // echo "for j \n";
//         // echo $j."\n";
//         if($num[$i] === $num[$j]){
//             if(!in_array($num[$i],$result)){
//                 array_push($result,$num[$i]);
//             }
//             break;
//         }
//     } 
// }
// var_dump($result);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$num = [1,5,1,3,5,1,9,2,7,7,7];
$seen = [];
$duplicates = [];

foreach ($num as $n) {
    // var_dump($seen[$n]);
    echo $n."\n";
    var_dump(isset($seen[$n]));
    if (isset($seen[$n])) {
        $duplicates[$n] = ($duplicates[$n] ?? 1) + 1;
    }
    $seen[$n] = true;
}

// foreach ($duplicates as $val => $count) {
//     echo "$val appears $count times\n";
// }

foreach ($seen as $val => $count) {
    echo "$val appears $count times\n";
}



?>