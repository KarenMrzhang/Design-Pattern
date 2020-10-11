<?php
require_once "./Shape.php";
/**
 * Author: Karen
 * Date: 2019/9/26 0026
 */
class ShapeMaker
{
    private $circle;
    private $rectangle;
    private $square;

    public function __construct()
    {
        $this->circle = new Circle();
        $this->rectangle = new Rectangle();
        $this->square = new Square();
    }

    public function drawCircle()
    {
        $this->circle->draw();
    }

    public function drawRectangle()
    {
        $this->rectangle->draw();
    }

    public function drawSquare()
    {
        $this->square->draw();
    }
}
