
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
