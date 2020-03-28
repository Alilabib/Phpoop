<?php


class Chainingclass{

    public function foo()
    {
        echo 'foobar <br>';

        return $this;
    }

    public function baz()
    {
        echo 'foobaz';
    }

}