<?php


if($_SERVER['REQUEST_METHOD'] == "POST" &&  isset($_POST['username'])) {
    $name = $_POST['username'];
    echo 'hello' . "" . $name ; // 

} 
?>
<form action="#" method="post">
    <input type="text" name="username">
    <input type="submit" value="Submit">
</form>
<?PHP

// _______________________________________________________________________________________

$client_ip = gethostbyname(gethostname());
$IP_ADRESS = filter_var($client_ip, FILTER_VALIDATE_IP);
echo $IP_ADRESS . "<br>";


// client IP address
// Check if the IP is from shared internet
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
// Check if the IP is from a proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
// If not from shared internet or proxy, consider it as the remote address
else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}

// Display the determined IP address
echo $ip_address . "<br>";

// _______________________________________________________________________________________
// GET BROWSER INFORMATION
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";

// _______________________________________________________________________________________
// GET CURRENT FILE NAME
echo __FILE__  . "<br>";  // current path 
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name . "<br>"; // current file name

// _______________________________________________________________________________________

$URL = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php' ;
 $SCHEMA = parse_url($URL, PHP_URL_SCHEME);
$HOST = parse_url($URL, PHP_URL_HOST);
$PATH = parse_url($URL, PHP_URL_PATH);
$QUERY = parse_url($URL, PHP_URL_QUERY);
$FRAGMENT = parse_url($URL, PHP_URL_FRAGMENT);
echo 'Scheme:' . "" . $SCHEMA . "<br>";
echo 'Host:' . "" . $HOST . "<br>";
echo 'Path:' . "" . $PATH . "<br>";
echo 'Query:' . "" . $QUERY . "<br>";
echo 'Fragment:' . "" . $FRAGMENT . "<br>";

// _______________________________________________________________________________________
// Check if the HTTPS (secure) protocol is enabled in the server environment
if (!empty($_SERVER['HTTPS'])) {
  // Display a message if HTTPS is enabled
  echo 'https is enabled';
} else {
  // Display a message if HTTPS is not enabled, followed by a newline character
  echo 'http is enabled' . "\n";
}

// _______________________________________________________________________________________
// Use the header function to send a raw HTTP header
// In this case, the header function is used to perform a redirection
// The 'Location' header specifies the URL to which the user will be redirected
header('Location: https://www.w3resource.com/');

