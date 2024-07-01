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