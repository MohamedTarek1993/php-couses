<?php 


class BankAccount {
    //properties
    public string $name ;
    public float $balance ;
    public string $nr ;
    function printBalance(BankAccount $acountant){
        echo "Account name is {$this->name} and balance is {$this->balance} , nr #{$this->nr}" . "<br/>";
    }
    
}


//create object
$acountant1 = new BankAccount();
$acountant1->name = 'ali tarek';
$acountant1->balance = 100000.00;
$acountant1->nr = '123456789';


$acountant2 = new BankAccount();
$acountant2->name = 'hassan sayed';
$acountant2->balance = 250.00;
$acountant2->nr = '523654789';


//call function
$acountant1->printBalance($acountant1);
$acountant2->printBalance($acountant2);


