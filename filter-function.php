<?php  

echo '<pre>';
print_r(filter_list());
echo '</pre>';


// validate boolean
// $x = 'true'; // true | 1 | on | yes
// $y = 'false'; // false | 0 | off | no
$z ="awab"; // null  used for FILTER_NULL_ON_FAILURE 
var_dump(filter_var($z, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) ;
echo '<br/>';


// validate url
// FILTER_FLAG_PATH_REQUIRED : If set, the URL must contain a path.
// FILTER_FLAG_QUERY_REQUIRED : If set, the URL must contain a query string.
$url = "https://awjstudios.com/CAT";
$url_second = "https://awjstudios.com/?id=1";
var_dump(filter_var($url, FILTER_VALIDATE_URL  , FILTER_FLAG_PATH_REQUIRED)) ;
echo '<br/>';
var_dump(filter_var($url_second, FILTER_VALIDATE_URL  , FILTER_FLAG_QUERY_REQUIRED)) ;
echo '<br/>';


//VALIDATE_IP
// FILTER_VALIDATE_MAC : Validate an MAC address.
$ip = "89.207.132.170";
var_dump(filter_var($ip, FILTER_VALIDATE_IP)) ;
echo '<br/>';

// FILTER_VALIDATE_EMAIL : Validate an email address.
$email = "wYQpO@example.com";
var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)) ;
echo '<br/>';

// FILTER_VALIDATE_INT : Validate an integer.
// FILTER_NULL_ON_FAILURE : Return NULL if the filter fails.
// options : array of options min_range , max_range
$int = "10";
var_dump(filter_var($int, FILTER_VALIDATE_INT ,['flags' => FILTER_NULL_ON_FAILURE  , 'options' => ['min_range' => 0, 'max_range' => 10] ] , )) ;
echo '<br/>';

// FILTER_VALIDATE_FLOAT : Validate a float.
$float = "10.5";
var_dump(filter_var($float, FILTER_VALIDATE_FLOAT)) ;
echo '<br/>';

//FILTER_SANITIZE_EMAIL : Sanitize an email address.
$email = "wYQpO@example.com";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL)) ;
echo '<br/>';


// FILTER INPUT TYPE
echo filter_input(INPUT_GET, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS) . "<br/>" ; // FILTER DEFAULT FOR INPUT TYPE 
echo filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING) . "<br/>" ;
echo filter_input(INPUT_GET, 'name', FILTER_SANITIZE_ENCODED) . "<br/>" ;
?>
<form action="" method="get" >
    <input type="text" name="name">
    <input type="submit">
</form>

<?php 


