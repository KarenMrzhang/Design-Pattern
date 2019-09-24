<?php
use MealBuilder;
/**
 * Author: zhangkailang
 * Date: 2019/9/24 0024
 */
$mealBuilder = new MealBuilder();

$vegMeal = $mealBuilder->prepareVegMeal();
echo 'Veg Meal';
$vegMeal->showItems();
echo 'Total Cost: ' + $vegMeal->getCosts();

$nonVegMeal = $mealBuilder->prepareNonVegMeal();
echo "\n\nNon-Veg Meal";
$nonVegMeal->showItems();
echo "Total Cost: " + $nonVegMeal->getCosts();