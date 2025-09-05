<?php
    function getTotalMinutes($str){
        $times = explode('-',$str);
        foreach($times as $time) {
            $amOrPm  = substr($time,-2);
            $hourMinute = substr($time,0,-2);
            list($hour,$minutes) = explode(':',$hourMinute);
            $totalTime[] = ($hour * 60) + $minutes;
        }
        return $totalTime[1] - $totalTime[0];
    }
    
    $result1 = getTotalMinutes("10:00am-12:00am");
    $result2 = getTotalMinutes("12:30pm-12:00am");
    $result3 = getTotalMinutes("1:30pm-12:00am");
    var_dump($result);
?>