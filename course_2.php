<?php 

/*    Date Types              */
#scaler types
   #bool - true / false
   $statys = true ;
   #int  - number (not desmail)
   $int = 20 ;
   #float - 1.1 , 5.6
   $flo = 1.7 ;
   #string - "ali" , "hellow"
   $greeting = "Hellow" ;

   echo $int . "<br/>" ;
   echo $statys . "<br/>" ;
   echo $flo . "<br/>" ;
   echo $greeting . "<br/>" ;
   
   echo gettype($greeting) ; # get type of varible


#compond types
   #array
   #object
   #calleble
   #interable

#special types
   #resourse
   #null   

   function sum( $x , $y ) {
      return( $x + $y );
   }
echo  sum(2 ,3) ;


// __________________________________________________________
#booleins
// integers 0 - 0 false
// float 0.0 - 0.0 false
// string "" - "" false
// array [] - [] false
// object {} - {} false
// null - null false 

// __________________________________________________________
#integer
$x = PHP_INT_MAX; // 9223372036854775807  INT
echo $x . "<br/>" ;
$X = PHP_INT_MAX +1; // 9223372036854775808  FLOAT

$y = (int)5.9 ; // 5 
// __________________________________________________________
#float
$y = float((.1 + .7) * 10) ; // 7
$y = ceil((.1 + .7) * 10) ; // 8

