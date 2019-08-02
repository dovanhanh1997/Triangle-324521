<?php
include_once 'Shape.php';

class Triangle extends Shape
{
    public $side1 = 1.0;
    public $side2 = 1.0;
    public $side3 = 1.0;

    /**
     * @return float
     */
    public function getSide1()
    {
        return $this->side1;
    }

    /**
     * @return float
     */
    public function getSide2()
    {
        return $this->side2;
    }

    /**
     * @return float
     */
    public function getSide3()
    {
        return $this->side3;
    }

    /**
     * @param float $side1
     */
    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    /**
     * @param float $side2
     */
    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    /**
     * @param float $side3
     */
    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function halfPerimeter()
    {
        return $this->getPerimeter() / 2;
    }

    public function getArea()
    {
        return round(pow($this->halfPerimeter() * ($this->halfPerimeter() - $this->side1) * ($this->halfPerimeter() - $this->side2) * ($this->halfPerimeter() - $this->side3), 0.5), 2, PHP_ROUND_HALF_DOWN);
    }

    public function toString()
    {
        return 'Side1: ' . $this->getSide1() . '<br>' . 'Side2: ' . $this->getSide2() . '<br>' . 'Side3: ' . $this->getSide3()
            . '<br>' . 'Area: ' . $this->getArea() . '<br>' . 'Perimeter: ' . $this->getPerimeter();

    }
}