<?php

use MongoDB\Client as MongoClient;

class DB
{
    private $client;
    private $db;
    private $ormawaCollections;

    public function __construct()
    {
        $this->client = new MongoClient("mongodb://localhost:27017");
        $this->db = $this->client->ormawainspector;
        $this->ormawaCollections = $this->db->ormawa;
    }

    public function getOrmawaCollections()
    {
        return $this->ormawaCollections;
    }
}
