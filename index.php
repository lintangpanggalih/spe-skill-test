<?php

function main()
{
    $spe = new SpeSkillTest();

    $spe->narcissisticNumber(135);
    $spe->narcissisticNumber(153);
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

    public static function parityOutlier()
    {
        
    }
}
