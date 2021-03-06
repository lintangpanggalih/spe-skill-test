<?php

function main()
{
    $spe = new SpeSkillTest();

    $spe->narcissisticNumber(135);
    $spe->narcissisticNumber(153);

    $spe->parityOutlier([2, 4, 0, 100, 4, 11, 2602, 36]);
    $spe->parityOutlier([11, 13, 15, 19, 9, 13, -21]);

    $spe->findNeedle(["red", "blue", "yellow", "black", "grey"], "blue");

    $spe->blueOcean([1,2,3,4,6,10], [1,4]);
}
main();

class SpeSkillTest
{
    private static function countDigit($number)
    {
        $size = 0;
        while ($number != 0) {
            $number = intval($number / 10);
            $size++;
        }
        return $size;
    }
    public static function narcissisticNumber($number)
    {
        echo 'narcissistic number : ';
        $size = static::countDigit($number);
        $auxiliary = $number;

        $result = 0;
        $digit = 0;
        while ($auxiliary != 0) {
            //last digit 
            $digit = $auxiliary % 10;
            //remove last digit
            $auxiliary =  intval($auxiliary / 10);
            //Add power of digit of number size
            $result = (pow($digit, $size)) + $result;
        }
        var_dump($result == $number ? true : false);
    }

    public static function parityOutlier($array)
    {
        echo 'parity outlier : ';
        if (sizeof($array) <= 3) {
            return var_dump(false);
        }
        $even = 0;
        $odd = 0;
        $cycle = 0;

        foreach ($array as $value) {
            if ($value % 2 == 0) {
                $cycle++;
                $even = $value;
            } else {
                $odd = $value;
            }
        }
        var_dump(($cycle > 1) ? $odd : $even);
    }

    public static function findNeedle($array, $needle)
    {
        echo 'needle : ';
        foreach ($array as $haystack) {
            if (strpos($haystack, $needle) !== false) {
               return var_dump(true);
            }
        }
        return var_dump(false);
    }

    public static function blueOcean($array, $should_removed)
    {
        echo 'blue ocean : ';
        print_r(implode(', ',array_diff($array,$should_removed)));
        // var_dump($array);
    }
}
