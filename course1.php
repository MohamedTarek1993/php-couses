<?php 
// differnce betwwen include and require
// if use include and file didnt exist it will throw an warning  if it can't be found: continue
// if use require and file didnt exist it will not throw an error  Require a file to be imported or quit if it can't be found
//include('functions.php'); // include
//require('functions.php'); // require


//________________________

echo 'I\' am string'  . "<br/>"; // escape sequence
$greeting = "I'm string" ;
echo $greeting . "<br/>" ;
echo " $greeting__" ;  // error
echo "{$greeting} __" . "<br/>" ;
echo "\n" ; // new line
echo "\t" ; // tab

//________________________
 $name = "ali" ;
$subject = "php" ;


// concatenation
echo "My Name is {$name} and ilove {$subject} " . "<br/>"; // use {}
echo "My Name is". " ". $name . " and ilove" ." ". $subject . " " . "<br/>"; // the same thing use .


//________________________
echo "5" +"5" . "<br/>"; // 10
//echo "5" + "5a" . "<br/>"; // 10 but get warning
//echo "5" + "a5" . "<br/>"; // fetal eror


// $options=[
//     'php',
//     'html',
//     'css',
//     'python',
//     'c++',
//     'java',
//     'c#'
// ]


$options = array('php', 'html', 'css', 'python', 'c++', 'java', 'c#');
array_push($options,'kotlin' , 'go' , 'ruby'); // add to array
unset($options[0]) ; // remove indexed element

// $days= array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday');
$days= [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday'
] ;

echo '<pre>' ;
print_r(array_search('monday', $days)) . "<br/>" ; // return index of element
echo' </pre>' ;
echo '<pre>' ;
var_dump(array_slice($days,1,2)) . "<br/>" ; // return array from index 0 to index 3
echo' </pre>' ;

//________________________

$numbers =[1,2,3,4,5,6,7,8,9,10]; 

echo '<pre>' ;
print_r(max( $numbers)) . "<br/>" ; // get max element 
echo' </pre>' ;



echo '<pre>' ;
print_r(min($numbers)) . "<br/>" ; // get min element
echo' </pre>' ;



echo '<pre>' ;
print_r(array_sum($numbers)) . "<br/>" ; // get sum of array
echo' </pre>' ;


$names =['ali' , 'ahmad' , 'mohammad' , 'hassan'] ;
$sub_names = ['ali' , 'ahmad' , 'mohammad' , 'hassan'] ;

echo '<pre>' ;
print_r(array_combine($sub_names , $names))  ;  // combine two array first array is key and second array is value
                                    
echo '</pre>' ;


echo '<pre>' ;
print_r(array_merge($sub_names ,['ahmad' ]  , $names))  ;  // combine two array with each other
                                    
echo '</pre>' ;


echo '<pre>' ;
print_r([...$sub_names , ('ahmad') , ...$names])  ;  // combine two array with each other 
                                    
echo '</pre>' ;


$playeFootball =[ 'Henery' , 'ronaldo' , 'messi' , 'neymar'] ;
$club = ['arsenal' , 'manchester_city' , 'chelsea' , 'real_madrid'] ;


$resilts =  array_combine($playeFootball , $club) ;  // combine two array first array is key and second array is value
               

//________________________

// $fileContents = file_get_contents('/path/to/file.txt'); // Read the contents of a file
// echo $fileContents;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="course1.php" method="GET">
        <select name="page">
    
    <?php
        foreach($options as $option){?>
    <option value="<?php echo $option; ?> <?php if(!empty($_GET['page']) && $_GET['page'] ) echo 'selected'; ?>">
    <?php echo $option; ?>
    </option>

    <?php
        }
        ?>
    </select>
    <input type="submit" value="submit">
    </form>

    <?php 
    echo file_get_contents("pages/{$_GET['page']}.php") ;
    ?>

    <ul>
        <?php
      foreach($days as $day):
        if($day === 'monday' || $day === 'sunday') continue; // Skip 'monday' and 'sunday'
        if($day === 'friday') break; // Stop the loop when 'friday' is encountered
        echo "<li>{$day}</li>"; // Output the day as a list item
    endforeach;
        ?>
    </ul>
    <ul>
        <?php 
        
        
        foreach($resilts as $player => $club): 
        echo "<li> this Player called {$player} played {$club} </li>" ;
        endforeach ;
        ?>
    </ul>

</body>

</html>