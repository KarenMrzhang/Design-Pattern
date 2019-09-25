<?php
/**
 * Created by PhpStorm.
 * Date: 2019/9/25
 * Time: 22:24
 */
interface Shape{
    public function draw();
}

/**
 * Class Circle
 * 创建实现接口的实体类。
 */
class Circle implements Shape{
    private $color;
    private $x;
    private $y;
    private $radius;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function draw()
    {
        // TODO: Implement draw() method.
        echo "Circle: Draw() [Color : " . $this->color
            . ", x : " . $this->x .", y :" . $this->y .", radius :" . $this->radius . " ]";
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
}