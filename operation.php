<?php 


$x= 10.2;
$y = 2.2;

echo $x % $y;  //  0 
echo '<br/>';
echo (fmod($x,$y));  // 1.4

$x = $x + 20 ; // 30.2
$x += 20 ; // 50.2

// == => equal  قيمة فقط بغض النظر عن نوع البيانات 
var_dump(100 == '100'); // true
// === => equal and same type
var_dump(100 === '100'); // false
var_dump(100,0 === 100); // false because 0 is a string 
// != , <> => not equal
// !== => not equal and not same type
// <=> spaceshp
//Return 0 if values on either side are equal
//Return 1 if the value on the left is greater
//Return -1 if the value on the right is greater
//print (1 <=> 1); // 0
//print (1 <=> 2); // -1
//print (2 <=> 1); // 1

$b =0;
echo $b++ ; // 0    
echo $b ; // 1

$c = 0;
echo ++$c ; // 1
echo $c ; // 1

// && => and
// || => or
// ! => not
// ? : => ternary
// ?? => null coalescing operator
// xor => exclusive or 
if(5 < 3 xor 5 < 10) {
    echo true ; // true
  }

  $arr1 = [1 => 10 , 2 => '20'];
  $arr2 = [2 => 20 , 1 => 10];

  var_dump($arr1 == $arr2); // true 
  var_dump($arr1 === $arr2); // false