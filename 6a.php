<?php
require 'vendor/autoload.php';

echo extension_loaded("mongodb")? "loaded\n" : "notloaded\n";
$m = new MongoDB\Client("mongodb://localhost:27017");
echo "connected";

$db = $m->mydb1;
echo "Database mybd1 selected";
$collection = $db->mycol;
echo "Collection selected successfully";
$document = ["name"=>"abc","Age"=>20,"Add"=>"sion" ];
$collection ->insertOne($document);
echo "Document inserted successfully";

?>
