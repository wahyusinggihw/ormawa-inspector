<?php
require_once 'db/db.php';

use  MongoDB\BSON\ObjectId;

class Rate extends DB
{
    public function __construct()
    {
        parent::__construct();
        $this->kegiatanCollections = $this->db->kegiatans;
        $this->rateCollections = $this->db->rates;
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

    // public function updateRating($id, $subRating)
    // {

    //     return $this->kegiatanCollections->updateOne(
    //         [
    //             '_id' => new MongoDB\BSON\ObjectId("$id"),
    //         ],
    //         [

    //             '$inc' => [
    //                 'rate.' . $subRating . '.jumlah' => 1
    //             ],

    //         ]
    //     );
    // }

    // ke ratings collection
    public function updateRating($data)
    {

        return $this->rateCollections->insertOne(
            $data
        );
    }

    // agregate rating
    public function totalRating($id)
    {
        $cursor = $this->rateCollections->aggregate([
            [
                '$match' => ['idKegiatan' => new ObjectId($id)]
            ],
            [
                '$group' => ['_id' => null, 'totalRating' => ['$sum' => '$rating'], 'count' => ['$sum' => 1]]
            ],
            [
                '$project' => ['_id' => 0, 'averageRating' => ['$divide' => ['$totalRating', '$count']]]
            ]
        ]);
        foreach ($cursor as $doc) {
            $averageRating = $doc['averageRating'];
        }
        return $averageRating;
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

    // public function totalRating()
    // {
    //     $cursor = $this->kegiatanCollections->find();
    //     $rating1 = '';
    //     $rating2 = '';
    //     $rating3 = '';
    //     $rating4 = '';
    //     $rating5 = '';
    //     foreach ($cursor as $item) {

    //         if ($item->rate == null) {
    //             return false;
    //         } else {
    //             $rating1 = $item->rate->rating1->jumlah;
    //             // $rating2 = $item->rate->rating2->jumlah;
    //             // $rating3 = $item->rate->rating3->jumlah;
    //             // $rating4 = $item->rate->rating4->jumlah;
    //             // $rating5 = $item->rate->rating5->jumlah;
    //             if ($rating1 == null) {
    //                 $rating1 = (object) [
    //                     'jumlah' => 0,
    //                 ];
    //             }
    //         }

    //         // $rating = $rating1 + $rating2 + $rating3 + $rating4 + $rating5;

    //         $ratingArr = [$rating1, $rating2, $rating3, $rating4, $rating5];

    //         var_dump($rating1);
    //         die;
    //         // foreach ($rate as $value) {
    //         // var_dump($value);
    //         // die;
    //         // $total += $value->jumlah * $value->nilai;
    //         // $jumlah += $value->jumlah;
    //         // }

    //         // $this->kegiatanCollections->updateOne(
    //         //     [
    //         //         '_id' => new MongoDB\BSON\ObjectId("$id"),
    //         //     ],
    //         //     [
    //         //         '$set' => [
    //         //             'totalRating' => $total / $jumlah,
    //         //         ],
    //         //     ]
    //         // );
    //     }
    // }
}
