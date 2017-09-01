<?php
use App\App2\Test\NameTest;
require_once __DIR__.'/web/test.php';


$test = new NameTest();
echo $test->getName();
?>