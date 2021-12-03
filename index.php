<?php 

include __DIR__ . "/client.php";
include __DIR__ . "/product.php";
include __DIR__ . "/data.php";



$listClients = [];
$client = new Client( 1, "Tim","Pavlenko","Reggio Emilia",[],new PaymentData("tastytimgm@gmail.com", 00001111222233334444));
var_dump($client);
$client2 = new Client(2, "Ivan", "Ivanov"  , "Moscow", [], new PaymentData("paypal@data.com", 3483209480934832904));


$client->addProduct(new Product([
    "id" => "3213",
    "marchio" => "Samsung",
    "pollici" => 55,
    "country" => "Cina"
 ]));


var_dump($client->getCart());

foreach($listTv as $key => $value){
    $client2->addProduct($value);
}

var_dump($client2->getCart());


$client->removeProduct(0);
var_dump($client->getCart());



?>