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

/**
 * Converts decimal numbers into roman numerals
 * 
 * @param int $number positive decimal integer
 * 
 * @return void
 */
function numeralise($number) 
{
    $numerals = [
        [
            'numeral' => 'I',
            'decimal' => 1
        ],
        [
            'numeral' => 'V',
            'decimal' => 5
        ],
        [
            'numeral' => 'X',
            'decimal' => 10
        ],
        [
            'numeral' => 'L',
            'decimal' => 50
        ],
        [
            'numeral' => 'C',
            'decimal' => 100
        ],
        [
            'numeral' => 'D',
            'decimal' => 500
        ],
        [
            'numeral' => 'M',
            'decimal' => 1000
        ],
    ];
    //TODO: Sort array by inverse decimals
    switch ($number) {
        case $number >= $numerals[6]['decimal']:
            $index = 6;
            break;
        case $number >= $numerals[5]['decimal']:
            $index = 5;
            break;
        case $number >= $numerals[4]['decimal']:
            $index = 4;
            break;
        case $number >= $numerals[3]['decimal']:
            $index = 3;
            break;
        case $number >= $numerals[2]['decimal']:
            $index = 2;
            break;
        case $number == 9:
            echo "IX";
            $value = 9;
            break;
        case $number >= $numerals[1]['decimal']:
            $index = 1;
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
    
    if (isset($value)) {
        $number = $number - $value;
    } else {
        $number = $number - $numerals[$index]['decimal'];
        echo $numerals[$index]['numeral'];
    }
    
    

    if ($number > 0) {
        numeralise($number);
    }
    
}

for ($j = 1; $j <= 20; $j++) {
    echo numeralise($j) . "<br>";
}

