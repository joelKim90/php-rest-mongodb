<?php
    require_once '../vendor/autoload.php';
    include('./src/router.php');
    include('./src/repository/abstractRepository.php');

    $config = require_once('./config.php');

    $dbClient = new \MongoDB\Client("mongodb://localhost", $config['db']);

    $uri = explode('/', $_SERVER['REQUEST_URI']);

    //echo  sizeof($uri);

    if(sizeof($uri) <= 2) {
        
        throw new Exception("API parameters is not given.");
    }

    $dbCuisineCollection =  $uri[2];

    if(isset($uri[3])) {
        $dbCuisineStar = $uri[3];
        if($dbCuisineStar > 5 || $dbCuisineStar < 0) {
            throw new Exception("Invalid value entered for stars");
        }
    }

    // foreach($uri as $val)  {
    //     echo $val, "\n";
    // }
    // //Dependency for db

    //$router = new router($_SERVER, $_POST);
?>