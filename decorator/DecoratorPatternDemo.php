<?php
require_once "./Shape.php";
/**
 * Author: Karen
 * Date: 2019/10/15
 * Time: 23:25
 */
$circle = new Circle();
$redCircle = new RedShapeDecorator(new Circle());
$redRectangle = new RedShapeDecorator(new Rectangle());
echo "Circle with normal border\n";
$circle->draw();
echo "\nCircle of red border\n";
$redCircle->draw();
echo "\nRetangle of red border\n";
$redRectangle->draw();
