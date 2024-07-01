<?php
//1-for condition 
// تستخدم عندما تعرف عدد التكرارات مسبقًا.
//تحتوي على ثلاثة أجزاء في الرأس: التهيئة، الشرط، والتعديل.
// for (initialization; condition; increment/decrement) {
//   التعليمات التي ترغب في تكرارها
// }


//  for ($i = 0; $i < 10; $i++) {
//     echo $i;
//  }




// 2-while condition 
// تستخدم عندما لا تعرف عدد التكرارات مسبقًا وتحتاج للتحقق من شرط قبل كل تكرار.
// تستمر الحلقة طالما كان الشرط صحيحًا.
// while (condition) {
//     // التعليمات التي ترغب في تكرارها
// }

// $i = 0;
// while ($i < 10) {
//     echo $i;
//     $i++;
// }



// 3- do while 
// تشبه حلقة while ولكنها تضمن تنفيذ التعليمات مرة واحدة على الأقل لأن الشرط يُتحقق بعد تنفيذ التعليمات.
// do {
//     // التعليمات التي ترغب في تكرارها
// } while (condition);

// $i = 0;
// do {
//     echo $i;
//     $i++;
// } while ($i < 10);




// 4- foreach
// تستخدم للتكرار على عناصر مجموعة (مثل مصفوفة أو قائمة)
// foreach ($collection as $element) {
//     // التعليمات التي ترغب في تكرارها
// }


// $numbers = [1, 2, 3, 4, 5];
// foreach ($numbers as $number) {
//     echo $number . "<br>";
// }



// for($z = 0 ; $z > 8 ; $z++ ){
//     echo $z . "<br>";
// }

// $f =[0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
// foreach ($numbers as $number) {
//     echo $number . "<br>";
// }

$x = 0 ;
while($x > 10){
    echo $x . "<br>";
    $x++ ;
}

$y = 0 ;
do {
    echo $y . "<br>";
    $y++ ;
}
while($y > 20) ;


// ______________________________________________________________________________________________



// if conditinn 
// تستخدم للتحقق من شرط واحد أو أكثر، ويمكنها التعامل مع حالات معقدة باستخدام عبارات else if و else.
// يمكن استخدامها مع أي نوع من الشروط (boolean, comparison, etc).

$num = -10 ;
if($num > 0){
    echo "عدد موجب " ;
}
elseif ($num <0) {
   echo "عدد سالب"  . "<br>"; ;
}

// switch condition
// تستخدم للتحقق من قيمة متغيرة معينة ضد مجموعة من القيم المحددة مسبقًا.
// تعمل بشكل أفضل مع المقارنات التي تتضمن قيمًا ثابتة (مثل الأعداد الصحيحة أو السلاسل النصية).

$day ="السيت";

switch($day){
  case 'الأثنين':
    echo "الأثنين" . "<br>";
    break;
  case 'الثلاثاء':
    echo "الثلاثاء" . "<br>";
    break;
  case 'الأربعاء':
    echo "الأربعاء" . "<br>";
    break;
  case 'الأخرين':
    echo "الأخرين" . "<br>";
    break;
  default:
    echo "يوم غير معروف" . "<br>";


}

// ستخدم if عندما تحتاج إلى التحقق من شروط متعددة ومعقدة، واستخدم switch عندما تكون لديك قيمة واحدة تريد مقارنتها مع مجموعة من القيم الثابتة.

// switch:

//     يمكن أن يكون أكثر طولًا وتعقيدًا، خاصة مع عبارات break.
//     يدعم التعبيرات المتعددة لكل حالة.
//     يمكن أن يكون له سقوط عبر الحالات إذا لم يتم استخدام break.
//     match:
    
//     أكثر إيجازًا وحداثة.
//     لا يوجد سقوط عبر الحالات.
//     يعيد قيمة مباشرة (تعبير)، مما يسهل استخدامه في تعيين القيم.
//     لا يسمح بالتعبيرات المتعددة لكل حالة.
//     استخدم match عندما تحتاج إلى تعبير أكثر إيجازًا وحداثة، واستخدم switch إذا كنت بحاجة إلى التعامل مع حالات أكثر تعقيدًا وتعدد التعبيرات لكل حالة.


$day = "الأثنين";
$result = match ($day) {
    'الأثنين' =>  'اليوم هو الأتنين',
    'الثلاثاء' => 'اليوم هو الثلاثاء',
    'الأربعاء' =>  'اليوم هو الأربعاء',
    default => 'يوم غير معروف',
 
};
echo $result . "<br>";



// ______________________________________________________________________________________________

// declare Types
// 1- ticks
// 2- encoding
// 3- strict_types أو تعطيل فرض أنواع البيانات بدقة في الدوال





// ______________________________________________________________________________________________


// include , require 
// استخدم include عندما يكون الملف الخارجي غير حاسم لاستمرار عمل .
// استخدم require عندما يكون الملف الخارجي حاسمًا لاستمرار عمل .
// استخدم include_once وrequire_once لتجنب تضمين الملف أكثر من مرة وضمان تضمينه مرة واحدة فقط