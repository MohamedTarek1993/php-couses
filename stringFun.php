<?php 



$str = 'Awab' ;
$syntax = "I am student"  ;
echo "No Of  Letters is ".  strlen($str)  . '<br/>' ;  // get length of string
echo "First Letter is $str[0]" . '<br/>' ; // get first letter
echo "Last  Letter is $str[-1]" . '<br/>' ; // get last letter
echo lcfirst($syntax)  . '<br/>'; // change first letter to lower
// echo unfirst($syntax) . '<br/>' ; // change first letter to upper
// echo ucword($syntax) . '<br/>' ; // change first letter of each word to upper
echo strtoupper($syntax) . '<br/>' ; // change all letter to upper
echo strtolower($syntax) . '<br/>' ; // change all letter to lower
echo substr($syntax , 5) . '<br/>' ; // get from index 5
echo str_repeat('Awab' , 5) . '<br/>' ; //  repeat string


$friends = [ 'ali' , 'hassan' , 'hossam' , 'mohamed' , 'ahmed' ] ;

echo implode(" " , $friends) . '<br/>' ; // join convert array to string
echo join(" " , $friends) . '<br/>' ; // join convert array to string

echo '<pre>' ;
echo print_r(explode(" " , $syntax)) . '<br/>' ; // convert string(syntax) to array
echo '</pre>' ;


echo '<pre>' ;
echo print_r(explode(" " , $syntax , 1)) . '<br/>' ; // convert string(syntax) to  array with limit
echo '</pre>' ;


echo '<pre>' ;
echo print_r(str_split($syntax)) . '<br/>' ; // convert string(word) to array
echo '</pre>' ;

echo str_shuffle($str) . '<br/>' ; // shuffle string
echo strrev($str) . '<br/>' ; // reverse string 


echo strlen('    one     ') . '<br/>' ; // 7
echo strlen(trim('    one     '))  . '<br/>' ; // remove spaces from string

echo strip_tags("<h1>one</h1>") . '<br/>' ; // remove html tags


echo strpos($syntax , 'h' , 2) . '<br/>' ; // get index of string
echo strrpos($syntax , 'h') . '<br/>' ; // get index of  string from right 

echo stripos($syntax , 'h' , 2) . '<br/>' ; // get index of string not sesnsitive
echo strripos($syntax , 'h') . '<br/>' ; // get index of  string from right  not sesnsitive

echo substr_count('Hellow Hellow' , 'He' , 1 , 7) . '<br/>' ;  // get sub string from string