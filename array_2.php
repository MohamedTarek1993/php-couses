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

//array_shift 
// remove first element of array
$programmeLang = ["php" , "html" , "css" , "python" , "c++" , "java" , "c#"] ; 
$names = ["ali" , "mohamed" , "ahmed" , "hassan" , "khalid" , "khaled" , "ibrahim"]; ;

echo '<pre>';
print_r(array_shift($programmeLang));
print_r($programmeLang);
echo '</pre>';


// array_unshift
// add new element at first of array
echo '<pre>';
print_r(array_unshift($programmeLang , "php"));
print_r($programmeLang);
echo '</pre>';


// array_pop
// remove last element of array

echo '<pre>';
print_r(array_pop($programmeLang));
print_r($programmeLang);
echo '</pre>';

//array_push
// add new element at last of array
echo '<pre>';
print_r(array_push($programmeLang , "c#"));
print_r($programmeLang);
echo '</pre>';

//array_slice
// remove element from array from index 2
// start = 2
// length = 1
// true resert keys 
echo '<pre>';
print_r(array_slice($programmeLang , 2 , 1));
echo '</pre>';

//array_splice
// remove element from array from index 2 to index 4
$programmeLang = ["php" , "html" , "css" , "python" , "c++" , "java" , "c#"] ; 

echo '<pre>';
print_r(array_splice($programmeLang , 2 , 1 , ["c++"]));
echo '</pre>';

// sort array
// sort array from A to Z
// resort array from Z to A
// ntsort - sort array from A to Z with sort value
// asort - sort array from A to Z with index and sort value
// arsort - sort array from Z to A with index and sort value
// ksort - sort array from A to Z with index sort key
// krsort - sort array from Z to A with index sort key
echo '<pre>';
sort($names);
print_r($names);
    echo '</pre>';



// array_map
// apply function to each element of array
// return new array

$lastname = ["hassan" , "khalid" , "ibrahim"];

function  add_name($name , $lastname ){
    return 'hello' . " ". $name . " ". $lastname . '<br>';
}
$final_res = array_map( 'add_name' , $names , $lastname ); ;
echo '<pre>';
print_r($final_res);
    echo '</pre>';




  // array_filter
    $array = [
        ['name' => 'John', 'age' => 45],
        ['name' => 'Haley', 'age' => 42],
        ['name' => 'Ally', 'age' => 8],
        ['name' => 'Meylyn', 'age' => 5],
        ['name' => 'Nicholas', 'age' => 1],
    ];
    
    
    $adults = array_filter($array, function($value) {
        return $value['age'] > 18;
    });
    
    foreach ($adults as $adult) {
        echo $adult['name'] . "<br/>";
    }

    //array_reduce
    // apply function to each element of array
    // return one element
    // reduce all element of array

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $sum = array_reduce($array, function($carry, $item) {
        return $carry + $item;
    }, 0);      


    echo $sum;
