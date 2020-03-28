<?php

class Bird{

    protected $canFly;
    protected $legCount;

    public function __construct($canFly,$legCount){
        $this->canFly = $canFly;
        $this->legCount = $legCount;
    }

    protected function canFly()
    {
        return $this->canFly;
    }


    protected function getLegCount()
    {
        return $this->legCount;
    }


}