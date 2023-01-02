<?php
require_once 'db/users.php';
require_once 'db/kegiatan.php';
class Komentar extends Kegiatan
{
    public function __construct()
    {
        parent::__construct();
        $this->kegiatanCollections = $this->db->kegiatans;
    }

    public function newKomentar($data)
    {
        return $this->kegiatanCollections->insertOne(
            [
                '$set' => $data,
            ],
        );
    }

    public function deleteKomentar($id)
    {
        return $this->kegiatanCollections->deleteOne(
            [
                '_id' => new MongoDB\BSON\ObjectId($id),
            ],
        );
    }
}
