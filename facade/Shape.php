<?php
/**
 * Author: Karen
 * Date: 2019/9/26
 */
interface Shape
{
    public function draw();
}

/**
 * Class Circle
 * 创建实现接口的实体类。
 */
class Circle implements Shape
{
    public function draw()
    {
        // TODO: Implement draw() method.
        echo "Circle:: Draw()" . "\n";
    }
}

/**
 * Class Rectangle
 * 创建实现接口的实体类。
 */
class Rectangle implements Shape
{
    public function draw()
    {
        // TODO: Implement draw() method.
        echo "Rectangle:: Draw()" . "\n";
    }
}

/**
 * Class Square
 * 创建实现接口的实体类。
 */
class Square implements Shape
{
    public function draw()
    {
        // TODO: Implement draw() method.
        echo "Square:: Draw()" . "\n";
    }
}
