<?php
require_once 'db/db.php';

class Kegiatan extends DB
{
    public function __construct()
    {
        parent::__construct();
        $this->kegiatanCollections = $this->db->kegiatans;
    }

    public function kegiatanCollections()
    {
        return $this->kegiatanCollections;
    }

    public function getAll()
    {
        return $this->kegiatanCollections->find();
    }

    //get by id
    public function getKegiatan()
    {
        return $this->kegiatanCollections->find(
            array(
                "_id" => "bem",
                "kegiatan" => array(
                    "_id" => array(
                        '$oid' => array(
                            "63ad6f75fad612d30bfd47de",
                        )
                    )
                )
            )
        );

        // return $this->kegiatanCollections->find(array("_id" => "bem", array("kegiatan" => {"_id" => "63ad6f75fad612d30bfd47de"})));
        // return $this->kegiatanCollections->find(array("_id" => "bem"), array("kegiatan" => ["_id" => "63ad6f75fad612d30bfd47de"]));
    }
    public function getById($id)
    {
        return $this->kegiatanCollections->find([
            '_id' => $id,
        ]);
    }

    public  function getByRole($role)
    {
        return $this->kegiatanCollections->find([
            'role' => $role,
        ]);
    }

    public function count()
    {
        return $this->kegiatanCollections->count();
    }

    public function insertOne($data)
    {
        return $this->kegiatanCollections->insertOne($data);
    }

    public function drop()
    {
        return $this->kegiatanCollections->drop();
    }
}
