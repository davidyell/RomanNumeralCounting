<?php
/**
 * Code kata for converting decimals to roman numerals
 * PHP version 5
 * @category Code_Kata
 * @package Romannumeralcounting
 * @author David Yell <dyell@ukwebmedia.com>
 * @author Tom Curry <tcurry@ukwebmedia.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link https://github.com/davidyell/RomanNumeralCounting
 */
$numerals = [
    'I' => 1,
    'V' => 5,
    'X' => 10,
    'L' => 50,
    'C' => 100,
    'D' => 500,
    'M' => 1000
];

asort($numerals, SORT_NUMERIC);

/**
 * Converts decimal numbers into roman numerals
 * 
 * @param int $number positive decimal integer
 * 
 * @return void
 */
function numeralise($number) 
{
    switch ($number) {
    case $number >= 1000:
        echo "M";
        $value = 1000;
        break;
    case $number >= 500:
        echo "D";
        $value = 500;
        break;
    case $number >= 100:
        echo "C";
        $value = 100;
        break;
    case $number >= 50:
        echo "L";
        $value = 50;
        break;
    case $number >= 10:
        echo "X";
        $value = 10;
        break;
    case $number == 9:
        echo "IX";
        $value = 9;
        break;
    case $number >= 5:
        echo "V";
        $value = 5;
        break;
    case $number == 4:
        echo "IV";
        $value = 4;
        break;
    case $number < 4:
        for ($i = 0; $i < $number; $i++) {
            echo "I";
        }
        $value = $i;
        break;
    }
    $number = $number - $value;
    if ($number > 0) {
        numeralise($number);
    }
    
}

for ($j = 1; $j <= 20; $j++) {
    echo numeralise($j) . "<br>";
}

