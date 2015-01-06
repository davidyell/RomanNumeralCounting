<?php
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

function numeralise($number) {
	switch ($number) {
		case $number >= 1000:
			echo "M";
			$number = $number - 1000;
			break;
		case $number >= 500:
			echo "D";
			$number = $number - 500;
			break;
		case $number >= 100:
			echo "C";
			$number = $number - 100;
			break;
		case $number >= 50:
			echo "L";
			$number = $number - 50;
			break;
		case $number >= 10:
			echo "X";
			$number = $number - 10;
			break;
		case $number == 9:
			echo "IX";
			$number = $number - 9;
			break;
		case $number >= 5:
			echo "V";
			$number = $number - 5;
			break;
		case $number == 4:
			echo "IV";
			$number = $number - 4;
			break;
		case $number < 4:
			for ($i = 0; $i < $number; $i++) {
				echo "I";
			}
			$number = $number - $i;
			break;
	}

	if ($number > 0) {
		numeralise($number);
	}
	
}

for ($j = 1; $j <= 20; $j++) {
	echo numeralise($j) . "<br>";
}

