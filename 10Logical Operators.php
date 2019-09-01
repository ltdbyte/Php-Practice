<?php

$number = 505;

$upper = 1000;
$lower = 500;

if ($number>=$lower && $number<=$upper) {
	echo 'Ok';
} else {
	echo 'Number must be between '.$lower.' and '.$upper;
}

?>