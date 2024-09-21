<?php 
// abs 
$number = -10;
echo abs($number) . '<br/>'; // 10

// RAND
echo rand(1,10) . '<br/>'; // 1 to 10


// intdiv
echo intdiv(5 , 3) . '<br/>'; // 1

// fmod
echo fmod(5.3 ,3) . '<br/>'; // 2.3 float
echo (5.3 % 3) . '<br/>'; //  2 intger

// ceil
echo ceil(5.3) . '<br/>'; // 6

// floor
echo floor(5.3) . '<br/>'; // 5

// round
echo round(5.3 , 1 , PHP_ROUND_HALF_DOWN) . '<br/>'; // 5
echo round(5.795 , 2 , PHP_ROUND_HALF_UP) . '<br/>'; // 6


// sqrt
echo sqrt(64) . '<br/>'; // 8

// pow
// pow(base , power)
// 
echo pow(2 , 3) . '<br/>'; // 8

// min max

echo min(1,2,3) . '<br/>'; // 1

echo max(1,2,3) . '<br/>'; // 3