<?php

class Kindergarten 
{   private $spaciousness;
    private $playingFields;
    private $eliteClass;


    public function getSpaciousness()
    {
        return $this->spaciousness;
    }

    public function setSpaciousness($spaciousness)
    {
        $this->spaciousness = $spaciousness;
        return $this;
    }

    public function getPlayingFields()
    {elite_class
        return $this->playingFields;
    }

    public function setPlayingFields($playingFields)
    {
        $this->playingFields = $playingFields;
        return $this;
    }

    public function getEliteClass()
    {
        return $this->eliteClass;
    }

    public function setEliteClass($eliteClass)
    {
        $this->eliteClass = $eliteClass;
        return $this;
    }

    public function open()
    {
        echo "детсад открыта";
        return $this;
    }

    public function close()
    {
        echo "детсад закрыта";
        return $this;
    }

    public function kitchenСlosed()
    {
        echo "детсад открыта";
        return $this;
    }

    public function close()
    {
        echo "детсад закрыта";
        return $this;
    }
}
