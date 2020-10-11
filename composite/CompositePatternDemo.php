<?php
require_once "./Employee.php";
/**
 * Author: Karen
 * Date: 2019/9/26 0026
 */
$ceo = new Employee("John", "CEO", 30000);

$headSales = new Employee("Robert", "Head Sales", 20000);

$headMarketing = new Employee("Michel", "Head Marketing", 20000);

$clerk1 = new Employee("Laura", "Marketing", 10000);
$clerk2 = new Employee("Bob", "Marketing", 10000);

$salesExecutive1  = new Employee("Richard", "Sales", 10000);
$salesExecutive2  = new Employee("Rob", "Sales", 10000);

$ceo->add($headSales);
$ceo->add($headMarketing);

$headSales->add($salesExecutive1);
$headSales->add($salesExecutive2);

$headMarketing->add($clerk1);
$headMarketing->add($clerk2);

//打印该组织的所有员工
echo $ceo . "\n";
printAllEmployee($ceo);

function printAllEmployee($employee)
{
    $employees =  $employee->getSubordinates();
    foreach ($employees as $employee) {
        echo $employee . "\n";
        printAllEmployee($employee);
    }
}
