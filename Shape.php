<?php


class Shape
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function show(){
        return "Hello, I'm ".$this->getName();
    }
}