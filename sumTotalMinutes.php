<?php
    function getTotalMinutes($str){
        $times = explode('-',$str);
        foreach($times as $time) {
            $amOrPm  = substr($time,-2);
            $hourMinute = substr($time,0,-2);
            list($hour,$minutes) = explode(':',$hourMinute);
            $totalTime[] = ($hour * 60) + $minutes;
        }
        //message
        return $totalTime[1] - $totalTime[0];
    }
    
    $result = getTotalMinutes("10:00am-12:00am");
    var_dump($result);
?>