<?php
namespace builderpattern;
/**
 * Author: zhangkailang
 * Date: 2019/9/24 0024
 */
class MealBuilder{

    public function prepareVegMeal(){
        $meal = new Meal();
        $meal->addItem(new VegBurger());
        $meal->addItem(new Coke());
        return $meal;
    }

    public function prepareNonVegMeal(){
        $meal = new Meal();
        $meal->addItem(new ChickenBurger());
        $meal->addItem(new Pepsi());
        return $meal;
    }
}