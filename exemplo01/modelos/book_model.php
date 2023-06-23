<?php

class Book{
    protected $conn;

    public function __construct(SQLite3 $connection)
    {
        $this->conn=$connection;    
    }

    public function find($book){
    }
    
    public function save($book){
        $this->conn->exec("INSERT INTO books (title) VALUES ('".$book."') ");
    }


}
