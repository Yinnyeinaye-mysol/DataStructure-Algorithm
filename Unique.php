<?php
$arr = [1, 2, 2, 5, 6, 6, 6, 8, 9];
$unique = [];

for ($i = 0; $i < count($arr); $i++) {
    
    $before = array_slice($arr, 0, $i);       // elements before current index
    // var_dump($before);
    $after = array_slice($arr, $i + 1);       // elements after current index
// var_dump($after);
    // // If current element is not in before or after, it's unique
    if (!in_array($arr[$i], $before) && !in_array($arr[$i], $after)) {
        $unique[] = $arr[$i];
    }
    // var_dump($unique);
}

echo "Unique numbers: " . implode(" ", $unique);

?>