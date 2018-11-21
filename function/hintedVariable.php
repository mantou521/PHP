<?php
/**
 * Created by PhpStorm.
 * User: hushufeng
 * Date: 2018/11/16
 * Time: 下午12:47
 */

/**
 * @param $unit
 * @param DateInterval ...$intervals
 * @return int
 */
function total_intervals($unit, DateInterval ...$intervals) {
    $time = 0;
    foreach ($intervals as $interval) {
        $time += $interval->$unit;
    }
    return $time;
}

$a = new DateInterval('P1D');
$b = new DateInterval('P2D');
echo total_intervals('d', $a, $b).' days';
