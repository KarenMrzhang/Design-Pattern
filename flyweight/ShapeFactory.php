<?php
require_once "./Shape.php";
/**
 * Created by PhpStorm.
 * Date: 2019/9/25
 * Time: 22:36
 * 创建一个工厂，生成基于给定信息的实体类的对象。
 */
class ShapeFactory
{
    private static $circleMap = [];

    public static function getCircle($color)
    {
        $circle = array_key_exists($color, self::$circleMap) ? self::$circleMap[$color] : null;
        if (empty($circle)) {
            $circle = new Circle($color);
            self::$circleMap[$color] = $circle;
            echo "Create circle of color : " . $color . "\n";
        }
        return $circle;
    }
}
