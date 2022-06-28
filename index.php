<?php
require 'vendor/autoload.php';

use \Model\Person;

echo 'Test';
echo '<br>';

$martin = new Person();
$martin->setName('Martin');
echo $martin->getName();