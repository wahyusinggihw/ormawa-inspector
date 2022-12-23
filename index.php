
<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$db = $client->ormawainspector;

$ormawaCollections = $db->ormawa;

$result = $ormawaCollections->insertOne(['nama' => 'Ormawa 1']);


echo "jumlah dokumen: ";
echo $ormawaCollections->count();
// drop collection
