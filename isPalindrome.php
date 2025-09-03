<?php
    function isPalindrome($str){
        $preparedString = mb_strtolower(preg_replace("/[^a-zA-Z0-9]/",'',$str));
        var_dump(strlen($preparedString));
        if(strlen($str) <= 1) {
            return "It is palidrome";
        }
        $left = 0;
        $right = strlen($preparedString) - 1;
        while ($left < $right){
            if($preparedString[$left] !== $preparedString[$right]) {
                return "It is not palidrome";
            }
            $left++;
            $right--;
        }
        return "It is palidrome";
        var_dump($preparedString);
        // var_dump($preparedString[$left]);
        // var_dump($preparedString[$right]);
    }
    
    $str1 = 'A ma%$n,a pla*n,a can(al, Pa)_nam+$a ';
    $str2 = "a";
    $str3 = "helloh";
    $str4 = "";
    $str5 = " ";
    $result = isPalindrome($str2);
    var_dump($result);
?>