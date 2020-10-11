<?php
require_once "./Observer.php";
require_once "./Subject.php";
/**
 * Author: Karen
 * Date: 2019/11/2
 * Time: 12:56
 */
$subject = new Subject();
new HexaObserver($subject);
new OctalObserver($subject);
new BinaryObserver($subject);

echo "First state change: 15" ."\n";
$subject->setState(15);
echo "Second state change: 10" ."\n";
$subject->setState(10);
