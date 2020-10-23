<?php
require 'vendor/autoload.php';
//$client = new MongoDB\Client("mongodb://localhost:27010");
$client = new MongoDB\Client;
$companydb = $client->companydb;


// $result3 = $companydb->createCollection('dnewcollection');
// var_dump($result3);


//$companydb = $client->companydb;
// $result2 = $companydb->dropCollection('mycollection');
// var_dump($result2);



$collections = $companydb->listCollections();
foreach($collections as $collection )
{
    var_dump($collection);
}


// $result1 = $companydb->createCollection('mycollection');
// var_dump($result1);




?>