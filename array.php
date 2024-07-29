<?php 


$programmeLang = ["php" , "html" , "css" , "python" , "c++" , "java" , "c#"] ; // array
$countries = ["Eg" => "egypt" , "us" =>  "usa" ,  "uk" => "uk" , "jp" =>"japan" , "fr" => "france" , "sp" => "spain"] ;
$name = "ali" ; // string

echo $name[-1] ; // i
echo $programmeLang[-1] ; // undefined

echo count($programmeLang) ; // 7 get count of array
 echo array_push($programmeLang , "kotlin" , "go" , "ruby") ; // add to array return count of array

 echo count($programmeLang) ; // 10
 echo array_pop($programmeLang) ; //  return last element of array
 echo array_shift($programmeLang) ; //  return first element of array


 echo '<pre>' ;
 print_r(array_chunk($programmeLang , 3))  ; //  return array of array
 echo '</pre>' ;
 
 echo '<pre>' ;
 print_r(array_chunk($countries , 2 , true))  ; //  return array of array with key
                                               // use true to get key 
 echo '</pre>' ;


 //    array_change_key_case used to change key of array take 2 arg (array , case)
 // case default is case_lower
 // case_upper change key to upper
 echo '<pre>' ;
 print_r(array_change_key_case($countries , CASE_UPPER))  ; 
                                       
 echo '</pre>' ;

 //array_combine used to combine two array
 // first array is key and second array is value
 //return array
 $name = ["ali" , "ahmed" , "mohamed"] ;
 $suname = ["khalaf" , "alaa" , "hassan"] ;
 echo '<pre>' ;
 print_r(array_combine($suname , $name))  ; 
                                     
 echo '</pre>' ;


 //array_count_values used to count value of array
 // return array
 $name = ["ali" , "ahmed"  , "ali" , "ahmed" , "mohamed"] ;
 echo '<pre>' ;
 print_r(array_count_values($name))  ;  // return count of each value                              
 echo '</pre>' ;


// array_reverse used to reverse array
// true take the same index
echo '<pre>' ;
print_r(array_reverse($name , true)) ;                              
echo '</pre>' ;


// array flip used to reverse key and value
echo '<pre>' ;
print_r(array_flip($name)) ;                              
echo '</pre>' ;


//count used to count value of array
// take mode is optional 0 , 1 
// 1 take dimential array and 0 take not
$name = ["ali" , "ahmed"  , "ali" , "ahmed" ,  ["mohamed" , "hassan"]] ;

echo count($name) . "<br/>" ; // 5  
echo count($name , 1) . "<br/>" ; // 7

// in_array used to check value in array
// take 3 arg
// 1- value
// 2- array
// 3- strict

echo in_array("ahmed" , $name , true)  . "<br/>"; // true


//array_key_exists used to check  key in array
// take 2 arg
// 1- value
// 2- array

if(array_key_exists("Eg" , $countries)){
    echo "exist" . "<br/>" ;
}
else{
    echo "not exist" . "<br/>" ;
}

// array_keys used to get keys of array
// array_value  used to get values of array


echo '<pre>' ;
print_r(array_values($countries)) ;   
print_r(array_keys($countries)) ;                              
echo '</pre>' ;

//array_pad used to add value to array
// take 3 arg
// 1- array
// 2- size requred
// 3- value

echo '<pre>' ;
print_r(array_pad($countries , 12 , "no"))  ;                            
echo '</pre>' ;


//array_product used to get product of array
// take 1 arg
// 1- array
$num = [1 , 2 , 3 , 4 , 5] ;
echo '<pre>' ;
print_r(array_product($num))  ;                            
echo '</pre>' ;

//array_sum used to get sum of array
echo '<pre>' ;
print_r(array_sum($num))  ;                            
echo '</pre>' ;