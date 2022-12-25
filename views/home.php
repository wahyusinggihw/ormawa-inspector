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
    require('db/ormawa.php');
    $db = new Ormawa();
    $random_str = rand(0, 1000);
    // $db->insertOne(['nama' => 'Ormawa' . $random_str]);
    // tambah 1 dokumen setiap refresh coy
    $getOrmawa = $db->ormawaCollections();
    echo "Jumlah dokumen: ";
    echo $getOrmawa->count() . "<br> <br>";
    $ormawaCollections = $getOrmawa->find();
    echo "Dokuments: <br>";
    foreach ($ormawaCollections as $document) {
        echo $document['nama'] . "<br>";
    }
    ?>
</body>

</html>