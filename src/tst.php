<?php
    //namespace App;
    require __DIR__. '/../../vendor/autoload.php';

    $client = new MongoDB\Client();
    $db = $client->__get("restaurants");
    $collection = $db->__get("japanese");
    $insertOneResult = $collection->insertOne([
        'name' => 'Sushi Mori',
        'stars' => 3,
        'location' => 'Langley',
    ]);

    echo $_SERVER['REQUEST_URI'];

    echo $serverRequest;


    printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

    var_dump($insertOneResult->getInsertedId());
?>