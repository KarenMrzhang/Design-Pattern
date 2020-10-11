<?php
require_once "./Shape.php";
/**
 * Author: Karen
 * Date: 2019/10/9 0009
 */
$redCircle = new Circle(100, 100, 10, new RedCircle());
$greenCircle = new Circle(100, 100, 10, new GreenCircle());

$redCircle->draw();
$greenCircle->draw();
