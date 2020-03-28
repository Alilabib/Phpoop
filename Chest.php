<?php


class Chest{

    protected $lock;
    protected $isClosed;


    public function __constract(Lock $lock)
    {
        $this->lock = $lock;
    }

    public function close($lock=true)
    {
        if($lock === true){
            $this->lock->lock();
        }

        $this->isClosed = true;

        echo 'Closed';
    }

    public function open()
    {
        if($this->lock->lock()){
            $this->lock->unlock();
        };

        $this->isClosed = false;


        echo 'Opend';
    }

    public function isClosed()
    {
        $this->isClosed;
    }

}