
<?php
require 'vendor/autoload.php';

use MongoDB\Client as MongoClient;
use MongoDB\Driver\Manager;

$client = new MongoDB\Client("mongodb://localhost:27017");
$db = $client->ormawainspector;

$ormawaCollections = $db->ormawa;

$result = $ormawaCollections->insertOne(['nama' => 'Ormawa 1']);


echo "jumlah dokumen: ";
echo $ormawaCollections->count();
// drop collection
