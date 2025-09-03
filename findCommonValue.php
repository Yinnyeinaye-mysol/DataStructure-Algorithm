<?php
    function findCommonValue($arr1,$arr2,$arr3) {
        sort($arr1);
        sort($arr2);
        sort($arr3);
        $i = 0;
        $j = 0;
        $k = 0;
        $result = [];
        while ($i < count($arr1) && $j < count($arr2) && $k < count($arr3)) {
            if($arr1[$i] === $arr2[$j] && $arr2[$j] === $arr3[$k]) {
                array_push($result,$arr1[$i]);
                $i++;
                $j++;
                $k++;
            } else if ($arr1[$i] < $arr2[$j]) {
                $i++;
            } else if ($arr2[$j] < $arr3[$k]) {
                $j++;
            } else {
                $k++;
            }
        }
        return $result;
    }
    // $arr1 = [20,13,80,63,71,94];
    // $arr2 =[12,51,64,20,36,80];
    // $arr3 =[80,23,51,72,91,20];
    
    // $arr1 = [13,20,63,71,80,94];
    // $arr2 =[12,20,36,51,64,80];
    // $arr3 =[20,23,51,72,80,91];
    
    $arr1 = [20,19,40,60,80];
    $arr2 = [80,20,90,19];
    $arr3 =[80,20,19];
    $result = findCommonValue($arr1,$arr2,$arr3);
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    $result = array_intersect($arr1,$arr2,$arr3);
    var_dump($result);

?>