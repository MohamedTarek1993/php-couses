<?php 
echo '<pre>' ;
//var_dump($_SERVER) ; // get all server variables
$IP= $_SERVER['REMOTE_ADDR'] ;
echo $IP . '<br/>' ; // get client IP
echo $_SERVER['HTTP_USER_AGENT'] . '<br/>' ; // get user agent


// PHP_SELF : The filename of the currently executing script
echo $_SERVER['PHP_SELF'] . '<br/>' ; // get current file
// REQUEST_URL : The URL of the current request
echo $_SERVER['REQUEST_URI'] . '<br/>' ;
//SECRIPT_NAME : The filename of the currently executing script
echo $_SERVER['SCRIPT_NAME'] . '<br/>' ;


//REQUEST_METHOD
echo $_SERVER['REQUEST_METHOD'] . '<br/>' ;

echo '</pre>' ;


$UA = $_SERVER['HTTP_USER_AGENT'] ;

if (strpos($UA, 'Chrome') !== false) {
    echo 'Chrome' . "<br/>" ;
} else if (strpos($UA, 'Firefox') !== false) {
    echo 'Firefox';
} else if (strpos($UA, 'Safari') !== false) {
    echo 'Safari';
} else if (strpos($UA, 'Opera') !== false) {
    echo 'Opera';
} else {
    echo 'Other';
}

//error 404 >> page not found
// error 200 >> ok
// error 400 >> bad request
// error 403 >> forbidden
// error 401 >> unauthorized
// error 500 >> internal server error

// http_response_code(404) ; // use in  error 404 page not found 

//______________________________
function e($string , $count){
    for($i= 0 ; $i < $count ; $i++){
      echo $string . '<br/>' ;
    }
  }
  
  
   return e('alo' , 10);
