<?php 
$salary = ["A"=> 1000 , "B" => 1200 , "C" => 1400];
 $d = 'A00';

 $number = 25 ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

      
    <table style="border: 1px solid black">
        <?php 
     foreach ($salary as  $name => $amount) :           
    ?>
        <tr>
            <td><?= "the value of " .  $name; ?></td>
            <td><?= $amount . "$" ;?></td>
        </tr>
        <?php endforeach ?>
    </table>

    <ul>
        <?php

        for($i = 0 ;  $i <5 ;  $i++ ){

            echo ++$d ;
        }
        ?>
    </ul>
     

</body>

</html>

<?php 


// Read all lines from the specified URL and store them in an array
// $all_lines = file('https://www.w3resource.com/');

// Iterate through each line in the array
// foreach ($all_lines as $line_num => $line)
// {
//     // Display the line number and the HTML-escaped content of the line
//     echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "\n";
// }


// th get last error
print_r(error_get_last());

//to get full url
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ;

// Get the last modification time of the current script using getlastmod()
$last_modified_time = getlastmod();
// Format the last modification time and print it
echo "Last modified: " . date("F d Y H:i:s.", $last_modified_time) . "<br>";


$r = $number >30 ? " grather than 30" : ($number > 20 ? " grather than 20" : ($number > 10 ? " grather than 10" : " less than 10")) ;

echo $number . ":  " . $r  . "<br/>";