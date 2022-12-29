<?php
require_once('db/db.php');

class Ormawa extends DB
{
    private $ormawaCollections;
    public function __construct()
    {
        parent::__construct();
        $this->ormawaCollections = $this->db->ormawas;
    }
    public function ormawaCollections()
    {
        return $this->ormawaCollections;
    }
    public function getAll()
    {
        return $this->ormawaCollections->find();
    }
    public function count()
    {
        return $this->ormawaCollections->count();
    }
    public function insertOne($data)
    {
        return $this->ormawaCollections->insertOne($data);
    }
    public function drop()
    {
        return $this->ormawaCollections->drop();
    }
}
