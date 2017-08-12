<?php


namespace Cashewdigital\Utilities;


class MathService
{

    public function calculateMedian(array $array)
    {
        sort($array);
        $count = count($array); //total numbers in arrayay
        $middleval = floor(($count-1)/2); // find the middle value, or the lowest middle value
        if($count % 2) { // odd number, middle is the median
            $median = $array[$middleval];
        } else { // even number, calculate avg of 2 medians
            $low = $array[$middleval];
            $high = $array[$middleval+1];
            $median = (($low+$high)/2);
        }
        return $median;
    }

}