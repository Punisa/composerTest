<?php

require('vendor/autoload.php');


use space\class1;
use space2\class2;

class mytest1 extends class1 {

}

class mytest2 extends class2 {

}

$m1 = new mytest1();
$m2 = new mytest2();

$m1->print();
$m2->print();


?>