<?php

class Kindergarten
{   
    private $newChild[];


    public function child()
    {
        return $this->newChild;
    }

    public function registerChild($newChild)
    {   
        $this->newChild = $newChild;
        return $this;
    }
}