<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require 'vendor/autoload.php';

    use MongoDB\Client as MongoClient;

    $client = new MongoClient("mongodb://localhost:27017");
    $db = $client->ormawainspector;

    $ormawaCollections = $db->ormawa;

    $random_str = random_int(1, 1000);

    // tambah 1 dokumen setiap refresh coy
    $result = $ormawaCollections->insertOne(['nama' => 'Ormawa' . $random_str]);


    echo "Jumlah dokumen: ";
    echo $ormawaCollections->count() . "<br> <br>";

    echo "Dokuments: <br>";
    foreach ($ormawaCollections->find() as $document) {
        echo $document['nama'] . "<br>";
    }
    ?>
</body>

</html>