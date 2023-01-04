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

    public function getByStatus($status)
    {
        return $this->kegiatanCollections->find([
            'details.status' => $status,
        ]);
    }

    public function respondenChecker($id)
    {
        $currentUserId = $_SESSION['user_id'];
        $stringId = (string) $currentUserId;
        $status = $this->kegiatanCollections->findOne([
            '_id' => new MongoDB\BSON\ObjectId("$id"),

        ]);

        if (isset($status['responden']) && isset($status['responden']->{$stringId})) {
            return true;
        } else {
            return false;
        }
    }

    //get by id
    public function getKegiatan($id)
    {
        return $this->kegiatanCollections->find([
            "_id" => new MongoDB\BSON\ObjectId("$id"),

        ]);
    }
    public function getById($id)
    {
        return $this->kegiatanCollections->find([
            'idOrmawa' => $id,
        ]);
    }

    public function getAllRating()
    {
        return $this->kegiatanCollections->find(['totalRating' => ['$exists' => true]]);
    }

    public function getByIdRating($id)
    {
        return $this->kegiatanCollections->find(['idOrmawa' => $id, 'totalRating' => ['$exists' => true]]);
    }

    public  function getByRole($role)
    {
        return $this->kegiatanCollections->find([
            'role' => $role,
        ]);
    }

    public function updateData($id, $data)
    {
        return $this->kegiatanCollections->updateOne(
            [
                '_id' => new MongoDB\BSON\ObjectId("$id"),
            ],
            [
                '$set' => $data,
            ],
        );
    }

    public function insertOne($data)
    {
        return $this->kegiatanCollections->insertOne($data);
    }

    public function insertKomentar($id, $data)
    {
        return $this->kegiatanCollections->updateOne(
            [
                '_id' => new MongoDB\BSON\ObjectId("$id"),
            ],
            [
                '$push' => $data
            ],
        );
    }

    public function drop($id)
    {
        return $this->kegiatanCollections->deleteOne([
            '_id' => new MongoDB\BSON\ObjectId("$id"),
        ],);
    }
}
