<?php
// base model
class Model extends Database
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
    }
}
