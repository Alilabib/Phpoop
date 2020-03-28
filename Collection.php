<?php 

// class Collection{
class Collection implements Countable, JsonSerializable{

    protected $items = [];

    /**
     *  Magic Method => L8
     */

    //  __construct()

    //  __set()

    //  __get()

    //  __call()

    //  __toString()

    public function __set($key,$value)
    {
        $this->set($key,$value);
    }

    public function __get($value)
    {
       return $this->get($value);
    }

    public function __call($func , $args)
    {
        echo $func.' has been Called with arguments ' . implode(', ' , $args);
    }


    public function __toString()
    {
        return $this->jsonSerialize();
    }


    public function add($value)
    {
        $this->items[] =$value;
    }


    public function set($key, $value)
    {
        $this->items[$key] = $value;
    }

    public function toJson()
    {
        return json_encode($this->items);
    }


    public function all()
    {
        return $this->items;
    }

    public function get($key)
    {
        return array_key_exists($key, $this->items) ? $this->items[$key] : null;
    }

    //Upcomming functions override from implementd interfaces 
    public function count()
    {
        return count($this->items);
    }
        
    function jsonSerialize()
    {
        return json_encode($this->items);
    }




}