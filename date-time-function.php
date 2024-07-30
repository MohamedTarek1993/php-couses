<?php 

echo date_default_timezone_get(). "<br/>" ; // get default time zone
echo date("Y/m/d H:i") . "<br/>" ; // get date
echo date_default_timezone_set( 'Africa/Cairo') . "<br/>" ; // set time zone
echo date("Y/m/d H:i") . "<br/>" ; // get date
 
$d = date_create( "" , timezone_open("Africa/Niamey")); // create date
 echo date_format($d , "Y/m/d H:i") . "<br/>" ;

 //checkdate(); // check date

 // date format 
 // Y - year , m - month , d - day , H - hour , i - minute , s - second , a - am/pm 
 // e - day of week , l - day of week name , w - week number of year
 // Y - 2022 , y -22 , 
 // m -1 -12 , M - jan - dec , F - january - december 




   date_add($d , date_interval_create_from_date_string("1 days")) ; // add date
   echo date_format($d , "Y/m/d H:i") . "<br/>" ;


   date_sub($d , date_interval_create_from_date_string("3 days")) ; // sub date
   echo date_format($d , "Y/m/d H:i") . "<br/>" ;


   date_modify($d , '+1 year') ; // add date
 echo date_format($d , "Y/m/d H:i") . "<br/>" ;

 
 date_modify($d , '-3 months') ; // add date
 echo date_format($d , "Y/m/d H:i") . "<br/>" ;

//  get_date() ; // get date
 date_parse("2022-01-01") ; // parse date


 

 $reg = date_create("29-5-2024");
 $now = date_create('now');
 $diff = date_diff($reg, $now);
 
 echo '<pre>';
 print_r($diff);
 echo '</pre>';

 

 echo  date("Y/m/d H:i" , strtotime('Next Friday')) ; // convert date to string
 ?>
