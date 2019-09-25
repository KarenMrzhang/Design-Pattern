<?php
/**
 * Author: zhangkailang
 * Date: 2019/9/25 0025
 */
abstract class Shape{
    private $id;
    protected $type;

    abstract function draw();

    public function getType(){
        return $this->type;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
}

class Circle extends Shape{
    public function __construct()
    {
        $this->type = 'Circle';
    }

    public function draw()
    {
        // TODO: Implement draw() method.
        echo "Inside Circle::draw() method.";
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
        $newcirlie = new Circle();
        return $newcirlie;
    }
}

class Rectangle extends Shape{
    public function __construct()
    {
        $this->type = 'Rectangle';
    }

    public function draw()
    {
        // TODO: Implement draw() method.
        echo "Inside Rectangle::draw() method.";
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
        $newrectangle = new Rectangle();
        return $newrectangle;
    }
}

class Square extends Shape{
    public function __construct()
    {
        $this->type = 'Square';
    }

    public function draw()
    {
        // TODO: Implement draw() method.
        echo "Inside Square::draw() method.";
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
        $newsquare = new Square();
        return $newsquare;
    }
}