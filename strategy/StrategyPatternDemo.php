<?php
require_once "./Context.php";
/**
 * Author: Karen
 * Date: 2019/11/1
 * Time: 22:35
 */
$context = new Context(new OperationAdd());
echo "10 + 5 = " . $context->executeStrategy(10, 5) . "\n";

$context = new Context(new OperationSubstract());
echo "10 - 5 = " . $context->executeStrategy(10, 5) . "\n";

$context = new Context(new OperationMultiply());
echo "10 * 5 = " . $context->executeStrategy(10, 5) . "\n";