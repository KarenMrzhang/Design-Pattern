<?php
require_once 'ShapeCache.php';
/**
 * Author: zhangkailang
 * Date: 2019/9/25 0025
 */
ShapeCache::loadCache();

$clonedShape1 = ShapeCache::getShape(1);
echo "Shape : " . $clonedShape1->getType() . "\n";
echo $clonedShape1->draw() . "\n";

$clonedShape2 = ShapeCache::getShape(2);
echo "Shape : " . $clonedShape2->getType() . "\n";
echo $clonedShape2->draw() . "\n";

$clonedShape3 = ShapeCache::getShape(3);
echo "Shape : " . $clonedShape3->getType() . "\n";
echo $clonedShape3->draw() . "\n";