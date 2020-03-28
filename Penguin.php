<?php


class Penguin extends Bird{
    public function foo()
    {
        echo $this->legCount;
    }

    public function ifCan()
    {
        if($this->canFly()){
            echo "can Fly";
        }else{
            echo "can not Fly";
        }
    }
}