<?php
require_once './Shape.php';
/**
 * Author: zhangkailang
 * Date: 2019/9/25 0025
 */
class ShapeCache
{
    private static $shapeMap = [];

    public static function getShape($shapeId)
    {
        $cachedShape = self::$shapeMap[$shapeId];
        return clone $cachedShape;
    }

    /**
     * 对每种形状都运行数据查询，并创建该形状
     * 例如，我们要添加三种形状
     */
    public static function loadCache()
    {
        $circle = new Circle();
        $circle->setId(1);
        self::$shapeMap[$circle->getId()] = $circle;

        $rectangle = new Rectangle();
        $rectangle->setId(2);
        self::$shapeMap[$rectangle->getId()] = $rectangle;

        $square = new Square();
        $square->setId(3);
        self::$shapeMap[$square->getId()] = $square;
    }
}
