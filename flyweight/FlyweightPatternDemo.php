<?php
require_once "./ShapeFactory.php";
/**
 * Created by PhpStorm.
 * Date: 2019/9/25
 * Time: 22:43
 */
for ($i = 0;$i < 20;$i++){
    $circle = ShapeFactory::getCircle(getRandomColor);
    $circle->setX(getRandomX());
    $circle->setY(getRandomY());
    $circle->setRadius(100);
    $circle->draw();
}

function getRandomColor(){
    $color = [
        "Red", "Green", "Blue", "White", "Black"
    ];
    return $color[rand(0,count($color))];
}

function getRandomX(){
    return rand(1,100);
}

function getRandomY(){
    return rand(1,100);
}