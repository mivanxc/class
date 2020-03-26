<?php

class Person 
{   private $name;
    private $age;
    private $height;
    private $weight;

    private $eat = 'есть<br>';
    private $sleep ="спать<br>";
    private $embroider = "вязать<br>";
    private $walk = "гулять<br>";
    private $work = "работать<br>";


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($width)
    {
        $this->weight = $weight;
        return $this;
    }

    public function getEat()
    {
        return $this->eat;
    }

    public function setEat($eat)
    {
        $this->eat = $eat;
        return $this;
    }

    public function sleep()
    {
        return $this->sleep;
    }

    public function embroider()
    {
        return $this->embroider;
    }

    public function walk()
    {
        return $this->walk;
    }

    public function  work()
    {
        return $this->work;
    }
}
