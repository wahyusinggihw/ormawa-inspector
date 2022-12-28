<?php
require_once 'db/db.php';

class DosenPembimbing extends DB
{
    public function __construct()
    {
        parent::__construct();
        $this->dosenCollections = $this->db->dosen_pembimbing;
    }

    public function dosenCollections()
    {
        return $this->dosenCollections;
    }

    public function getAll()
    {
        return $this->dosenCollections->find();
    }

    public function findOneDosen($data)
    {
        return $this->dosenCollections->findOne($data);
    }

    public function count()
    {
        return $this->dosenCollections->count();
    }

    public function insertOne($data)
    {
        return $this->dosenCollections->insertOne($data);
    }

    public function updateOne($data)
    {
        return $this->dosenCollections->updateOne($data);
    }

    public function drop()
    {
        return $this->dosenCollections->drop();
    }
}
