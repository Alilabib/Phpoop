<?php

class User {

    // protected $db;

    // public function __construct(DataBase $db)
    // {
    //     $this->db = $db;
    // }

    // public function create(array $data)
    // {
    //     $this->db->query('INSERT INTO `users` ....');
    // }


    /**
     * using static get instance function
     */

    public function create(array $data)
    {
        $db = Database::getInstance();
        $db->query('INSERT INTO `users` ....');
    }



}