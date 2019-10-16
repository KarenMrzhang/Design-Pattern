<?php
/**
 * Author: Karen
 * Date: 2019/10/15
 * Time: 23:17
 */
interface Shape {
    public function draw();
}

class Rectangle implements Shape{
    public function draw()
    {
        // TODO: Implement draw() method.
        echo "Shape: Rectangle";
    }
}

class Circle implements Shape{
    public function draw()
    {
        // TODO: Implement draw() method.
        echo "Shape: Circle";
    }
}

abstract class ShapeDecorator implements Shape{
    protected $decoratedShape;

    /**
     * ShapeDecorator constructor.
     * @param $decoratedShape
     */
    public function __construct($decoratedShape)
    {
        $this->decoratedShape = $decoratedShape;
    }

    /**
     * @return mixed
     */
    public function draw()
    {
        // TODO: Implement draw() method.
        $this->decoratedShape->draw();
    }
}

class RedShapeDecorator extends ShapeDecorator{
    /**
     * RedShapeDecorator constructor.
     * @param $decoratedShape
     */
    public function __construct($decoratedShape)
    {
        parent::__construct($decoratedShape);
    }

    /**
     *
     */
    public function draw()
    {
        $this->decoratedShape->draw();
        $this->setRedBorder($this->decoratedShape);
    }

    private function setRedBorder($decoratedShape){
        echo "Border Color: Red";
    }
}