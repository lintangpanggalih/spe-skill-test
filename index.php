<?php

class SpeSkillTest
{

    private static function countDigit($n)
    {
        if ($n == 0)
            return 0;

        return (1 + ($n / 10));
    }

    public static function narcissisticNumber($number)
    {
        $digit = static::countDigit($number);
        $duplicate = $number;
        $sum = 0;

        while ($duplicate) {
            $sum += pow($duplicate % 10, $digit);
            $duplicate = (int)$duplicate / 10;
        }
    
        return ($number == $sum);
    }
}
