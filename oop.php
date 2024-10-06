<?php 

// البرمجة الكائنية التوجه (OOP - Object-Oriented Programming) هي نمط برمجة يعتمد على مفهوم "الكائنات" (Objects) التي يمكن أن تحتوي على بيانات (تسمى خصائص أو صفات) و وظائف (تسمى أساليب أو طرق). الهدف الرئيسي من OOP هو تسهيل تطوير وصيانة البرمجيات من خلال تقسيمها إلى وحدات أصغر قابلة لإعادة الاستخدام.

//المفاهيم الأساسية في OOP:
// 1- الكائنات ( Objects)
// 2- الفئات  ( Classes )
// 3- الوراثة ( Inheritance )
// 4- التعددية  ( Polymorphism )
// 5- التغليف  ( Encapsulation )
// 6 - التجريد ( Abstraction )


$acountant1=[
    'name' => 'ali tarek',
    'balance' => 100000.00,
    'nr' => '123456789',
];
$acountant2=[
    'name' => 'hassan sayed',
    'balance' => 250.00,
    'nr' => '523654789',
];

function print_palance(array $acountant){
    echo "Account name is {$acountant['name']} and balance is {$acountant['balance']} , nr #{$acountant['nr']}" . "<br/>";
}

print_palance($acountant1);
print_palance($acountant2);


function transfer(array &$from , array &$to , float $amount){
    $from['balance'] -= $amount;
    $to['balance'] += $amount;

}
 transfer($acountant1 , $acountant2 , 200.00) ;
 print_palance($acountant1);
print_palance($acountant2);
  
