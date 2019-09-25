<?php
require_once './MealBuilder.php';
/**
 * Author: zhangkailang
 * Date: 2019/9/24 0024
 */

$mealBuilder = new MealBuilder();

$vegMeal = $mealBuilder->prepareVegMeal();
echo 'Veg Meal' . "\n";
$vegMeal->showItems();
echo 'Total Cost: ' . $vegMeal->getCosts();

$nonVegMeal = $mealBuilder->prepareNonVegMeal();
echo "\n\nNon-Veg Meal" . "\n";
$nonVegMeal->showItems();
echo "Total Cost: " . $nonVegMeal->getCosts();