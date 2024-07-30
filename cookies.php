<?php 

setcookie("style" , "dark" , time() + 3600) ; // set cookies for 1 hour

if(isset($_COOKIE['background'])) {
echo "<style> body { background-color: {$_COOKIE['background']}; }</style>";
}


if($_SERVER['REQUEST_METHOD'] == "POST"){
    setcookie("background" , $_POST['background'] , time() +10) ; // set cookies for  1 hour
    header("Location: " . $_SERVER["REQUEST_URI"]); // refresh the page
    exit();
}
?>
<form action="#" method="POST">
    <input type="color" name="background">
    <input type="submit" value="Choose Color">
</form>