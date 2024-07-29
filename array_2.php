<?php 
$programmeLang = ["php" , "html" , "css" , "python" , "c++" , "java" , "c#"] ;

echo current($programmeLang) ; // php
echo next($programmeLang) ; // html
echo end($programmeLang) ; // c#
echo prev($programmeLang) ; // c#


// array_merge used to merge two array
// first array is key and second array is value
// return array
echo '<pre>' ;
print_r(array_merge($programmeLang , ["kotlin" , "go" , "ruby"])) ;
echo '</pre>' ;


//array_replace used to replace value of array
// first array is key and second array is value
// return array
echo '<pre>' ;
print_r(array_replace($programmeLang , ["kotlin" , "go" , "ruby"])) ;
echo '</pre>' ;

//array_random_key used to get random key of array
// return key
echo '<pre>' ;
print_r(array_rand($programmeLang)) ;
echo '</pre>' ;

//shuffle used to shuffle array
// return array
echo '<pre>' ;
print_r(shuffle($programmeLang)) ;
echo '</pre>' ;