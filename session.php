<?php 
session_start();

$_SESSION['name'] = "ali" ;
$_SESSION['ID'] = "123456" ;


isset($_SESSION['view']) ? $_SESSION['view']++ : $_SESSION['view'] = 1 ;

echo "view this page " . $_SESSION['view'] . " times"  . "<br/>" ;
echo "your name is " . $_SESSION['name'] . "<br/>" ; 

echo '<a href="test.php"> go to test</a>' ;


session_unset() ; // remove all session
session_destroy() ; // remove all session and destroy session