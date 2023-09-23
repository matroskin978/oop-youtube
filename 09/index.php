<?php

error_reporting(-1);

require 'A.php';
require 'B.php';

$a = new A();
//var_dump($a->public);
//var_dump($a->protected);
//var_dump($a->private);
//$a->printProps();

$b = new B();
//var_dump($b->public);
//var_dump($b->protected);
//var_dump($b->private);
//$b->printProps();

//var_dump($b->getPrivate());
var_dump($b->getProtected());
$b->setProtected('New protected2');
var_dump($b->getProtected());
