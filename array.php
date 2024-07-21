<?php 


$programmeLang = ["php" , "html" , "css" , "python" , "c++" , "java" , "c#"] ; // array
$name = "ali" ; // string

echo $name[-1] ; // i
echo $programmeLang[-1] ; // undefined

echo count($programmeLang) ; // 7 get count of array
 echo array_push($programmeLang , "kotlin" , "go" , "ruby") ; // add to array return count of array

 echo count($programmeLang) ; // 10
 echo array_pop($programmeLang) ; //  return last element of array
 echo array_shift($programmeLang) ; //  return first element of array
