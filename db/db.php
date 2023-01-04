<?php
require_once("vendor/autoload.php");

class DB
{
    private $client;

    public function __construct()
    {
        $this->client = new MongoDB\Client("mongodb://localhost:27017");
        $this->db = $this->client->ormawainspector;
    }
}
