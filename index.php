<?php
require 'vendor/autoload.php';

use \Model\Person;
use \Service\SayHi;

echo 'Test';
echo '<br>';

$martin = new Person();
$martin->setName('Martin');
echo $martin->getName();
echo '<br>';
$say_hi_obj = new SayHi();
echo $say_hi_obj->sayHi();