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
    public function respondenChecker()
    {
        $currentUserId = $_SESSION['user_id'];
        $kegiatan = $this->kegiatanCollections->findOne([
            "responden." . $currentUserId . ".id" => new MongoDB\BSON\ObjectId("$currentUserId"),
        ]);
        // $ids = new MongoDB\BSON\ObjectId("$currentUserId")
        // var_dump("responden." . $currentUserId . ".id" . $ids);
        // die;
        $ids = $currentUserId;
        $stringId = (string)$ids;
        if (empty($kegiatan)) {
            return false;
        } else {
            // var_dump($stringId);
            // die;
            // var_dump($kegiatan->responden->$stringId->id);
            // die;
            if ($kegiatan->responden->$stringId->id == $currentUserId) {
                return true;
            } else {
                return false;
            }
        }

        // if ($kegiatan != null) {
        //     return true;
        // } else {
        //     return false;
        // }
        // $responden = $kegiatan->responden;
        // $respondenArr = array_map(function ($responden) {
        //     return $responden->id;
        // }, $responden);
        // var_dump($respondenArr);
        // die;
        // if (in_array($currentUserId, $respondenArr)) {
        //     return true;
        // } else {
        //     return false;
        // }
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

    public  function getByRole($role)
    {
        return $this->kegiatanCollections->find([
            'role' => $role,
        ]);
    }

    public function count()
    {
        return $this->kegiatanCollections->komentars->countDocument();
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

    public function komentarChecker($id)
    {
        return $this->kegiatanCollections->find(
            [
                '_id' => new MongoDB\BSON\ObjectId("$id"),
                'komentars' => 1,
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
