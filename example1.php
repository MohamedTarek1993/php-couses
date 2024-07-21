<?php 




if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
$language = $_POST['lang'];
$submit = $_POST['submit'];
    echo "hello " . $username . " " . "the language is" . " " . $language ;

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subbort</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="username" placholeder="username">
        <select name="lang" id="">
            <option value="php">php</option>
            <option value="js">js</option>
            <option value="css">css</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>