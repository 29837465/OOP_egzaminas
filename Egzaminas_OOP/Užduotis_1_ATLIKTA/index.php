<?php

include_once 'Employee.php';
include_once 'Manager.php';
include_once 'Intern.php';

echo Employee::getTypeDescription() . PHP_EOL;

$intern = new Intern('Intern', 1000);
$cloneIntern = clone $intern;
echo $intern . PHP_EOL;
echo $cloneIntern . PHP_EOL;

$manager = new Manager('Manager', 3800, 15);
echo $manager . PHP_EOL;
echo $manager->calculateSalary() . PHP_EOL;