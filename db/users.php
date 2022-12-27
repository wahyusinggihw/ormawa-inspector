<?php
require_once 'db/db.php';

class Users extends DB
{
    public function __construct()
    {
        parent::__construct();
        $this->usersCollections = $this->db->users;
    }

    public function usersCollections()
    {
        return $this->usersCollections;
    }

    public function getAll()
    {
        return $this->usersCollections->find();
    }

    public function count()
    {
        return $this->usersCollections->count();
    }

    public function insertOne($data)
    {
        return $this->usersCollections->insertOne($data);
    }

    public function drop()
    {
        return $this->usersCollections->drop();
    }
}
