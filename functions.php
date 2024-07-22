<?php 


function  foo(){
  echo "hello" . "<br>";
}

foo() ;


function arrg(int|float $x , int|float $y){

    return $x + $y ;
}
echo  arrg(5.5 , 6.3) . "<br>";

// defirence between local and global scope
// 1-Local Scope :المتغيرات المحلية هي تلك المتغيرات التي تُعرّف داخل دالة معينة وتكون مرئية فقط داخل تلك الدالة. لا يمكن الوصول إلى هذه المتغيرات من خارج الدالة التي تم تعريفها فيها.

// function myFunction() {
//   $localVar = "I am a local variable";
//   echo $localVar; // يمكن الوصول إلى $localVar هنا
// }

// myFunction();

// echo $localVar; // خطأ: لا يمكن الوصول إلى $localVar هنا

// 2- Global Scope:لمتغيرات العامة هي تلك المتغيرات التي تُعرّف خارج أي دالة وتكون مرئية في كل مكان في النص البرمجي، بما في ذلك داخل الدوال، ولكن للوصول إليها داخل الدوال يجب استخدام الكلمة المفتاحية global. 

// $globalVar = "I am a global variable";

// function myFunction() {
//     global $globalVar;
//     echo $globalVar; // يمكن الوصول إلى $globalVar هنا
// }

// myFunction();

// echo $globalVar; // يمكن الوصول إلى $globalVar هنا أيضا


// 3- Superglobals : ناك أيضًا متغيرات فائقة في PHP تكون متاحة دائمًا في كل النطاقات بدون الحاجة لتعريفها كـ global. من أمثلة هذه المتغيرات: $_GET، $_POST، $_SESSION، $_COOKIE

// function myFunction() {
//   echo $_SERVER['HTTP_USER_AGENT']; // يمكن الوصول إلى $_SERVER هنا مباشرة
// }

// myFunction();



// __________________________________________________________________________

// static variables : لمتغيرات الثابتة  في PHP هي نوع من المتغيرات التي تحتفظ بقيمتها بين استدعاءات الدالة أو الكائنات. 
// بمعنى آخر، عند استخدام متغير ثابت داخل دالة، سيحتفظ هذا المتغير بقيمته حتى بعد انتهاء تنفيذ الدالة واستدعائها مرة أخرى.

function myFunction() {
  static $count = 0;
  $count++;
  echo $count . "<br/>";
}

myFunction(); // يطبع 1
myFunction(); // يطبع 2
myFunction(); // يطبع 3

FUNCTION C(){
  $CS = 0;
  $CS++;
  echo $CS . "<br/>";
}

C();
C();
C();


//______________________________
//1- func_num_args()
//2- func_num_args(index)
//3- func_get_arg()

function foo()
{
    echo "Number of arguments: ", func_num_args() . "<br/>"; 
    echo "index 2 is : " , func_num_args(2) . "<br/>"; // return 3
    foreach (func_get_args() as $arg) {
     $res =+ $arg; 
     echo $res . "<br/>"; // return 6
    }
   
}

foo(1, 2, 3);  //  Number of arguments: 3


function nums(...$nums)
{
    foreach ($nums as $arg) {
     $res =+ $arg; 
     echo $res . "<br/>"; // return 6
    }
   
}

nums(1, 2, 3);  //  Number of arguments: 3

//______________________________

// passing argumnt by refrence
function addthree($num){
    $num += 3;
    return $num;
   
}
$n = 15 ;
$num = addthree($n);
echo $num . "<br/>"; // return 18

echo $n . "<br/>"; // return 15 only n is not changed to change add & before $num will be 18

//______________________________
// return type 

function cal($num1 , $num2){
  
    return $num1 + $num2;
   
}

echo cal(10.3 , 15.4) . "<br/>"; 
// return 25.7 to convert it to intger we use (int) function cal($num1 , $num2) : int{}


//______________________________
//anonymous function 

$msg = "hello";

$say_hi = function () use ($msg) { // use $msg because $msg is a global variable
    echo $msg;
};  
  

//______________________________
//array mapping

$nums = [10, 15, 20, 25, 30];
function addeven($num){
  return $num * 2;
}


$result = array_map('addeven', $nums);
echo implode(" " , $result) . "<br/>";


// _______________________________
// Arrow function

$nums = [10, 15, 20, 25, 30];

$result = array_map(fn($num) => $num * 2 , $nums);
echo implode(" " , $result) . "<br/>";